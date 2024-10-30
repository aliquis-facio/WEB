<!DOCTYPE HTML>
<html>

<head>
    <title>HOME</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./style/home.css">
    <script></script>
</head>

<?php
session_start();
if(!isset($_SESSION['user_name'])) {
    echo "<script>location.replace('sign_in.php');</script>";
} else {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $user_score = $_SESSION['user_score'];
}
?>

<body>
    <div class="headBox">
        <a class="title" href="home.php">안녕하진않아요</a>
    </div>
    <div class="bodyBox">
        <ul>
            <li><?php echo "ID: {$user_id}"?></li>
            <li><?php echo "Name: {$user_name}"?></li>
            <li><?php echo "Score: {$user_score}"?></li>
        </ul>
    </div>
    <div class="footBox">
        <button type="button" class="btn" onclick="location.href = 'logout.php'">LOG OUT</button>
    </div>
</body>

</html>