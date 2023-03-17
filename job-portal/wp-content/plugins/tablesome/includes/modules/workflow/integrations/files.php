<?php

namespace Tablesome\Includes\Modules\Workflow\Integrations;

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!class_exists('\Tablesome\Includes\Modules\Workflow\Integrations\Files')) {
    class Files
    {
        public $gdrive;
        public function __construct()
        {
            $this->gdrive = new \Tablesome\Includes\Modules\Workflow\External_Apis\GDrive();
        }

        public function get_config()
        {
            return array(
                'integration' => 'files',
                'integration_label' => __('Files', 'tablesome'),
                'is_active' => true,
                'is_premium' => true,
                'actions' => array(),
            );
        }

        public function get_folders()
        {
            return $this->gdrive->get_folders();
        }

        public function get_sub_folders($parent_folder_id)
        {
            return $this->gdrive->get_sub_folders($parent_folder_id);
        }

    }
}
