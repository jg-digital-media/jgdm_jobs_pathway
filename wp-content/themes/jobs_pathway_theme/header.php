<?php 

    // website title
    // $website_title = "Jobs Pathway";
    
    $website_description = "Keep track of your way to your professional life";
    $website_keywords = "Jobs Pathway, Jobs, Pathway, Jobs Tracker, Job Tracker, Job Tracking, Job Tracking System";

    // Meta Variables
    $page_description = "Keep track of your way to your professional life.";
    $page_keywords = "";
    $page_title = "Jobs Pathway";
    $page_url = "";
    $page_icon = "";

    $page_image = "";  
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Essential Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $page_description; ?>">

        <!-- Open Graph / Facebook / Threads / Instagram -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo $page_url; ?>">
        <meta property="og:title" content="<?php echo $page_title; ?>">
        <meta property="og:description" content="<?php echo $page_description; ?>">
        <meta property="og:image" content="<?php echo $page_image; ?>">
        <meta property="og:site_name" content="Your Jobs Pathway">
        <meta property="og:locale" content="en_GB">       

        <!-- Twitter (X) Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://x.com/jg_DigitalMedia">
        <meta name="twitter:title" content="<?php echo $page_title; ?>">
        <meta name="twitter:description" content="<?php echo $page_description; ?>">
        <meta name="twitter:image" content="<?php echo $page_image; ?>">
        <meta name="twitter:creator" content="@jg_digitalMedia">

        <!-- Fallback / General -->
        <meta name="author" content="Created by Jonnie Grieve Digital Media">
        <meta name="image" content="<?php echo $page_image; ?>">
        <meta name="image" content="#">

        <!-- Favicon and App Icons -->
        <link rel="icon" href="favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Theme Color (for browsers & mobile UI) -->
        <meta name="theme-color" content="#1e1e1e">

        <!-- Google Font(s) -->
        <link href="" rel="stylesheet">

        <!-- Canonical URL -->
        <link rel="canonical" href="<?php echo $page_url; ?>">

        <!-- Favicon -->  
        <link rel="icon" href="favicon.png" type="image/x-icon">

        <?php wp_head(); ?>

    </head>