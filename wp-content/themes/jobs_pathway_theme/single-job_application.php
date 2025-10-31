
<?php

    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life"; 
    
    /* Template Name: Job Details Page */ 
    ?>

<?php get_header(); ?>

    <body class="body---job--details">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <!-- <h3 class="filename">job-details.php</h3> -->

            <!--  <a href="list.php">back</a> -->

            <!-- <h1><?php the_title(); ?></h1> -->

            <h3 class="filename">single-job_application.php</h3>

            <!-- <h3>Job/Situation Details...</h3> -->

            <a href="<?php echo site_url('/dashboard'); ?>">Back</a>

            <?php 

            // DEBUG CODE: Check if we're on the right template
            echo '<!-- DEBUG: Post Type: ' . get_post_type() . ' -->';
            echo '<!-- DEBUG: Is Single: ' . (is_single() ? 'YES' : 'NO') . ' -->';
            
            // Load the job application data
            if (have_posts()) : 
                while (have_posts()) : the_post(); 
                
                $post_id = get_the_ID();
                
                // Get all meta data from the custom post type
                $company_name = get_post_meta($post_id, 'company_name', true);
                $job_title = get_post_meta($post_id, 'job_title', true);
                $salary = get_post_meta($post_id, 'salary', true);
                $location = get_post_meta($post_id, 'location', true);
                $contact_person = get_post_meta($post_id, 'contact_person', true);
                $contact_details = get_post_meta($post_id, 'contact_details', true);
                // $description = get_the_content();
                $description = get_post_meta($post_id, 'description', true);
                
                // Get boolean tracking fields
                $application_sent = get_post_meta($post_id, 'application_sent', true);
                $cv_sent = get_post_meta($post_id, 'cv_sent', true);
                $interview_secured = get_post_meta($post_id, 'interview_secured', true);
                $interview_attended = get_post_meta($post_id, 'interview_attended', true);
                $references_provided = get_post_meta($post_id, 'references', true);
                $got_job = get_post_meta($post_id, 'got_job', true);
                
                endwhile;
            endif;
            ?>

            <?php require "assets/template-parts/job-profile.php"; ?>

        </main>

<?php get_footer(); ?>