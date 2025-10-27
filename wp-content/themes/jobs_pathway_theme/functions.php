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
