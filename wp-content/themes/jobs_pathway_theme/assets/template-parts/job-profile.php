
<!-- Progress Stats Modal Goes Here -->

<?php 
// Debug: Check if variables are set
echo '<!-- DEBUG: Company Name: ' . (isset($company_name) ? $company_name : 'NOT SET') . ' -->';
echo '<!-- DEBUG: Job Title: ' . (isset($job_title) ? $job_title : 'NOT SET') . ' -->';
echo '<!-- DEBUG: Post ID: ' . (isset($post_id) ? $post_id : 'NOT SET') . ' -->';
?>

<div id="job-profile-status-message" style="display: none; margin: 20px 0; padding: 15px; border-radius: 5px; text-align: center;"></div>

<table class="job---profile---container" id="job-profile-table">
      
    <thead>
        <tr>
            <th colspan="2">Job Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Company Name:</td>
            <td>
                <span class="view-mode"><?php echo $company_name ? esc_html($company_name) : 'Not provided'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="company_name" value="<?php echo esc_attr($company_name); ?>">
            </td>
        </tr>
        <tr>
            <td>Job Title:</td>
            <td>
                <span class="view-mode"><?php echo $job_title ? esc_html($job_title) : 'Not provided'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="job_title" value="<?php echo esc_attr($job_title); ?>">
            </td>
        </tr>
        <tr>
            <td>Salary Details:</td>
            <td>
                <span class="view-mode"><?php echo $salary ? esc_html($salary) : 'Not specified'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="salary" value="<?php echo esc_attr($salary); ?>">
            </td>
        </tr>
        <tr>
            <td>Job Location:</td>
            <td>
                <span class="view-mode"><?php echo $location ? esc_html($location) : 'Not provided'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="location" value="<?php echo esc_attr($location); ?>">
            </td>
        </tr>
        <tr>
            <td>Contact Person:</td>
            <td>
                <span class="view-mode"><?php echo $contact_person ? esc_html($contact_person) : 'Not provided'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="contact_person" value="<?php echo esc_attr($contact_person); ?>">
            </td>
        </tr>
        <tr>
            <td>Contact Details:</td>
            <td>
                <span class="view-mode"><?php echo $contact_details ? esc_html($contact_details) : 'Not provided'; ?></span>
                <input type="text" class="edit-mode job-edit-input" style="display: none;" data-field="contact_details" value="<?php echo esc_attr($contact_details); ?>">
            </td>
        </tr>

        <tr>
            <td colspan="2" id="job---personal--notes">
                
                <h4>Description:</h4>
                
                <div class="view-mode">
                    <?php if ($description): ?>
                        <?php echo wpautop($description); ?>
                    <?php else: ?>
                        <p>No description provided.</p>
                    <?php endif; ?>
                </div>
                <textarea class="edit-mode job-edit-textarea" data-field="description"><?php echo esc_textarea($description); ?></textarea>
            </td>
        </tr>

    </tbody>

</table>

<section class="section---job--edit">

    <a id="btn-toggle-edit" class="button button---job--edit" data-post-id="<?php echo $post_id; ?>" data-mode="view">Edit</a>

</section>

<input type="hidden" id="job-post-id" value="<?php echo $post_id; ?>">