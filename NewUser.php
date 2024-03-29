<html>
    <head>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    </head>

    <body>
    <! HEADER >
        <h1>Running from My Problems ...<img src="img.png" alt="cool pic"></h1>

        <ul class="MainPage">
            <li><a href="Profile.php">Log In  </a> </li>
            <div class="gear">
                <li>
                    <a href="https://www.roadrunnersports.com/?utm_source=google&utm_medium=cpc&utm_campaign=PMax%3A%20%28ROI%29%20Smart%20Shopping%202.0%20-%20Tier%201%20Shoes&utm_id=20990627255&utm_content=&utm_term=&gad_source=1&gclid=CjwKCAiAlcyuBhBnEiwAOGZ2S3QgAjEl_7vy-bZ1dn_P9NtmhkJ6fNrhglzZd3TSnSFCSzo0C1GvBoCFiYQAvD_BwE">Get Gear</a>
                </li>
            </div>
            <li>
                <a href="https://www.alltrails.com/">Find Trails </a>
            </li>
            <li>
                <a href="https://runningintheusa.com/classic/overview/">Upcoming Races </a>
            </li>
            <li  class="profileTitle"><a href="NewUser.php">Create Profile</a></li>
            <li><a href="AboutGabby.php">About Gabby</a></li>
        </ul>

    <! ACTUAL CONTENT >
    <form action="/NewUser.php">
        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user" placeholder="applesauce"><br>

        <label for="pswd">Password:</label><br>
        <input type="text" id="pswd" name="pswd" placeholder="shhhhhh"><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" placeholder="Boise, ID"><br>


        <label for="distance">Goal Distance:</label><br>
        <input type="number" id="distance" name="distance" placeholder="3" step="1"> miles<br>


        <p>Running Experience:</p>
        <input type="radio" id="mile<" name="level" value="mile<">
        <label for="mile<">I can't run mile</label><br>

        <input type="radio" id="mile" name="level" value="mile">
        <label for="mile">I can run a mile, maybe 2</label><br>

        <input type="radio" id="mile>" name="level" value="mile>">
        <label for="mile>">I can run a 5k, slowly</label> <br><br>

       <input type="submit" value="Create Profile">
    </form>


    <! FOOTER >
        <footer>
            <p>Here is the end of the page</p>
            <p>Author: Gabby Prusse</p>
        </footer>

    </body>
</html>