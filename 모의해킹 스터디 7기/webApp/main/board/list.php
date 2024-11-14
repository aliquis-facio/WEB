<!DOCTYPE HTML>
<html>

<head>
    <title>LIST</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/list.css">
    <script></script>
</head>

<?php
    include_once("../php/user_session.php");
?>

<body>
    <div class = "logo">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div class = "headBox">
        <h1>전체글보기</h1>
        <?php
            include_once("../php/num_of_post.php");
            echo "<h4> {$cnt}개의 글</h4>"
        ?>
        <form action="sb_write_list.php" method="post">
            <input type="hidden" value=<?php echo $user_id;?> name="writer">
            <button class="no-btn pink">내 게시글</button>
        </form>
        <a href="./write.php">글쓰기</a>
    </div>

    <div class = "bodyBox">
        <div class = "table">
            <div class = "table row">
                <div class = "table cell">번호</div>
                <div class = "table cell">제목</div>
                <div class = "table cell">작성자</div>
                <div class = "table cell">등록일</div>
                <div class = "table cell">조회수</div>
            </div>

            <?php
                $select_sql = "SELECT board_id, writer, title, write_date, view FROM board";
                $result = mysqli_query($conn, $select_sql);

                if ($result) {
                    while($row = mysqli_fetch_array($result)) {
                        echo "<div class = 'table row'>
                                <div class = 'table cell'>{$row['board_id']}</div>
                                <div class = 'table cell'>{$row['writer']}</div>
                                <div class = 'table cell'>{$row['title']}</div>
                                <div class = 'table cell'>{$row['write_date']}</div>
                                <div class = 'table cell'>{$row['view']}</div>
                                </div>";
                    }
                } else {
                    echo "오류 발생했다.<br>";
                }

                mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>