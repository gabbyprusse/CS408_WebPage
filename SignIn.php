<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="SignIn.css">
</head>
<body>
<?php
    require_once "header.php";
    require_once 'Dao.php';
    session_start();  //automatically sets a cookie on the client and sends to browser

    echo print_r($_POST, 1);
    echo print_r($_SESSION, 1);

    if (isset($_SESSION['errors_signin'])) {
        foreach ($_SESSION['errors_signin'] as $error) {
            echo "<div class='error'>{$error}</div>";
        }
        unset($_SESSION['errors_newuser']);
}
?>

  <form method="get" action="SignInHandler.php">
    <br>
    <label for="user">Username:</label><br>
    <input type="text" id="user" name="user" value=""><br>

    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" value=""><br><br>

    <input class="button" type="submit" name="Sign In"><br><br>

      <a href="NewUser.php">Create Profile</a>
  </form>

<?php
    if (count($_SESSION['errors_signin']) == 0) {
        header('Location: Profile.php');
    }

?>

<?php require_once "footer.php"; ?>

</body>
</html>