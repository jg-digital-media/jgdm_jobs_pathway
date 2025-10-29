
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

            <a href="dashboard/">Back</a>

            <!-- <p><strong>Company:</strong> <?php the_field('company_name'); ?></p>
            <p><strong>Salary:</strong> <?php the_field('salary'); ?></p>
            <p><strong>Location:</strong> <?php the_field('location'); ?></p>
            <p><strong>Contact:</strong> <?php the_field('contact_person'); ?></p>
            <p><strong>Description:</strong> <?php the_field('description'); ?></p>

            <p><strong>Status:</strong>

                <?php echo get_field('application_sent') ? 'Application Sent ✅' : ''; ?>
                <?php echo get_field('interview_attended') ? 'Interview Done 🎤' : ''; ?>
                <?php echo get_field('got_job') ? 'Got the Job! 🎉' : ''; ?>

            </p> -->

            <?php require "assets/template-parts/job-profile.php"; ?>

        </main>

<?php get_footer(); ?>