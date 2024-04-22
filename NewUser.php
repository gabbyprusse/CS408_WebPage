<!DOCTYPE html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="ErrorHandler.js"></script>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
    </head>
<h1 id="title">Running from My Problems ...<img src="img.png" alt="cool pic"></h1>

<ul class="MainPage">
    <li id="main"><a href="index.php">Home</a> </li>
    <li id="SignIn"><a href="SignIn.php">Log In</a></li>
    <li>
        <a href="https://www.roadrunnersports.com/?utm_source=google&utm_medium=cpc&utm_campaign=PMax%3A%20%28ROI%29%20Smart%20Shopping%202.0%20-%20Tier%201%20Shoes&utm_id=20990627255&utm_content=&utm_term=&gad_source=1&gclid=CjwKCAiAlcyuBhBnEiwAOGZ2S3QgAjEl_7vy-bZ1dn_P9NtmhkJ6fNrhglzZd3TSnSFCSzo0C1GvBoCFiYQAvD_BwE">Get Gear</a>
    </li>
    <li>
        <a href="https://www.alltrails.com/">Find Trails </a>
    </li>
    <li>
        <a href="https://runningintheusa.com/classic/overview/">Upcoming Races </a>
    </li>
    <li id="About"><a href="About.php">Benefits of Running</a></li>
</ul>

    <?php
    require_once 'Dao.php';
    if (!session_id()) {
        session_start();
    }

        if (isset($_SESSION['errors_newuser'])) {
            foreach ($_SESSION['errors_newuser'] as $error) {
                echo "<div class='error'>{$error}</div>";
            }
            unset($_SESSION['errors_newuser']);
        }

        ?>

    <form action='newUserHandler.php' method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $_SESSION['user'] ?? '' ?>"/><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd" placeholder="shhhhhh"><br><br>

            <p>
            <label for="goal">How far do you want to run?</label> <br>
                <label for="1"></label><input type="radio" id="1" name="goal" value="1">
                <label>1 mile</label> <br>

                <label for="2"></label><input type="radio" id="2" name="goal" value="2">
                <label>5k (3ish miles)</label> <br>

                <label for="3"></label><input type="radio" id="3" name="goal" value="3">
                <label>10k (6ish miles)</label> <br>
        <p>
            <input class="button" type="submit" value="Create Profile">
        </p>


        <a href="SignIn.php">Sign in with Existing Profile</a>
    </form>

    <?php require_once "footer.php"; ?>
    </body>
</html>






