<!-- Jobs List with Data from Database -->

<div class="username---and--logout">
    <span>Welcome, <span class="display---username"> <?php echo esc_html( $current_user->display_name ); ?></span></span>
    <a href="<?php echo wp_logout_url( site_url('/login') ); ?>" class="logout-link">(Logout)</a>

    <?php if (isset($_GET['loggedin']) && $_GET['loggedin'] == 'true') {
        echo '<p class="login-success-dashboard" style="display: inline-block; color: green; background: #e6ffe6; padding: 10px; border-radius: 5px; text-align: center;"><strong>Success!</strong> You have successfully logged in.</p>';
        }
    ?>

</div>

<nav class="top---banner--container">

    <img src="https://jgdm.s3.eu-west-2.amazonaws.com/logo.png" alt="Logo - <?php echo $website_title ?>" title="Logo - <?php echo $website_title ?>" id="jobs---pathway--logo">

    <ul class="app---navigation">
        <li>
            <a href="job-stats/">Progress Stats</a></li> 
        <li>
            <a href="how-to/">How to Use!</a>
        </li>
    </ul>

    <span id="motivation---message--container"> 

        <p id="motivation---message"> <?php echo jt_random_motivation(); ?> </p>

    </span>

</nav>

<section class="section---add--situation-container">

    <a href="add-job/" id="btn---add---job">Add a Situation</a>

</section>

<section class="section---jobs--list--container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Job Details</th>
                <th>Application Sent</th>
                <th>CV/Resume</th>
                <th>Interview Secured</th>
                <th>Interview Attended</th>
                <th>References</th>
                <th>Got the Job!!!</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $job_counter = 1;
            while ($jobs->have_posts()) : $jobs->the_post(); 
                $post_id = get_the_ID();
                
                // Get all meta data
                $company_name = get_post_meta($post_id, 'company_name', true);
                $job_title = get_post_meta($post_id, 'job_title', true);
                $salary = get_post_meta($post_id, 'salary', true);
                $location = get_post_meta($post_id, 'location', true);
                
                // Get boolean fields (defaults to 0/false if not set)
                $application_sent = get_post_meta($post_id, 'application_sent', true);
                $cv_sent = get_post_meta($post_id, 'cv_sent', true);
                $interview_secured = get_post_meta($post_id, 'interview_secured', true);
                $interview_attended = get_post_meta($post_id, 'interview_attended', true);
                $references_provided = get_post_meta($post_id, 'references', true);
                $got_job = get_post_meta($post_id, 'got_job', true);
            ?>
            <tr data-job-id="<?php echo $post_id; ?>">
                <td><?php echo $job_counter; ?></td>
                <td>
                    <strong><?php echo esc_html($job_title); ?></strong><br>  

                    <a href="<?php echo get_permalink($post_id); ?>">Open</a>
                </td>
                <td id="j<?php echo $job_counter; ?>s2" class="<?php echo $application_sent ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s2" 
                           name="application_sent"
                           data-field="application_sent"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($application_sent, 1); ?>>
                </td>
                <td id="j<?php echo $job_counter; ?>s3" class="<?php echo $cv_sent ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s3" 
                           name="cv_sent"
                           data-field="cv_sent"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($cv_sent, 1); ?>>
                </td>
                <td id="j<?php echo $job_counter; ?>s4" class="<?php echo $interview_secured ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s4" 
                           name="interview_secured"
                           data-field="interview_secured"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($interview_secured, 1); ?>>
                </td>
                <td id="j<?php echo $job_counter; ?>s5" class="<?php echo $interview_attended ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s5" 
                           name="interview_attended"
                           data-field="interview_attended"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($interview_attended, 1); ?>>
                </td>
                <td id="j<?php echo $job_counter; ?>s6" class="<?php echo $references_provided ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s6" 
                           name="references"
                           data-field="references"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($references_provided, 1); ?>>
                </td>
                <td id="j<?php echo $job_counter; ?>s7" class="<?php echo $got_job ? 'stage---completed' : ''; ?>">
                    <input type="checkbox" 
                           class="stage---completed--checkbox" 
                           id="chkbox---j<?php echo $job_counter; ?>s7" 
                           name="got_job"
                           data-field="got_job"
                           data-post-id="<?php echo $post_id; ?>"
                           <?php checked($got_job, 1); ?>>
                </td>
                <td>                    
                    <a href="<?php echo get_delete_post_link($post_id); ?>" class="button---job--delete">Delete</a>
                </td>
            </tr>
            <?php 
            $job_counter++;
            endwhile; 
            wp_reset_postdata(); 
            ?>
        </tbody>
    </table>

</section>

