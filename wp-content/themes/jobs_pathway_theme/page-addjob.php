<?php

    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";

/* Template Name: Add Job Page */
?>


<?php get_header(); ?><body class="body---add--job">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <h3 class="filename">page-addjob.php</h3>

            <!-- <a href="list.php">back</a> -->

            <p><?php require "assets/template-parts/add-job.php"; ?> </p>

        </main>

<?php get_footer(); ?>