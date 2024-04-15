<?php

    require_once 'Dao.php';

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    </head>

    <body>
    <?php
    require_once "header.php";
    require_once "newUserHandler.php";
    //$userdata = check_login($dao);
        if (isset($_SESSION['errors_newuser'])) {
            foreach ($_SESSION['errors_newuser'] as $message) {
                echo "<div class='errors'>{$message}</div>";
            }
            unset($_SESSION['errors_newuser']);
        }

        ?>

    <! ACTUAL CONTENT >
    <form method="post" action="newUserHandler.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="applesauce"><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd" placeholder="shhhhhh"><br><br

            <p>
            <label for="goal">How far do you want to run?</label> <br>
                <label for="1mi"></label><input type="radio" id="1" name="goal" value="1" />
                <label for="1mi">1 mile</label> <br>

                <label for="5k"></label><input type="radio" id="2" name="goal" value="2" />
                <label for="5k">5k (3ish miles)</label> <br>

                <label for="10k"></label><input type="radio" id="3" name="goal" value="3" />
                <label for="10k">10k (6ish miles)</label> <br>
        <p>
            <input class="button" type="submit" value="Create Profile">
        </p>


        <a href="SignIn.php">Sign in with Existing Profile</a>
    </form>

    <?php
        header('Profile.php');
    ?>

    <?php require_once "footer.php"; ?>
    </body>
</html>






