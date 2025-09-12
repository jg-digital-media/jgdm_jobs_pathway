<?php 

    // website title
    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";
    $website_keywords = "Jobs Pathway, Jobs, Pathway, Jobs Tracker, Job Tracker, Job Tracking, Job Tracking System";

    // Meta Variables
    $page_description = "My name is Jonathan and this is my website for my amateur photography. You can view my photos and request some to buy from my store.";
    $page_keywords = "";
    $page_title = "JG Photography | Amateur Photography";
    $page_url = "";
    $page_icon = "";

    $page_image = "";

    // Google Fonts
    // $google_font = "";

    // Facebook Variables
    //$facebook_title = $page_title;
    //$facebook_description = $page_description;
    //$facebook_share_img = $page_image;

    // Twitter Variables
    //$twitter_title = $page_title;
    //$twitter_description = $page_description;
    //$twitter_share_img = $page_image;
    //$twitter_card = "jonnie_grieve_photography";

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
    <meta name="twitter:card" content="jonnie_grieve_photography">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Odibee+Sans|Quicksand&display=swap" rel="stylesheet">

    <!-- Canonical Link -->
    <link rel="canonical" href="<?php echo $page_url; ?>">

    <!-- Favicon -->  
    <link rel="icon" href="" />

    <title> <?php echo $website_title ?></title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

    <header>

        <h1> <?php echo $website_title ?> </h1>

        <h2>Keep track of your way to your professional life</h2>

    </header>

    <section class="container---element--login">

        <form name="main_login" action="#" method="post" id="" class="">

            <label for="username">Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter your name">

            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <br>
            <label for="message">Password: </label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your password"></textarea>

            <br>
            <input type="submit" value="Submit">

        </form>

    </section>
    

    <script type="text/javascript" src="app.js"></script>
</body>
</html>