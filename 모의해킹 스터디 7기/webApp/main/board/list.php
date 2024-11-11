<!DOCTYPE HTML>
<html>

<head>
    <title>LIST</title>
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
        <h1>전체글보기</h1>
        <h4>X개의 글</h4>
        <a href="write_list.php">내 게시글</a>
    </div>

    <div>
        <table>
            <th>
                <tr>
                    <td>번호</td>
                    <td>제목</td>
                    <td>작성자</td>
                    <td>등록일</td>
                    <td>조회수</td>
                </tr>
            </th>
            <tbody></tbody>
        </table>

        <a href="./write.php">글쓰기</a>
    </div>
</body>

</html>