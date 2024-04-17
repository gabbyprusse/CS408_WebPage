<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="Profile.css">
</head>
<body>

<?php
require_once 'header.php';
session_start();


///////??????????
/// todo:
/// repopulate on errors
/// print in javascript
/// jquery or ajax for errors
/// google font

// check for authentication
if (!isset($_SESSION['yes'])) {
    header('Location: SignIn.php');
}
require_once 'Dao.php';

?>
<div>
    <h1>Welcome, <?php echo $_SESSION['user']?></h1>
    <h2>Here is your running plan!</h2>
</div>
<div class="notes">
    <em>Consistency is the key to achieving your goals!</em>
</div>


<input type="button" onclick="printPlan('tabL')" value="Print your Plan"/>

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
</body>


<SCRIPT LANGUAGE="JavaScript">
    // HW7
    function printPlan(areaID) {
        var printContent = document.getElementById(areaID).innerHTML;
        var ogContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body = ogContent;
        <?php header("Location: ../Profile.php"); ?>
    }
</script>

<div class="logout">
<form action="logout.php" method="post">
    <button class="button">Log out</button>
</form>
</div>

