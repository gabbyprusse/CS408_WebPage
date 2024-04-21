
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Running for NonRunners</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="About.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once "header.php"; ?>

<!-- HW7: Persistent nav  -->
<script>
    let currentClass = document.querySelectorAll('.About');
    if (currentClass) {
        currentClass[0].style.color = '#ec7f7f';
    }
</script>

<?php
if (!session_id()) {
    session_start();
}

error_reporting(-1);
ini_set('display_errors', 'On'); ?>
<div class="text">
<h1 class="benefits">Benefits of Running</h1>
<p>
    Running offers a multitude of benefits for both physical and mental health. Here are some of them: <br>
    <p><strong>Cardiovascular Health:</strong> Running strengthens the heart, improves circulation, and lowers blood pressure, reducing the risk of heart disease.
    </p>
    <p><strong>Weight Management:</strong> It's an effective way to burn calories and maintain a healthy weight, as running engages multiple muscle groups and elevates the heart rate.
    </p>
    <p><strong>Bone Strength:</strong> Regular running helps strengthen bones and may reduce the risk of osteoporosis.
    </p>
    <p><strong>Mental Health:</strong> Running releases endorphins, the body's natural mood elevators, which can reduce stress, anxiety, and symptoms of depression.
    </p>
    <p><strong>Improved Sleep:</strong> Regular exercise, including running, can improve sleep quality and duration.
    </p>
    <p><strong>Boosted Immunity:</strong> Moderate-intensity exercise like running can strengthen the immune system, potentially reducing the risk of illness and infection.
    </p>
    <p><strong>Increased Energy Levels:</strong> Regular running can boost overall energy levels and improve endurance for daily activities. </p>
    <p><strong>Better Cognitive Function:</strong> Physical activity, including running, has been linked to improved cognitive function, including memory, attention, and processing speed.
    </p>
    <p><strong>Social Interaction:</strong> Joining running groups or participating in races can provide social support and foster a sense of community.
    </p>
    <p><strong>Longevity:</strong> Studies suggest that regular runners may live longer than non-runners, possibly due to the overall health benefits associated with the activity. </p>
    <p class="reminder">Remember, it's essential to start gradually and listen to your body to prevent injury and enjoy the benefits of running safely.
    </p>




<h1>We are here to help you run!
    <br>(because it can suck sometimes)</h1>
</div>

</body>
<?php require_once "footer.php"; ?>