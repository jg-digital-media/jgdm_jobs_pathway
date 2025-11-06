<!-- <p>jobs-list-empty.php</p> -->

<div class="username---and--logout">
    <span>Welcome, <span class="display---username"> <?php echo esc_html( $current_user->display_name ); ?></span>
    <a href="<?php echo wp_logout_url( site_url('/login') ); ?>" class="logout-link">(Logout)</a>

    <?php if (isset($_GET['loggedin']) && $_GET['loggedin'] == 'true') { 
        echo '<p class="login-success-dashboard"><strong>Success!</strong> You are now logged in.</p>';
        }
    ?>

</div>

<nav class="top---banner--container">

    <img src="https://jgdm.s3.eu-west-2.amazonaws.com/logo.png" alt="Logo - <?php echo $website_title ?>" title="Logo - <?php echo $website_title ?>" id="jobs---pathway--logo">

    <ul class="app---navigation">
        <li>
            <a href="job-stats/" id="btn---progress--stats">Progress Stats</a></li>
        <li>
            <a href="how-to/" id="btn---how--to">How to Use!</a>
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

    <table class="table---jobs--list">
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
                <th>Delete (?)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="9">

                    <div class="dashboard---no--jobs">There are no jobs listed yet. Add a Job now to get started. <a href="add-job/" id="add---job--url">Add a Situation</a>
                </td>
            </tr>
        </tbody>
    </table>

</section>
