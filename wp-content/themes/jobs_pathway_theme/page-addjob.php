<?php

    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";

/* Template Name: Add Job Page */

// Redirect if not logged in
if (!is_user_logged_in()) {
    wp_redirect(site_url('/login'));
    exit;
}

// Process form submission
$job_added_message = '';
$job_error_message = '';

if ($_POST && isset($_POST['add_job_form'])) {
    
    // Verify nonce for security
    if (!isset($_POST['add_job_nonce']) || !wp_verify_nonce($_POST['add_job_nonce'], 'add_job_action')) {
        $job_error_message = 'Security verification failed. Please try again.';
    }
    // Validate required fields
    elseif (empty($_POST['company_name']) || empty($_POST['job_title']) || empty($_POST['location'])) {
        $job_error_message = 'Please fill in all required fields.';
    }
    else {
        // Create the job application post
        $post_data = array(
            'post_title'   => sanitize_text_field($_POST['job_title'] . ' at ' . $_POST['company_name']),
            'post_content' => '', // Leave empty, using custom field for description
            'post_type'    => 'job_application',
            'post_status'  => 'publish',
            'post_author'  => get_current_user_id()
        );
        
        $post_id = wp_insert_post($post_data);
        
        if (!is_wp_error($post_id)) {
            // Add custom meta fields
            update_post_meta($post_id, 'company_name', sanitize_text_field($_POST['company_name']));
            update_post_meta($post_id, 'job_title', sanitize_text_field($_POST['job_title']));
            update_post_meta($post_id, 'salary', sanitize_text_field($_POST['salary']));
            update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
            update_post_meta($post_id, 'contact_person', sanitize_text_field($_POST['contact_person']));
            update_post_meta($post_id, 'contact_details', sanitize_text_field($_POST['contact_details']));
            update_post_meta($post_id, 'description', sanitize_textarea_field($_POST['description']));
            
            // Initialize boolean fields to false (0)
            update_post_meta($post_id, 'application_sent', 0);
            update_post_meta($post_id, 'cv_sent', 0);
            update_post_meta($post_id, 'interview_secured', 0);
            update_post_meta($post_id, 'interview_attended', 0);
            update_post_meta($post_id, 'references', 0);
            update_post_meta($post_id, 'got_job', 0);
            
            // Success - redirect to dashboard
            wp_redirect(site_url('/dashboard?job_added=success'));
            exit;
        } else {
            $job_error_message = 'Error creating job application: ' . $post_id->get_error_message();
        }
    }
}
?>

<?php get_header(); ?>

<body class="body---add--job">

    <header>
        <h1> <?php echo $website_title ?> </h1>
        <h2>Keep track of your way to your professional life</h2>
    </header>

    <main>

        <?php 
        // Display error message if present
        if (!empty($job_error_message)) {
            echo '<p class="job-error" style="color: red; background: #ffe6e6; padding: 15px; border-radius: 5px; margin: 20px; text-align: center;"><strong>Error:</strong> ' . $job_error_message . '</p>';
        }
        ?>

        <?php require "assets/template-parts/add-job.php"; ?>

    </main>

<?php get_footer(); ?>