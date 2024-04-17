<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="SignIn.css">
</head>
<body>
<?php
    require_once "header.php";
    require_once 'Dao.php';
    session_start();  //automatically sets a cookie on the client and sends to browser


    if (isset($_SESSION['errors_signin'])) {
        foreach ($_SESSION['errors_signin'] as $error) {
            echo "<div class='error'>{$error}</div>";
        }
        unset($_SESSION['errors_signin']);
}
?>
  <form action='SignInHandler.php' method="POST">
    <br>
    <label for="user">Username:</label><br>
    <input type="text" id="user" name="user" value=""><br>

    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" value=""><br><br>

    <input class="button" type="submit" name="Sign In"><br><br>

      <a href="NewUser.php">Create Profile</a>
  </form>

<?php

?>

<?php require_once "footer.php"; ?>

</body>
</html>