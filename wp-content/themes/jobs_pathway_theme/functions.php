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