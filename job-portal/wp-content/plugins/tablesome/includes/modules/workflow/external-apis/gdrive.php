<?php

namespace Tablesome\Includes\Modules\Workflow\External_Apis;

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!class_exists('\Tablesome\Includes\Modules\Workflow\External_Apis\GDrive')) {
    class GDrive
    {
        public $integration = 'google';

        public function get_spreadsheets()
        {
            $access_token = maybe_refresh_access_token_by_integration($this->integration);

            $url = "https://www.googleapis.com/drive/v3/files";
            $parameters = [
                'q' => "mimeType='application/vnd.google-apps.spreadsheet'",
                'alt' => 'json',
                'pageSize' => 1000,
            ];
            $url = add_query_arg($parameters, $url);

            $response = wp_remote_post($url, array(
                'method' => 'GET',
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token,
                ),
            ));

            $response_code = wp_remote_retrieve_response_code($response);
            $data = json_decode(wp_remote_retrieve_body($response), true);

            $response_failed = (is_wp_error($response) || !is_tablesome_success_response($response_code));
            $is_authorization_error = isset($data['error']['code']) && $data['error']['code'] == 401;
            $error_data = isset($data['error']) ? $data['error'] : [];

            if ($is_authorization_error) {
                Retry::set_integration($this->integration);
                return Retry::call([$this, 'get_spreadsheets'], []);
            }

            Retry::reset_count();
            if ($response_failed && !$is_authorization_error) {
                return [];
            }
            return $data;
        }

        public function upload_file($args = array())
        {
            $access_token = maybe_refresh_access_token_by_integration($this->integration);

            $url = "https://www.googleapis.com/drive/v3/files?fields=*";

            $file_content = isset($args['file_content']) ? $args['file_content'] : '';
            $file_path = isset($args['file_path']) ? $args['file_path'] : '';
            $file_name = isset($args['file_name']) ? $args['file_name'] : '';
            $location = isset($args['location']) ? $args['location'] : '';
            $directory_id = $this->get_directory_id_from_url($location);

            if (!$directory_id) {
                error_log('Directory ID is not found');
                return;
            }

            if (!$file_content && $file_path) {
                $file_content = file_get_contents($file_path);
            }

            if (!$file_content) {
                error_log('File content is not found');
                return;
            }

            $payload = [
                "data" => $file_content,
                "name" => $file_name,
                "mimeType" => "text/csv",
                "uploadType" => "multipart",
                "convert" => true,
                'parents' => [
                    $directory_id,
                ],
            ];

            $response = wp_remote_post($url, array(
                'method' => 'POST',
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token,
                ),
                'body' => json_encode($payload),
            ));

            $response_code = wp_remote_retrieve_response_code($response);
            $data = json_decode(wp_remote_retrieve_body($response), true);
            $response_failed = (is_wp_error($response) || !is_tablesome_success_response($response_code));
            $is_authorization_error = isset($data['error']['code']) && $data['error']['code'] == 401;
            if ($is_authorization_error) {
                Retry::set_integration($this->integration);
                return Retry::call([$this, 'add_files_to_drive'], [$args]);
            }
            Retry::reset_count();
            if ($response_failed && !$is_authorization_error) {
                return false;
            }
            $file_id = isset($data['id']) ? $data['id'] : '';
            if (!$file_id) {
                return false;
            }
            $content_updated = $this->add_content($file_id, $file_content);
            if (!$content_updated) {
                return false;
            }
            return $data;
        }

        public function add_content($file_id, $content)
        {
            $access_token = maybe_refresh_access_token_by_integration($this->integration);

            $url = "https://www.googleapis.com/upload/drive/v3/files/" . $file_id . "?uploadType=media";

            $response = wp_remote_post($url, array(
                'method' => 'PATCH',
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token,
                ),
                'body' => $content,
            ));

            $response_code = wp_remote_retrieve_response_code($response);
            $data = json_decode(wp_remote_retrieve_body($response), true);
            $response_failed = (is_wp_error($response) || !is_tablesome_success_response($response_code));
            $is_authorization_error = isset($data['error']['code']) && $data['error']['code'] == 401;
            if ($is_authorization_error) {
                Retry::set_integration($this->integration);
                return Retry::call([$this, 'add_content'], [$file_id, $content]);
            }
            Retry::reset_count();
            if ($response_failed && !$is_authorization_error) {
                return false;
            }
            $content_updated = (isset($data['id']) && $data['id'] == $file_id);
            return $content_updated;
        }

        private function get_directory_id_from_url($url)
        {
            $is_valid_url = filter_var($url, FILTER_VALIDATE_URL);
            if (!$is_valid_url) {
                return '';
            }
            $url_parts = parse_url($url);
            $path = isset($url_parts['path']) ? $url_parts['path'] : '';
            if (empty($path)) {
                return '';
            }
            $path_parts = explode('/', $path);
            $directory_id = end($path_parts);
            if (empty($directory_id) || is_null($directory_id)) {
                return '';
            }
            return $directory_id;
        }
    }
}
