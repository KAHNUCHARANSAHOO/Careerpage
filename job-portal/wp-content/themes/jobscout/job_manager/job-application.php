<?php if ( $apply = get_the_job_application_method() ) :
	wp_enqueue_script( 'wp-job-manager-job-application' );
	?>
	<div class="job_application application">
		<?php do_action( 'job_application_start', $apply ); ?>

		<input type="button" class="application_button button popmake-159" value="<?php esc_attr_e( 'Apply for job', 'jobscout' ); ?>" />

		<div class="popmake-159">
			<?php
				/**
				 * job_manager_application_details_email or job_manager_application_details_url hook
				 */
				// do_action( 'job_manager_application_details_' . $apply->type, $apply );
			?>
		</div>
		<?php //do_action( 'job_application_end', $apply ); ?>
	</div>
<?php endif; ?>
