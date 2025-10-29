 <!-- Form: add job -->

<section class="section---add--situation-container">

    <h3>Add a Situation/Job</h3> <a href="<?php echo site_url('/dashboard'); ?>">Back to Dashboard</a>

    <form name="main_form_add_job" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" id="add-job-form" class="form form---add--job">

        <label for="company_name">Name of Company/Organisation: </label>
        <input type="text" name="company_name" class="login---input" id="company_name" placeholder="Enter company name..." required>

        <br>
        <label for="job_title">Job Title: </label>
        <input type="text" name="job_title" class="login---input" id="job_title" placeholder="Enter the Job Title..." required>

        <br>
        <label for="salary">Salary: </label>
        <input type="text" name="salary" class="login---input" id="salary" placeholder="Enter Salary...">

        <br>
        <label for="location">Location: </label>
        <input type="text" name="location" class="login---input" id="location" placeholder="Where this job is based..." required>

        <br>
        <label for="contact_person">Contact Person: </label>
        <input type="text"  name="contact_person" id="contact_person" class="login---input" placeholder="Name of Contact Person...">

        <br><br>

        <label for="description">Description: </label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter your description..."></textarea>

        <input type="hidden" name="add_job_form" value="1">
        <?php wp_nonce_field('add_job_action', 'add_job_nonce'); ?>

        <br /><br />
        <input type="submit" value="Add Job Application" class="button button---login">

    </form>

</section>