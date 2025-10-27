<?php

$website_title = "Jobs Pathway";
$website_description = "Keep track of your way to your professional life";

/* Template Name: Job Dashboard */
?>



<?php get_header();

if ( is_user_logged_in() ) {

  $current_user = wp_get_current_user();
  $args = [
    'post_type' => 'job_application',
    'author' => $current_user->ID
  ];
  $jobs = new WP_Query($args);
?>

    <body class="body---list">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <p class="filename">list-empty.php</p>

            <?php require "assets/template-parts/jobs-list-empty.php"; ?>

        </main>
    </body>

    <!-- <h2><?php echo $current_user->display_name; ?>'s Job Applications</h2> -->

    <?php echo "<p>page-dashboard.php</p>"; ?>

    <!-- <table>
        <tr>
            <th>Job Title</th>
            <th>Company</th>
            <th>Application Sent</th>
            <th>Interview</th>
            <th>Got Job?</th>
        </tr>

        <?php while ($jobs->have_posts()) : $jobs->the_post(); ?>
        <tr>
            <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
            <td><?php the_field('company_name'); ?></td>
            <td><?php echo get_field('application_sent') ? '✅' : '❌'; ?></td>
            <td><?php echo get_field('interview_attended') ? '✅' : '—'; ?></td>
            <td><?php echo get_field('got_job') ? '🎉' : '—'; ?></td>
        </tr>
        <?php endwhile; wp_reset_postdata(); ?>
    </table> -->

<?php

} else {

    echo "<p>Please log in to see your dashboard. (page-dashboard.php)</p>";
}
?>

<?php get_footer(); ?>
