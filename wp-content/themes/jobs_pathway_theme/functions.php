<?php 

// echo "functions.php";

// Add custom post type
//function jt_register_job_application_cpt() {

    /* register_post_type('job_application', [

        $labels = array(

            'name'                => _x( 'Job Applications', 'Post Type General Name', 'jobs_pathway_theme' ),
            'singular_name'       => _x( 'Job Application', 'Post Type Singular Name', 'jobs_pathway_theme' ),
            'public'              => true,
            'menu_name'           => __( 'Jobs', 'jobs_pathway_theme' ),
            'name_admin_bar'      => __( 'Job', 'jobs_pathway_theme' ),
            'archives'            => __( 'Job Archives', 'jobs_pathway_theme' ),
            'has_archive'         => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => ['title', 'editor', 'author'],
            'show_in_rest' => true, // allows Gutenberg / REST API
        )
    ]);
}

add_action('init', 'jt_register_job_application_cpt'); */

// add_action('init', $labels);


// redirect to custom login page from default (but allow POST requests for login processing)
function jt_redirect_wp_login() {
  global $pagenow;
  
  // Only redirect GET requests, not POST (which are login attempts)
  if ($pagenow === 'wp-login.php' && !is_user_logged_in() && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Don't redirect if it's a logout action
    if (!isset($_GET['action']) || $_GET['action'] !== 'logout') {
      wp_redirect(site_url('/login'));
      exit;
    }
  }
}
add_action('init', 'jt_redirect_wp_login');


// Handle login failures and redirect back to custom login page
function jt_login_failed() {
  wp_redirect(site_url('/login?login=failed'));
  exit;
}
add_action('wp_login_failed', 'jt_login_failed');


// Redirect to custom login on logout
function jt_logout_redirect() {
  wp_redirect(site_url('/login?loggedout=true'));
  exit;
}
add_action('wp_logout', 'jt_logout_redirect');

// Add custom post type
function jt_register_job_application_cpt() {

    register_post_type('job_application', [

        'labels' => [
            'name' => 'Job Applications',
            'singular_name' => 'Job Application'
        ],

        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'job-application', 'with_front' => false],
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'author'],
        'show_in_rest' => true, // allows Gutenberg / REST API
    ]);
}

add_action('init', 'jt_register_job_application_cpt');


// Flush rewrite rules on theme activation (only once)
function jt_rewrite_flush() {
    jt_register_job_application_cpt();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'jt_rewrite_flush' );


// Auto assign new job application posts to the logged in user
add_filter('acf/pre_save_post', function($post_id) {

  if ($post_id != 'new_post') return $post_id;

  $post = [
    'post_status' => 'publish',
    'post_type' => 'job_application',
    'post_author' => get_current_user_id(),
  ];

  return wp_insert_post($post);
});


// helper function to generate random motivation messages
function jt_random_motivation() {

  $messages = [
    
    "Add code to template where you need it.",
    "Message 1.",
    "Message 2.",
    "Message 3.",
    "Message 4.",
    "Message 5.",
  ];

  return $messages[array_rand($messages)];
}


// Enqueue styles and scripts in `functions.php`
function jt_enqueue_styles() {

  // Styles
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Scripts
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/app.js', array(), '1.0', true );
  
  // Localize script to pass AJAX URL and nonce
  wp_localize_script( 'main', 'jobPathwayAjax', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'nonce' => wp_create_nonce( 'job_pathway_ajax_nonce' )
  ));
}

add_action( 'wp_enqueue_scripts', 'jt_enqueue_styles' );


// Force show admin bar for logged-in users (with proper checks)
add_filter('show_admin_bar', function($show) {
  if (is_user_logged_in() && current_user_can('read')) {
    return true;
  }
  return $show;
}, 10);


// Add theme support for various WordPress features
function jt_theme_support() {
  // Enable admin bar
  add_theme_support('admin-bar');
  
  // Enable title tag support
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'jt_theme_support');


// Fix admin bar warnings by ensuring user meta exists
function jt_fix_admin_bar_meta($user_id) {
  // Ensure show_admin_bar_front meta exists for all users
  if (get_user_meta($user_id, 'show_admin_bar_front', true) === '') {
    update_user_meta($user_id, 'show_admin_bar_front', 'true');
  }
}
add_action('user_register', 'jt_fix_admin_bar_meta');
add_action('wp_login', 'jt_fix_admin_bar_meta');


// AJAX handler to update job application meta fields
function jt_update_job_meta() {
  
  // Verify nonce
  if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'job_pathway_ajax_nonce')) {
    wp_send_json_error(array('message' => 'Security check failed'));
    return;
  }
  
  // Check if user is logged in
  if (!is_user_logged_in()) {
    wp_send_json_error(array('message' => 'You must be logged in'));
    return;
  }
  
  // Get and validate parameters
  $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
  $field_name = isset($_POST['field_name']) ? sanitize_text_field($_POST['field_name']) : '';
  $value = isset($_POST['value']) ? intval($_POST['value']) : 0;
  
  if (!$post_id || !$field_name) {
    wp_send_json_error(array('message' => 'Missing required parameters'));
    return;
  }
  
  // Verify the post exists and is a job_application
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'job_application') {
    wp_send_json_error(array('message' => 'Invalid job application'));
    return;
  }
  
  // Verify the user owns this post
  if ($post->post_author != get_current_user_id()) {
    wp_send_json_error(array('message' => 'You do not have permission to edit this job application'));
    return;
  }
  
  // Allowed field names for security
  $allowed_fields = array(
    'application_sent',
    'cv_sent',
    'interview_secured',
    'interview_attended',
    'references',
    'got_job'
  );
  
  if (!in_array($field_name, $allowed_fields)) {
    wp_send_json_error(array('message' => 'Invalid field name'));
    return;
  }
  
  // Update the meta field
  $updated = update_post_meta($post_id, $field_name, $value);
  
  if ($updated !== false) {
    wp_send_json_success(array(
      'message' => 'Field updated successfully',
      'post_id' => $post_id,
      'field_name' => $field_name,
      'value' => $value
    ));
  } else {
    wp_send_json_error(array('message' => 'Failed to update field'));
  }
}

// Register AJAX handlers for both logged in and logged out users
add_action('wp_ajax_update_job_meta', 'jt_update_job_meta');
add_action('wp_ajax_nopriv_update_job_meta', 'jt_update_job_meta');


// AJAX handler to update entire job profile (all fields at once)
function jt_update_job_profile() {
  
  // Verify nonce
  if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'job_pathway_ajax_nonce')) {
    wp_send_json_error(array('message' => 'Security check failed'));
    return;
  }
  
  // Check if user is logged in
  if (!is_user_logged_in()) {
    wp_send_json_error(array('message' => 'You must be logged in'));
    return;
  }
  
  // Get and validate parameters
  $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
  $fields_json = isset($_POST['fields']) ? $_POST['fields'] : '';
  
  if (!$post_id || empty($fields_json)) {
    wp_send_json_error(array('message' => 'Missing required parameters'));
    return;
  }
  
  // Decode fields
  $fields = json_decode(stripslashes($fields_json), true);
  if (!is_array($fields)) {
    wp_send_json_error(array('message' => 'Invalid fields data'));
    return;
  }
  
  // Verify the post exists and is a job_application
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'job_application') {
    wp_send_json_error(array('message' => 'Invalid job application'));
    return;
  }
  
  // Verify the user owns this post
  if ($post->post_author != get_current_user_id()) {
    wp_send_json_error(array('message' => 'You do not have permission to edit this job application'));
    return;
  }
  
  // Allowed field names for security
  $allowed_fields = array(
    'company_name',
    'job_title',
    'salary',
    'location',
    'contact_person',
    'contact_details',
    'description'
  );
  
  $updated_count = 0;
  $errors = array();
  
  // Update each field
  foreach ($fields as $field_name => $field_value) {
    if (in_array($field_name, $allowed_fields)) {
      
      // Handle description with textarea sanitization, but still as meta field
      if ($field_name === 'description') {
        $updated = update_post_meta($post_id, $field_name, sanitize_textarea_field($field_value));
        if ($updated !== false) {
          $updated_count++;
        } else {
          $errors[] = 'Failed to update description';
        }
      } else {
        // Update other meta fields with text sanitization
        $updated = update_post_meta($post_id, $field_name, sanitize_text_field($field_value));
        if ($updated !== false) {
          $updated_count++;
        }
      }
    }
  }
  
  if (count($errors) > 0) {
    wp_send_json_error(array(
      'message' => 'Some fields failed to update',
      'errors' => $errors,
      'updated_count' => $updated_count
    ));
  } else {
    wp_send_json_success(array(
      'message' => 'Job profile updated successfully',
      'post_id' => $post_id,
      'updated_count' => $updated_count
    ));
  }
}

add_action('wp_ajax_update_job_profile', 'jt_update_job_profile');
add_action('wp_ajax_nopriv_update_job_profile', 'jt_update_job_profile');


// AJAX handler to delete all jobs for current user
function jt_delete_all_user_jobs() {
  
  // Verify nonce
  if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'job_pathway_ajax_nonce')) {
    wp_send_json_error(array('message' => 'Security check failed'));
    return;
  }
  
  // Check if user is logged in
  if (!is_user_logged_in()) {
    wp_send_json_error(array('message' => 'You must be logged in'));
    return;
  }
  
  $current_user_id = get_current_user_id();
  
  // Get all job applications for the current user
  $args = array(
    'post_type' => 'job_application',
    'author' => $current_user_id,
    'posts_per_page' => -1,
    'post_status' => 'publish'
  );
  
  $user_jobs = get_posts($args);
  
  if (empty($user_jobs)) {
    wp_send_json_error(array('message' => 'No jobs found to delete'));
    return;
  }
  
  $deleted_count = 0;
  $failed_count = 0;
  
  // Delete each job
  foreach ($user_jobs as $job) {
    $deleted = wp_trash_post($job->ID);
    if ($deleted) {
      $deleted_count++;
    } else {
      $failed_count++;
    }
  }
  
  if ($deleted_count > 0) {
    wp_send_json_success(array(
      'message' => "Successfully deleted {$deleted_count} job(s)",
      'deleted_count' => $deleted_count,
      'failed_count' => $failed_count,
      'redirect_url' => site_url('/dashboard')
    ));
  } else {
    wp_send_json_error(array('message' => 'Failed to delete jobs'));
  }
}

add_action('wp_ajax_delete_all_user_jobs', 'jt_delete_all_user_jobs');
add_action('wp_ajax_nopriv_delete_all_user_jobs', 'jt_delete_all_user_jobs');