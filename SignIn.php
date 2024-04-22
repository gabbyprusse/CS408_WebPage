<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ErrorHandler.js"></script>
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
error_reporting(-1);
ini_set('display_errors', 'On'); ?>


<h1 id="title">Running from My Problems ...<img src="img.png" alt="cool pic"></h1>

<ul class="MainPage">
    <li id="main"><a href="index.php">Home</a> </li>
    <li id="SignIn"><a href="SignIn.php">Log In</a></li>
    <li>
        <a href="https://www.roadrunnersports.com/?utm_source=google&utm_medium=cpc&utm_campaign=PMax%3A%20%28ROI%29%20Smart%20Shopping%202.0%20-%20Tier%201%20Shoes&utm_id=20990627255&utm_content=&utm_term=&gad_source=1&gclid=CjwKCAiAlcyuBhBnEiwAOGZ2S3QgAjEl_7vy-bZ1dn_P9NtmhkJ6fNrhglzZd3TSnSFCSzo0C1GvBoCFiYQAvD_BwE">Get Gear</a>
    </li>
    <li>
        <a href="https://www.alltrails.com/">Find Trails </a>
    </li>
    <li>
        <a href="https://runningintheusa.com/classic/overview/">Upcoming Races </a>
    </li>
    <li id="About"><a href="About.php">Benefits of Running</a></li>
</ul>
require_once 'Dao.php';
if (!session_id()) {
    session_start();
}
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