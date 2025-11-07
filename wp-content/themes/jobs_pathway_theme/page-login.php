<?php

    /* Template Name: Login Template */

    // website title
    $website_title = "Login | Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";
    $website_keywords = "Jobs Pathway, Jobs, Pathway, Jobs Tracker, Job Tracker, Job Tracking, Job Tracking System";

    // Meta Variables
    $page_description = "Keep track of your way to your professional life.";
    $page_keywords = "";
    $page_title = "Jobs Pathway";
    $page_url = "https://projects.jonniegrieve.co.uk/jobs_pathway/";
    $page_icon = "favicon.png";

    $page_image = "https://projects.jonniegrieve.co.uk/jobs_pathway/";

?>

<?php

    // if user is logged in, send to dashboard page
    if (is_user_logged_in()) {
        wp_redirect(site_url('/dashboard?loggedin=true'));
        exit;
    }

?>

<?php get_header(); ?>

<body class="home">

    <main class="body---login">

        <header class="header---login--page">

            <h1> Jobs Pathway App <?php //echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>            

        </header>

        <section class="container---element--login">

            <?php require "assets/template-parts/login.php"; ?>

        </section>
    
    </main>

<?php get_footer() ?>