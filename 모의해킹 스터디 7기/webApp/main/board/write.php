<!DOCTYPE HTML>
<html>

<head>
    <title>WRITE</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/home.css">
    <script></script>
</head>

<?php
session_start();
if(!isset($_SESSION['user_name'])) {
    echo "<script>location.replace('./sign/sign_in.php');</script>";
} else {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
}
?>

<body>
    <div class = "headBox">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div>
        <h1>글쓰기</h1>
        <!-- 작성자는 session으로 처리하자 -->
        <button id = "board_write">등록</button>
        <hr>
    </div>

    <div>
        <input id = "board_write" type="text" placeholder = "제목을 입력해주세요">
        <input id = "board_write" type="text" placeholder = "내용을 입력해주세요">
    </div>

    <div>
        <a href="./list.php">뒤로 가기</a>
    </div>
</body>

</html>