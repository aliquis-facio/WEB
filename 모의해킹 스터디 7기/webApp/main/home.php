<!DOCTYPE HTML>
<html>

<head>
    <title>HOME</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/home.css">
    <script></script>
</head>

<?php
    include_once("./php/user_session.php");
?>

<body>
    <div class="logo">
        <a class="title" href="./home.php">안녕하진않아요</a>
    </div>
    
    <div class = "headBox cyan">
        <nav>
            <a href="./board/list.php">게시판</a>
            <a href="./score_board.php">점수판</a>
        </nav>
    </div>


    <div class="bodyBox cyan">
        <ul>
            <li><?php echo "ID: {$user_id}"?></li>
            <li><?php echo "Name: {$user_name}"?></li>
            <li><?php echo "Score: {$user_score}"?></li>
        </ul>
    </div>

    <div class="footBox">
        <button type="button" class="long red" onclick="location.href = './sign/logout.php'">LOG OUT</button>
    </div>
</body>

</html>