
<!-- Progress Stats Modal Goes Here -->

<a href="<?php echo site_url('/dashboard'); ?>" class="button---back">Back to Dashboard</a>

<h3>Progress stats for <span><em><?php echo esc_html( $current_user->display_name ); ?></em></span></h3>

<?php

    // Fetch all the user’s job applications
    $jobs = get_posts([
        'post_type' => 'job_application',
        'author'    => get_current_user_id(),
        'posts_per_page' => -1
    ]);

    $total = count($jobs);

    $stages = [
        'application_sent'   => 0,
        'cv_sent'            => 0,
        'interview_secured'  => 0,
        'interview_attended' => 0,
        'references'         => 0,
        'got_job'            => 0,
    ];

  
    foreach ($jobs as $job) {

        foreach ($stages as $key => &$value) {

             if (get_field($key, $job->ID)) $value++;
        }
    }

    function jt_percent($count, $total) {
        return $total ? round(($count / $total) * 100, 1) : 0;
    }

?>

<table class="job---profile--container">
    <thead> 
        <tr>
            <th colspan="2">Active Job Searches (<span id="active-jobs-count"><?= $total ?> <!-- 6 --></span>)</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($stages as $stage => $count): ?>
        <tr>
            <td><?= ucwords(str_replace('_', ' ', $stage)); ?>:</td>
            <td>
                <span><?= $count; ?></span>/<span><?= $total; ?></span>
                (<span><?= jt_percent($count, $total); ?>%</span>)
            </td>
        </tr>
      <?php endforeach; ?>

    </tbody>

    <?php if ($stages['got_job'] > 0): ?>

    <tfoot id="in--work--msg">       
        <tr>
            <td colspan="2">

                <p>You're in work! Congratulations! <span id="in--work--tick">🎉</span></p>

            </td>
        </tr>  
    </tfoot>    

    <?php endif; ?>

</table>

<section class="section---delete--jobs">

    <a id="btn-delete-all-jobs" class="button button---delete--jobs">Delete Jobs</a>
        
</section>

<!-- Custom Delete Confirmation Modal -->
<div id="delete-confirm-modal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <h3>Confirm Deletion</h3>
        <p>Are you sure you want to delete your current list of jobs? This cannot be undone.</p>
        <div class="modal-actions">
            <button id="btn-confirm-delete" class="button button---confirm">Yes, Delete</button>
            <button id="btn-cancel-delete" class="button button---cancel">Cancel</button>
        </div>
    </div>
</div>