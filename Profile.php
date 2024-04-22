<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="Profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>
<body>

<?php
if (!session_id()) {
    session_start();
}
// check for authentication
if (!isset($_SESSION['yes'])) {
    header('Location: SignIn.php');
}
//require_once "header.php";
require_once "Dao.php";

?>

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

<div>
    <h1>Welcome, <?php echo $_SESSION['user']?></h1>
    <h2>Here is your running plan!</h2>
</div>
<div class="notes">
    <em>Consistency is the key to achieving your goals!</em>
</div>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>


<input id="printer" type="button" onclick=printDiv('tabL') value="Print your Plan"/>
<br>
<div id="tabL">
<table id="plan">
    <thead>
    <tr>
        <th>Week</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>
    </thead>
    <?php
    $dao = new Dao();
    $lines = $dao->getPlan($_SESSION['goal']);
    foreach ($lines as $line) {
        echo "<tr><td>{$line['id']}</td>
        <td>{$line['monday']}</td>
        <td>{$line['tuesday']}</td>
        <td>{$line['wednesday']}</td>
        <td>{$line['thursday']}</td>
        <td>{$line['friday']}</td>
        <td>{$line['saturday']}</td>
        <td>{$line['sunday']}</td></tr>";
    }
    ?>
</table>
</div>
<div class="logout">
<form action="logout.php" method="post">
    <button class="button">Log out</button>
</form>
</div>
<?php require_once 'footer.php' ?>
</body>

