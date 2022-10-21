<?php

session_start();
// session_destroy();

if (!$_SESSION['log']) {

    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Tharinda Damruwan | Persanol Website</title>

    <link rel="shortcut icon" href="img/favicon.png" type="png">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/admin.js"></script>
</head>

<body>

    <div class="admin_section">

        <form class="admin_container">

            <div class="admin_title">Admin</div>

            <div class="error-txt">This is error massege</div>

            <div class="admin_row">

                <label for="pro_name">Project Name</label><br>
                <input type="text" name="pro_name" id="pro_name" required>

            </div>

            <div class="admin_row">

                <label for="pro_dec">Project Description</label><br>
                <input type="text" name="pro_dec" id="pro_dec" required>

            </div>
            <div class="admin_row">

                <label for="pro_git">Project GitHub Link</label><br>
                <input type="text" name="pro_git" id="pro_git" required>

            </div>
            <div class="admin_row">

                <input type="submit" name="submit" id="submit">

            </div>

        </form>

    </div>

</body>

</html>