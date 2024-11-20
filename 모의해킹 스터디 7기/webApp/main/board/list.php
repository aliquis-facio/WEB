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
        <?php echo "<a href=\"./sb_post_list.php?writer={$user_id}\">내 게시글</a>";?>
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
                $num = 1;
                $select_sql = "SELECT * FROM board";
                $result = mysqli_query($conn, $select_sql);

                if ($result) {
                    while($row = mysqli_fetch_array($result)) {
                        echo "<div class = 'table row'>";
                        echo "<div class = 'table cell'>{$num}</div>";
                        echo "<div class = 'table cell'>";
                        echo "<a href=\"./view.php?board_id={$row['board_id']}\">{$row['title']}</a>";
                        echo "</div>";
                        echo "<div class = 'table cell'>";
                        echo "<a href=\"./sb_post_list.php?writer={$row['writer']}\">{$row['writer']}</a>";
                        echo "</div>";
                        echo "<div class = 'table cell'>{$row['write_date']}</div>";
                        echo "<div class = 'table cell'>{$row['view']}</div>";
                        echo "</div>";
                        $num += 1;
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