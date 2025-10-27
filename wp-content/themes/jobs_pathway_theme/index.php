<!DOCTYPE html>
<html lang="en">
<head>    

    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.jonniegrieve.co.uk/">

    <!-- Open Graph / Facebook / Threads / Instagram -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter (X) Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:creator" content="@jg_digitalMedia">

    <!-- Fallback / General -->
    <meta name="author" content="">
    <meta name="image" content="">

    <!-- Favicon and App Icons -->
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Theme Color (for browsers & mobile UI) -->
    <meta name="theme-color" content="#1e1e1e">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> -->

    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Page Title -->
    <title>JGDM Jobs Pathway App</title>

</head>

<?php get_header(); ?>

<body>

    <?php 
    
        //echo "<h1>Jobs Pathway App </h1>";
        //echo "<p>(jobs_pathway_theme - index.php)</p>";        

    ?>

    <!-- <p class="motivation"><?php echo jt_random_motivation(); ?></p> -->

    <p>index.php</p>

    <body class="body---login">

        <header class="header---login--page">

            <h1> Jobs Pathway App <?php //echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <section class="container---element--login">

            <?php require "assets/template-parts/login.php"; ?>

        </section>
    </body>

</html>

<?php get_footer() ?>