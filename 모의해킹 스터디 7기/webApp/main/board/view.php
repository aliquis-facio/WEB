<!DOCTYPE HTML>
<html>

<head>
    <title>VIEW</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
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
        <div>title</div>
        <div>content</div>
        <a href="">X님의 게시글 더보기</a>
    </div>

    <div>
        <div>
            <ul>

            </ul>
        </div>
        
        <div>
            <span>작성자</span>
            <span>
                <input type="text" placeholder="댓글을 남겨보세요">
                <button>등록</button>
            </span>
        </div>
    </div>

    <div>
        <a href="./list.php">뒤로 가기</a>
    </div>
</body>

</html>