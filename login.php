<?php

session_start();

if (isset($_SESSION['log'])) {
    header("location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tharinda Damruwan | Persanol Website</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
</head>

<body>

    <div class="login_section">

        <form class="login_container">

            <div class="login_title">Login</div>

            <div class="error-txt">This is error massege</div>

            <div class="login_row">

                <label for="username"> Enter your username </label><br>
                <input placeholder="@alexa" type="text" name="username" id="username" required>

            </div>

            <div class="login_row">

                <label for="password"> Enter your password </label><br>
                <input placeholder="********" type="password" name="password" id="password" required>

            </div>
            <div class="login_row">

                <input type="submit" name="submit" id="submit">

            </div>

        </form>

    </div>

</body>

</html>