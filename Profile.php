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

  <! ACTUAL CONTENT >
  <?php
  require_once "Dao.php";

  $dao = new Dao();

  setcookie("usertoken", "noice");


  if(isset($_COOKIE["visits"])) {
      $cookie = $_COOKIE["visits"];
      echo "number of visits: {$cookie}";
      setcookie("visits", $cookie + 1);
  } else {
      setcookie("visits", 1);
  }

  ?>
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