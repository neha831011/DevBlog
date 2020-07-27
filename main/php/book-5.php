<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to CSCI 4050 Online Bookstore</h1>
    </div>
    <p>
        <a href="user-browse.php" class="btn btn-warning">Browse Books</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="reset-info.php" class="btn btn-warning">Reset Your Info</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <p><img src="img\book-5.jpg" width="300" height="500"></p>
    <p>
    Title:   Cloud Native Patterns<br>
    Author:  Cornelia Davis<br>
    ISBN:    9781617294297<br>
    User     Rating: 4.77/5<br>
    Price:   34.99<br>
    </p>
</body>
</html>