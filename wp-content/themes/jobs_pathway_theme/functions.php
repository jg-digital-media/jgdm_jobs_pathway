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
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'author'],
        'show_in_rest' => true, // allows Gutenberg / REST API
    ]);
}

add_action('init', 'jt_register_job_application_cpt');


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
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/app.js' );
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