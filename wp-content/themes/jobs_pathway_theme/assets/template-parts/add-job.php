 <!-- Form: add job -->

<section class="section---add--situation-container">

    
    <a href="<?php echo site_url('/dashboard'); ?>" class="button---back">Back to Dashboard</a>
    
    <h3>Add a Situation/Job</h3> 

    <aside>
        
        <p>Add details of a job application. <span class="required">*</span> = Required fields</p>

    </aside>

    <form name="main_form_add_job" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" id="add-job-form" class="form form---add--job">

        <label for="company_name">Name of Company/Organisation: <span class="required">*</span></label>
        <input type="text" name="company_name" class="login---input add-job-input" id="company_name" placeholder="Enter company name..." value="<?php echo esc_attr($form_values['company_name']); ?>">

        <br>
        <label for="job_title">Job Title: <span class="required">*</span></label>
        <input type="text" name="job_title" class="login---input add-job-input" id="job_title" placeholder="Enter the Job Title..." value="<?php echo esc_attr($form_values['job_title']); ?>">

        <br>
        <label for="salary">Salary: </label>
        <input type="text" name="salary" class="login---input add-job-input" id="salary" placeholder="Enter Salary..." value="<?php echo esc_attr($form_values['salary']); ?>">

        <br>
        <label for="location">Location: <span class="required">*</span></label>
        <input type="text" name="location" class="login---input add-job-input" id="location" placeholder="Where this job is based..." value="<?php echo esc_attr($form_values['location']); ?>">

        <br>
        <label for="contact_person">Contact Person: </label>
        <input type="text"  name="contact_person" id="contact_person" class="login---input add-job-input" placeholder="Name of Contact Person..." value="<?php echo esc_attr($form_values['contact_person']); ?>">  
        
        <br>
        <label for="contact_details">Contact Information: </label>
        <input type="text"  name="contact_details" id="contact_details" class="login---input add-job-input" placeholder="Details of Contact Person..." value="<?php echo esc_attr($form_values['contact_details']); ?>">

        <br><br>

        <label for="description">Description: </label>
        <textarea name="description" id="description" class="add-job-textarea" cols="30" rows="10" placeholder="Enter your description..."><?php echo esc_textarea($form_values['description']); ?></textarea>

        <input type="hidden" name="add_job_form" value="1">
        <?php wp_nonce_field('add_job_action', 'add_job_nonce'); ?>

        <br /><br />
        <input type="submit" value="Add Job Application" class="button button---login">

    </form>

</section>