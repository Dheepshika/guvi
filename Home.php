<?php 

session_start();
$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="body_home">
<div class="home_main">
    <div class="Nav">
    <div class="navi_1">
    <button type="button" class="btn btn-link"><a href="Home.php">Home</a></button>
    <button type="button" class="btn btn-link"><a href="profile.php">Profile</a></button>
    <button type="button" class="btn btn-link"><a href="logout.php">Logout</a></button>
    </div>
    </div>
    <div class="cont">

 <b class="h_welcome">Welcome to Home page......</b>

</div>
    </div>
</body>
</html>