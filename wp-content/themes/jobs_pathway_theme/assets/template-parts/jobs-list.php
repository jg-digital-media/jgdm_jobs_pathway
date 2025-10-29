<!-- <p>jobs-list.php</p> -->

<div class="username---and--logout">
    <span>Welcome, <span class="display---username">username</span></span>
    <a href="<?php echo wp_logout_url( site_url('/login') ); ?>" class="logout-link">(Logout)</a>
</div>

<nav class="top---banner--container">

    <img src="https://jgdm.s3.eu-west-2.amazonaws.com/logo.png" alt="Logo - <?php echo $website_title ?>" title="Logo - <?php echo $website_title ?>" id="jobs---pathway--logo">

    <ul class="app---navigation">
        <li>
            <a href="jobs-stats/">Progress Stats</a></li> 
        <li>
            <a href="how-to/">How to Use!</a>
        </li>
    </ul>

    <span id="motivation---message--container"> 

        <p id="motivation---message"> <?php echo jt_random_motivation(); ?> </p>

    </span>

</nav>

<section class="section---add--situation-container">

    <a href="add-job/">Add a Situation</a>

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
                <td>1</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j1s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s2" name="j1s2"></a></td>
                <td id="j1s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s3" name="j1s3"></a></td>
                <td id="j1s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s4" name="j1s4"></a></td>
                <td id="j1s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s5" name="j1s5"></a></td>
                <td id="j1s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s6" name="j1s6"></a></td>
                <td id="j1s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s7" name="j1s7"></a></td>   
                <td id="j1s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j1s8" name="j1s8"></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j2s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s2" name="j2s2"></a></td>
                <td id="j2s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s3" name="j2s3"></a></td>
                <td id="j2s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s4" name="j2s4"></a></td>
                <td id="j2s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s5" name="j2s5"></a></td>
                <td id="j2s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s6" name="j2s6"></a></td>
                <td id="j2s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s7" name="j2s7"></a></td>   
                <td id="j2s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j2s8" name="j2s8"></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j3s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s2" name="j3s2"></a></td>
                <td id="j3s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s3" name="j3s3"></a></td>
                <td id="j3s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s4" name="j3s4"></a></td>
                <td id="j3s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s5" name="j3s5"></a></td>
                <td id="j3s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s6" name="j3s6"></a></td>
                <td id="j3s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s7" name="j3s7"></a></td>   
                <td id="j3s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j3s8" name="j3s8"></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j4s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s2" name="j4s2"></a></td>
                <td id="j4s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s3" name="j4s3"></a></td>
                <td id="j4s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s4" name="j4s4"></a></td>
                <td id="j4s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s5" name="j4s5"></a></td>
                <td id="j4s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s6" name="j4s6"></a></td>
                <td id="j4s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s7" name="j4s7"></a></td>   
                <td id="j4s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j4s8" name="j4s8"></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j5s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s2" name="j5s2"></a></td>
                <td id="j5s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s3" name="j5s3"></a></td>
                <td id="j5s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s4" name="j5s4"></a></td>
                <td id="j5s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s5" name="j5s5"></a></td>
                <td id="j5s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s6" name="j5s6"></a></td>
                <td id="j5s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s7" name="j5s7"></a></td>   
                <td id="j5s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j5s8" name="j5s8"></a></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="job-details.php">Open</a></td>
                <td id="j6s2"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s2" name="j6s2"></a></td>
                <td id="j6s3"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s3" name="j6s3"></a></td>
                <td id="j6s4"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s4" name="j6s4"></a></td>
                <td id="j6s5"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s5" name="j6s5"></a></td>
                <td id="j6s6"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s6" name="j6s6"></a></td>
                <td id="j6s7"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s7" name="j6s7"></a></td>   
                <td id="j6s8"><input type="checkbox" class="stage---completed--checkbox" id="chkbox---j6s8" name="j6s8"></a></td>
            </tr>
        </tbody>
    </table>
</section>
