<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="SignIn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>
<body>
<?php
    require_once "header.php";
    require_once 'Dao.php';
if (!session_id()) {
    session_start();
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#error").onload(function(){
    $("#error").fadeOut(3000);
  });
});
</script>
<?php
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
    <input type="text" id="user" name="user" value="<?php echo $_SESSION['user'] ?? '' ?>""><br>

    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" value=""><br><br>

    <input class="button" type="submit" name="Sign In"><br><br>

      <a href="NewUser.php">Create Profile</a>
  </form>


<?php require_once "footer.php"; ?>

</body>
</html>