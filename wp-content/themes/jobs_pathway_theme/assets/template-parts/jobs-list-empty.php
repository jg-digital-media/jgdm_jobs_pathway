<!-- <p>jobs-list-empty.php</p> -->

<div class="username---and--logout">
    <span>Welcome, <span class="display---username">username</span></span>
    <a href="../" class="logout-link">(Logout)</a>
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

        <p id="motivation---message">Keep up the good work! You'll get there!</p>

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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="9">No Jobs Listed. Add a Job now to get started. <a href="add-job/" id="add---job--url">Add a Situation</a></td>
            </tr>
        </tbody>
    </table>


</section>
