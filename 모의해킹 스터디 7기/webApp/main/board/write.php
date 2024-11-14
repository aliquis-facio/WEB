<!DOCTYPE HTML>
<html>

<head>
    <title>WRITE</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/write.css">
    <script></script>
</head>

<?php
    include("../php/user_session.php");
    include("./sql_connect.php");
?>

<body>
    <div class = "logo">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div class="container">
        <h1>글쓰기</h1>
        <!-- 작성자는 session으로 처리하자 -->
        <button class = "small orange" form = "post_write" type = "submit">등록</button>
    </div>

    <hr>

    <div>
        <form id = "post_write" action="./post_write_proc.php" method = "POST">
            <input class="input_title" name = "title" type="text" placeholder = "제목을 입력해주세요">
            <input class="input_content" name = "substance" type="text" placeholder = "내용을 입력해주세요">
        </form>
    </div>

    <div>
        <a href="./list.php">뒤로 가기</a>
    </div>
</body>

</html>