
<!-- Progress Stats Modal Goes Here -->

<?php 
// Debug: Check if variables are set
echo '<!-- DEBUG: Company Name: ' . (isset($company_name) ? $company_name : 'NOT SET') . ' -->';
echo '<!-- DEBUG: Job Title: ' . (isset($job_title) ? $job_title : 'NOT SET') . ' -->';
echo '<!-- DEBUG: Post ID: ' . (isset($post_id) ? $post_id : 'NOT SET') . ' -->';
?>

<table class = "job---profile---container">
      
    <thead>
        <tr>
            <th colspan="2">Job Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Company Name:</td>
            <td><?php echo $company_name ? esc_html($company_name) : 'Not provided'; ?></td>
        </tr>
        <tr>
            <td>Job Title:</td>
            <td><?php echo $job_title ? esc_html($job_title) : 'Not provided'; ?></td>
        </tr>
        <tr>
            <td>Salary Details:</td>
            <td><?php echo $salary ? esc_html($salary) : 'Not specified'; ?></td>
        </tr>
        <tr>
            <td>Job Location:</td>
            <td><?php echo $location ? esc_html($location) : 'Not provided'; ?></td>
        </tr>
        <tr>
            <td>Contact Person:</td>
            <td><?php echo $contact_person ? esc_html($contact_person) : 'Not provided'; ?></td>
        </tr>
        <tr>
            <td>Contact Details:</td>
            <td><?php echo $contact_details ? esc_html($contact_details) : 'Not provided'; ?></td>
        </tr>

        <tr>
            <td colspan="2" id="job---personal--notes">
                
                <h4>Description:</h4>
                
                <div>
                    <?php if ($description): ?>
                        <?php echo wpautop($description); ?>
                    <?php else: ?>
                        <p>No description provided.</p>
                    <?php endif; ?>
                </div>
            </td>
        </tr>

    </tbody>

</table>

<section class="section---job--edit">

    <a href="list.php" class="button button---job--edit">Edit</a>

</section>