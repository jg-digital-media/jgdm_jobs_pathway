<?php

$website_title = "Jobs Pathway";
$website_description = "Keep track of your way to your professional life";

/* Template Name: How To Page */
?>


<?php get_header(); ?>

<body class="body---howto">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <h3 class="filename">page-howto.php</h3>

            <a href="dashboard/" class="button---back">Back to Dashboard</a>

        </main>

        <section class="section---howto">

            <!-- <p>Watch Back for more details soon</p> -->

            <article class="article---howto">

                <h4 class="heading---howto">How to use the app</h4>

                <div id="content---howto">

                    <p>With "Jobs Pathway", you can easily organise the jobs you're applying for and tickoff each stage of the process as you you go.</p>

                    <!-- <ul>
                        <li>Step 1 - Look at your dashboard</li>
                        <li>Step 2</li>
                    </ul> -->

                    <dl>
                        <dt><strong>Step 1</strong>  - Look at your dashboard</dt>
                        <dd>The "Dashboard" is the hub of the application. Here you can see all the jobs you have applied for and the progress you have made on each of them. You can update these jobs in real time as you complete each stage of your applications. You can also update the details of the job and add any important notes and reminders by clicking the "Open" button for each job.</dd>

                        <dt><strong>Step 2</strong> - Add a new job</dt>
                        <dd>You can add a new job at any time by clicking "Add a new situation" from your dashboard. The information you can add includes: the job title, the company name, the location, salary details, the information about who to contact regarding the job and any important notes and reminders.</dd>

                        <dt><strong>Step 3</strong> - Edit Job Application Details.</dt>
                        <dd>Make any edits to your jobs and save them so you can come back to them and update your information at any time.</dd>

                        <dt><strong>Step 4</strong>  - View your Progress Stats</dt>
                        <dd>Open the "Progress Stats" page to see how far along you are in each job you have applied for at a glance. When you secure a job, you'll see a congratulatory message indicating your job search process is over. Give yourself a pat on the back and look forward to your professional future.</dd>

                        <dt><strong>Step 5</strong> - Delete Jobs</dt>
                        <dd>Sadly, we can all find ourselves between jobs from time to time. If you need to delete a job, you can do so from the dashboard via that individual job's "delete" button. You will have one chance to change your mind or cancel the request before the job entry is deleted forever. <br /><br />

                        In the same way, if you need to start the process again, you can delete all your jobs from the dashboard and start over. You can do this via your "Progress Stars" page. Be very sure that you intend to do this.  Once confirmed, this action cannot be undone.</dd>
                    </dl>

                    <!-- <p>The app will help you keep track of the stages of your application process. You can tick off each stage as you go along. The app will also help you keep track of the jobs you have applied for and the progress you have made in each of them.</p>

                    <p>You can also add notes and details about each job you have applied for. This will help you keep track of the jobs you have applied for and the progress you have made in each of them.</p> -->


                </div>

        </section>

<?php get_footer(); ?>
