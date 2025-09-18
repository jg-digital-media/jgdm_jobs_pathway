<?php require "assets/template-parts/inc/header.php"; ?> 

    <body class="body---list">

        <header>

            <h1> <?php echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <main>

            <p>list.php</p>

            <ul class="username---and--logout">

                <li>Welcome, <span>username</span></li>
                <li><a href="index.php">(Logout)</a></li>

            </ul>

            <?php require "assets/template-parts/jobs-list-empty.php"; ?>

        </main>
    
<?php require "assets/template-parts/inc/footer.php"; ?> 