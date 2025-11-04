
<!-- Progress Stats Modal Goes Here --> 
<?php 

$website_title = "Jobs Pathway";
$website_description = "Keep track of your way to your professional life";

/* Template Name: Job Stats Page */
?>

<?php get_header(); ?>

<!-- <h3>Your Progress</h3> -->

<?php //echo "<p>page-jobstats.php</p>"; ?>

    <body class="body---job--stats">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <h3 class="filename">stats-modal.php</h3>

            <!-- <a href="list.php" class="button---back">Back to Dashboard</a> -->

            <p><?php require "assets/template-parts/stats.php"; ?> </p>

        </main>
       
<?php get_footer(); ?>