<!DOCTYPE HTML>
<html>

<head>
    <title>MY LIST</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/list.css">
    <script src = "../script/script.js"></script>
</head>

<?php
    include_once("../php/user_session.php");
    include_once("../php/sql_connect.php");
?>

<body>
    <div class = "logo">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div class = "headBox">
        <?php
            $writer = $_POST['writer'];
            echo "<h1>{$writer}님</h1>";
            
            include_once("../php/sb_num_of_list.php");
            echo "<h4> {$cnt}개의 글</h4>"
        ?>

        <a href="./write.php">글쓰기</a>
        <a href="./list.php">뒤로 가기</a>
    </div>

    <div class = "bodyBox">
        <div class = "showing-select-btn">
             <button class = "cyan" id = "content-btn" onclick = "showContentOrComent('content')">작성글</button>
             <button class = "cyan" id = "coment-btn" onclick = "showContentOrComent('coment')">댓글</button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        </div>

        <div id = "sb-content-list">
            <div class = "table">
                <div class = "table row">
                    <div class = "table cell">번호</div>
                    <div class = "table cell">제목</div>
                    <div class = "table cell">작성자</div>
                    <div class = "table cell">등록일</div>
                    <div class = "table cell">조회수</div>
                </div>

                <?php include("sb_post_list.php"); ?>
            </div>
        </div>

        <div id = "sb-coment-list">
            <ul>
                <!-- 댓글 -->
                 <li>
                    <p>[댓글 내용]</p>
                    <p>[작성일]</p>
                    <p><a href="">[원본글 제목]</a></p>
                 </li>
            </ul>
        </div>
    </div>
</body>

</html>