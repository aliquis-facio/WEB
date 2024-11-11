<!DOCTYPE HTML>
<html>

<head>
    <title>MY LIST</title>
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
        <h1>작성자</h1>
        <h4>X개의 글</h4>
    </div>

    <div>
        <div>
            <!-- 여기서 선택한 것만 보이게 -->
            <div>작성글</div>
            <div>댓글</div>
        </div>

        <table>
            <!-- 작성글 -->
            <th>
                <tr>
                    <td>번호</td>
                    <td>제목</td>
                    <td>등록일</td>
                    <td>조회수</td>
                </tr>
            </th>
            <tbody></tbody>
        </table>

        <ul>
            <!-- 댓글 -->
             <li>
                <p>댓글 내용</p>
                <p>작성일</p>
                <p><a href="">원본글 제목</a></p>
             </li>
        </ul>

        <a href="./write.php">글쓰기</a>
    </div>
</body>

</html>