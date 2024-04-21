
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Running for NonRunners</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once "header.php"; ?>

    <!-- HW7: Persistent nav  -->
    <script>
        document.getElementById("main").style.color = "mistyrose";
    </script>

    <?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    if (!session_id()) {
        session_start();
    }
    ?>
    <h3>Starting a running routine when you're new to running can be both exciting and challenging.
    Here's a step-by-step guide to help you get started safely and effectively.</h3>
    <h5>Intended for beginner runners with little to no experience.</h5>
    <ol>
        <li class="steps"> <strong>Be Patient and Consistent:</strong> Remember that progress takes time, so be patient with yourself.
            Celebrate your achievements along the way, no matter how small, and stay consistent with
            your training to see improvements over time.</li>
        <li class="steps"><strong>Set Realistic Goals:</strong> Begin by setting achievable goals. Whether it's running for a certain distance,
            duration, or simply improving your overall fitness, having clear objectives will keep you motivated.</li>
        <li class="steps"><strong>Start Slowly:</strong> Don't push yourself too hard initially. Begin with a mix of walking and running intervals.
            Each running interval should be at a pace you can withstand for a while. Training should not be rushed</li>
        <li class="steps"><strong>Set Realistic Goals:</strong> Begin by setting achievable goals. Whether it's running for a certain distance,
            duration, or simply improving your overall fitness, having clear objectives will keep you motivated.</li>
        <li class="steps"><strong>Invest in Proper Gear:</strong> Invest in a good pair of running shoes that provide adequate support and
            cushioning. Comfortable clothing made of moisture-wicking materials can also enhance your running experience.</li>
        <li class="steps"><strong>Listen to Your Body:</strong> Pay attention to how your body feels during and after running. If you experience
            any pain or discomfort, it's important to slow down or take a break. Gradually increase the intensity and duration of
            your runs as your fitness improves.</li>
        <li class="steps"><strong>Find a Good Playlist/Podcast:</strong> Listening to music or a podcast can help stay motivated during a run. The audio
        can aid in taking your mind off of how much longer or further you have left to go. </li>
        <li class="steps"><strong>Warm Up and Cool Down:</strong> Before each run, spend a few minutes warming up with dynamic stretches like leg swings,
            arm circles, and hip rotations. After your run, take time to cool down with static stretches to prevent muscle stiffness and
            reduce the risk of injury.</li>
        <li class="steps"><strong>Find a Routine:</strong> Establish a consistent running schedule that works for your lifestyle. Whether it's early
            mornings, evenings, or during your lunch break, finding a time that you can stick to will help you stay committed to your
            running routine.</li>
        <li class="steps"><strong>Stay Hydrated and Nourished:</strong> Drink plenty of water before, during, and after your runs to stay hydrated.
            Fuel your body with nutritious foods to support your energy levels and recovery.</li>
    </ol>

<h4>By following these steps and listening to your body, you can start running with confidence and gradually build your endurance and fitness level.</h4>

<?php require_once "footer.php";?>
</body>
</html>