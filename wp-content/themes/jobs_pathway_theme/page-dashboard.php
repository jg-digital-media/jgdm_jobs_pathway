<?php

$website_title = "Jobs Pathway";
$website_description = "Keep track of your way to your professional life";

/* Template Name: Job Dashboard */
?>

<?php 

// Redirect non-logged-in users to login page
if ( ! is_user_logged_in() ) {
    wp_redirect( site_url('/login') );
    exit;
}

get_header();

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

            <?php 

                // Show success message if job was added
                if (isset($_GET['job_added']) && $_GET['job_added'] == 'success') {
                    echo '<p class="job-success" style="color: green; background: #e6ffe6; padding: 15px; border-radius: 5px; margin: 20px; text-align: center;"><strong>Success!</strong> Job application added successfully!</p>';
                }
            ?>

            <?php 

                // Check if user has any jobs
                if ($jobs->have_posts()) {

                    // User has jobs - show the jobs list with data
                    require "assets/template-parts/jobs-list-with-data.php";
                } else {

                    // No jobs - show empty state
                    require "assets/template-parts/jobs-list-empty.php";
                }
            ?>

        </main>
    </body>

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


<?php get_footer(); ?>
