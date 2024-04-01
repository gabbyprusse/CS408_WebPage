<?php
    require_once "confiSession.php";
    require_once "view.php";
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
        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user" placeholder="applesauce"><br>

        <label for="pswd">Password:</label><br>
        <input type="password" id="pswd" name="pswd" placeholder="shhhhhh"><br><br

            <p>
            <label for="goal">How far do you want to run?</label> <br>
                <input type="radio" id="1mi" name="goal" value="1mi" />
                <label for="1mi">1 mile</label> <br>

                <input type="radio" id="5k" name="goal" value="5k" />
                <label for="5k">5k (3ish miles)</label> <br>

                <input type="radio" id="10k" name="goal" value="10k" />
                <label for="10k">10k (6ish miles)</label> <br>

    </form>

    <form action="newUserHandler.php" method="post">
        <?php
            //signUpInputs();
        ?>
        <p>
            <input type="submit" value="Create Profile">
        </p>
    </form>

    <?php
        check_signup_errors();

    ?>

    <?php require_once "footer.php"; ?>
    </body>
</html>






