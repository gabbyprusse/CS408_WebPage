<?php
    require_once 'confiSession.php';
    require_once 'NUview.php';
    require_once 'Dao.php';
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    </head>

    <body>
    <?php require_once "header.php"; ?>

    <! ACTUAL CONTENT >
    <form action="newUserHandler.php" method="post">
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
    </form>

    <?php
        check_signup_errors();

    ?>

    <?php require_once "footer.php"; ?>
    </body>
</html>






