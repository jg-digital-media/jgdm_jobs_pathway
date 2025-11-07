<?php

    /* Template Name: Register Template */

    // website title
    $website_title = "Jobs Pathway";
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
        wp_redirect(site_url('/dashboard'));
        exit;
    }

?>

<?php get_header(); ?> 

<?php 

    // Empty variables for form validation messages
    $registration_message = '';
    $login_message = '';
    $registration_error = '';

    if ($_POST && isset($_POST['main_form_register'])) {

        // Verify nonce for security
        if (!isset($_POST['register_nonce']) || !wp_verify_nonce($_POST['register_nonce'], 'user_registration')) {
            $registration_error = 'Security verification failed. Please try again.';
        }
        // Check if passwords match
        elseif ($_POST['userpass'] !== $_POST['confirm_password']) {
            $registration_error = 'Passwords do not match. Please try again.';
        }
        // Check password length
        elseif (strlen($_POST['userpass']) < 6) {
            $registration_error = 'Password must be at least 6 characters long.';
        }
        else {
            // Create user
            $userdata = array(
                'user_login' => sanitize_user($_POST['username']),
                'user_email' => sanitize_email($_POST['email']),
                'user_pass'  => $_POST['userpass'],
                'role' => 'subscriber'
            );

            $user_id = wp_insert_user($userdata);

            if (!is_wp_error($user_id)) {
                $registration_message = 'Account created successfully!';
            } else {
                $registration_error = $user_id->get_error_message();
            }
        }
    }

?>

<body class="body---register">

    <header class="header---register--page">

        <h1> Jobs Pathway App <?php //echo $website_title ?> </h1>

        <h2>Keep track of your way to your professional life</h2>

    </header>

    <section class="container---element--register">

        <?php 


        // Display success message (login)
        if (!empty($login_message)) {
            echo '<p class="login-success" style="color: green; background: #e6ffe6; padding: 15px; border-radius: 5px; margin: 20px 0;"><strong>Success!</strong> ' . $login_message . '</p>';
        }

        // Display success message (register)
        if (!empty($registration_message)) {
            echo '<p class="registration-success" style="color: green; background: #e6ffe6; padding: 15px; border-radius: 5px; margin: 20px 0;"><strong>Success!</strong> ' . $registration_message . '</p>';
        }
        
        // Display error message
        if (!empty($registration_error)) {
            echo '<p class="registration-error" style="color: red; background: #ffe6e6; padding: 15px; border-radius: 5px; margin: 20px 0;"><strong>Error:</strong> ' . $registration_error . '</p>';
        }
        ?>

        <?php require "assets/template-parts/register.php"; ?>

    </section>

</body>

<?php get_footer() ?>