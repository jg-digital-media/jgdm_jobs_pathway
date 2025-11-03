<?php

/* Template Name: Login Template */

?>

<!DOCTYPE html>
<html lang="en">
<head>    

    <title>JGDM Jobs Pathway App</title>

</head>

<?php

    // if user is logged in, send to dashboard page
    if (is_user_logged_in()) {
        wp_redirect(site_url('/dashboard?loggedin=true'));
        exit;
    }


?>

<?php get_header(); ?>

<body>

    <?php 
    
        //echo "<h1>Jobs Pathway App </h1>";
        //echo "<p>(jobs_pathway_theme - page-login.php)</p>";        

    ?>

    <!-- <p class="motivation"><?php echo jt_random_motivation(); ?></p> -->

    <body class="body---login">

        <header class="header---login--page">

            <h1> Jobs Pathway App <?php //echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

            <!-- Debug Info -->
            <div style="background: #f0f0f0; padding: 10px; margin: 10px 0; border-radius: 5px; font-size: 12px;">
                <strong>Debug Info:</strong> 
                Login Form Active | 
                WordPress Login URL: <?php echo wp_login_url(); ?> |
                Form Method: POST
            </div>

        </header>

        <section class="container---element--login">

            <?php require "assets/template-parts/login.php"; ?>

        </section>

    </body>

<?php get_footer() ?>