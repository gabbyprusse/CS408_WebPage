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
    require_once "confiSession.php";
    require_once "NUview.php";
    require_once "SIview.php";
?>


  <form>
    <br>
    <label for="user">Username:</label><br>
    <input type="text" id="user" name="user" value=""><br>

    <label for="pswd">Password:</label><br>
    <input type="password" id="pswd" name="pswd" value=""><br><br>

    <input type="submit" value="Login"><br><br>
  </form>

<?php
check_login_errors();
?>

<?php require_once "footer.php"; ?>

</body>
</html>