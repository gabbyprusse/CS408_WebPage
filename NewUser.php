<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    </head>

    <body>
    <?php
    require_once "header.php";
    require_once 'Dao.php';
    session_start();


        if (isset($_SESSION['errors_newuser'])) {
            foreach ($_SESSION['errors_newuser'] as $error) {
                echo "<div class='error'>{$error}</div>";
            }
            unset($_SESSION['errors_newuser']);
        }

        ?>

    <form action='newUserHandler.php' method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="applesauce" value="{{ old('username') }}"><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd" placeholder="shhhhhh" value="{{ old('pwd') }}"><br><br>

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

    <?php
        header('Profile.php');
    ?>

    <?php require_once "footer.php"; ?>
    </body>
</html>






