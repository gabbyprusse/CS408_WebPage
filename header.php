
<?php
error_reporting(-1);
ini_set('display_errors', 'On'); ?>

</head>
<body>
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
<?php session_start();

$get_url = $_SERVER['REQUEST_URI'];
$get_url = str_replace(".php", "", $_SERVER['REQUEST_URI']);

?>
<!-- HW7: Persistent nav  -->
<script>
    $("#" + '<?php echo $get_url ?>').addClass('active');
</script>
