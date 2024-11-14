<!DOCTYPE HTML>
<html>

<head>
    <title>MODIFY</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
    <script></script>
</head>

<?php
    include("../php/user_session.php");
    include("../php/sql_connect.php");
?>

<body>
    <div class = "logo">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div>
        <h1>수정하기</h1>
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