<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Running for NonRunners</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="Profile.css">
</head>
<body>

<?php
//if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
//} else {
//    header("SignIn.php");
//    exit();
//}

require_once 'header.php';
require_once 'Dao.php';
require_once 'SIcontrol.php';
require_once 'SIview.php';
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<div>
    <h1>Here is your running plan!</h1>
</div>
<div class="notes">
    <em>Consistency is the key to achieving your goals!</em>
</div>


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
    $dao->getConnection();
    $lines = $dao->getPlan($_SESSION["user_username"]);
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

<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='https://m.free-codes.org/g.php?id=2002'></script><!-- Print Page Script
Use this script to have your
users print your HTML page
-->
<SCRIPT LANGUAGE="JavaScript">
    if (window.print) {
        document.write('<form> '
            + '<input type=button name=print value="Print!" '
            + 'onClick="window.print()"> To Print this page!</form>');
    }
    // End -->
</script>

<a target="_blank" href="http://free-web-tools.com/category/codes/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute">free codes</a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none">Javascript Codes</a>



<div class="logout">
<form action="logout.php" method="post">
    <button class="button">Log out</button>
</form>
</div>

