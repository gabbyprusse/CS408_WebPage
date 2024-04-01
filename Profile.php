<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="Profile.css">
</head>
<body>
<?php require_once "header.php"; ?>


  <form>
    <br>
    <label for="user">Username:</label><br>
    <input type="text" id="user" name="user" value=""><br>

    <label for="pswd">Password:</label><br>
    <input type="text" id="pswd" name="pswd" value=""><br><br>

    <input type="submit" value="Create Profile"><br><br>

    <input type="submit" value="Login"><br><br>
  </form>

<?php require_once "footer.php"; ?>

</body>
</html>