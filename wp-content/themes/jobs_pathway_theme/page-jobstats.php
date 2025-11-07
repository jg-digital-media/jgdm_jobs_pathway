<?php 

    $website_title = "Jobs Pathway";
    $website_description = "Keep track of your way to your professional life";

    /* Template Name: Job Stats Page */
?>

<?php get_header(); ?>

<body class="body---job--stats">

    <header>

        <h1> <?php echo $website_title ?> </h1>

        <h2>Keep track of your way to your professional life</h2>

    </header>

    <main>

        <p><?php require "assets/template-parts/stats.php"; ?> </p>

    </main>
       
<?php get_footer(); ?>