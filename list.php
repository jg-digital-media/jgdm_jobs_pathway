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

    // Google Fonts
    // $google_font = "";

    // Facebook Variables
    // $facebook_title = $page_title;
    // $facebook_description = $page_description;
    // $facebook_share_img = $page_image;

    // Twitter Variables
    // $twitter_title = $page_title;
    // $twitter_description = $page_description;
    // $twitter_share_img = $page_image;
    // $twitter_card = "jgdm_jobs_pathway";

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
<body class="body---list">

    <header>

        <h1><?php echo $website_title ?></h1>

        <h2>Keep track of your way to your professional life</h2>

    </header>

    <main>

        <h3>list.php</h3>

        <a href="index.php">back</a>
        <?php require "assets/template-parts/jobs-list.php"; ?>

    </main>

    <footer>

        <p>Copyright &copy; 2025 Jonathan Grieve (<span><a href="https://github.com/jg-digital-media/jgdm_jobs_pathway?tab=readme-ov-file#development" target="_blank">v0.0.3</a></span>)</p>

    </footer>
    

    <script type="text/javascript" src="app.js"></script>
</body>
</html>