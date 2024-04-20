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
require_once "header.php";
require_once "Dao.php";

$get_url = $_SERVER['REQUEST_URI'];
$curClass = str_replace(".php", "", $_SERVER['REQUEST_URI']);

?>
<!-- HW7: Persistent nav  -->
<script>
    let currentClass = document.querySelector('<?php echo $curClass?>');
    if (currentClass) {
        currentClass.style.color = 'mistyrose';
    }
</script>

///////??????????
/// todo:
/// repopulate on errors
/// jquery or ajax for errors

require_once 'Dao.php';

?>
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


<input type="button" onclick=printDiv('tabL') value="Print your Plan"/>

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




<div class="logout">
<form action="logout.php" method="post">
    <button class="button">Log out</button>
</form>
</div>

