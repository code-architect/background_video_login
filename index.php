<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

    <!-- custom css -->
    <link rel="stylesheet" href="style/style.css"/>

</head>
<body>
    <div class="video-container">
        <video autoplay muted loop class="bg-video">
            <source src="scripts/vidya_vox.mp4" type="video/mp4">
        </video>
    </div>

    <div class="log-in">
        <h4 style="text-align: center"><b>Log into your account</b></h4>
        <ul style="padding: 0; margin: 0; list-style-type: none;" class="nice-login">
            <li>
                <input type="text" name="email" id="email" size="30"/>
                <label for="email">Enter your email</label>
            </li>
            <li>
                <input type="password" name="password" id="password" size="30"/>
                <label for="password">Enter your password</label>
            </li>
            <li>
                <button id="log-in">Log in</button>
            </li>
            <li><a href="">Forgot Password</a></li>
            <li><a href="">Register</a></li>
        </ul>
    </div>

<script src="scripts/jquery.js"></script>
<script src="scripts/main.js"></script>

</body>
</html>