<?php 

    // website title
    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";
    $website_keywords = "Jobs Pathway, Jobs, Pathway, Jobs Tracker, Job Tracker, Job Tracking, Job Tracking System";

    // Meta Variables
    $page_description = "Keep track of your way to your professional life.";
    $page_keywords = "";
    $page_title = "Jobs Pathway";
    $page_url = "";
    $page_icon = "";

    $page_image = "";

    /*
    
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
    
    */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Meta Tags -->
        <meta name="description" content="<?php echo $page_description; ?>">
        <meta name="keywords" content="<?php echo $page_keywords; ?>"> 
        <meta name="image" content="<?php echo $page_image; ?>">

        <!-- FACEBOOK: Open Graph -->
        <meta property="og:title" content="<?php echo $page_title; ?> ">
        <meta property="og:description" content="<?php echo $page_description; ?>">
        <meta property="og:image" content="<?php echo $page_image; ?>">
        <meta property="og:url" content="<?php echo $page_url; ?>">

        <!-- TWITTER: Open Graph -->
        <meta name="twitter:title" content="<?php echo $page_title; ?> ">
        <meta name="twitter:description" content="<?php echo $page_description; ?>">
        <meta name="twitter:image" content="<?php echo $page_image; ?>">
        <meta name="twitter:card" content="jgdm_jobs_pathway">

        <!-- Google Font -->
        <link href="" rel="stylesheet">

        <!-- Canonical Link -->
        <link rel="canonical" href="<?php echo $page_url; ?>">

        <!-- Favicon -->  
        <link rel="icon" href="" />

        <title> <?php echo $website_title ?></title>

        <!-- Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <?php wp_head(); ?>