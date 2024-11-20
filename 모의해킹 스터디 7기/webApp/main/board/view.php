<!DOCTYPE HTML>
<html>

<head>
    <title>VIEW</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/board_view.css">
    <script></script>
</head>

<?php
    include("../php/user_session.php");
    include("../php/sql_connect.php");

    $board_id = $_GET['board_id'];
    
    $select_sql = "SELECT * FROM board WHERE board_id = {$board_id}";
    $ret = mysqli_query($conn, $select_sql);
    $row = null;

    if ($ret) {
        $row = mysqli_fetch_assoc($ret);
        
        // update 구문만 넣으면 사이트가 죽음
        // $update_sql = "UPDATE board SET view = {$row['view'] + 1} WHERE board_id = {$board_id}";
        // $update_ret = mysqli_query($conn, $update_sql);
    } else {
        echo "<script>alert('오류가 발생했습니다');</script>";
        echo mysqli_connect_error();
    }
?>

<body>
    <div class = "logo">
        <a class = "title" href="../home.php">안녕하진않아요</a>
    </div>

    <div class = "headBox">
        <a class = "cyan" href="./sb_post_list.php">
            <?php echo $row['writer'] . "님의 게시글 더보기";?>
        </a>
        <a class = "orange" href="./list.php">뒤로 가기</a>
    </div>

    <div class = "bodyBox">
        <div>
            <?php echo $row['title'];?>
        </div>
        <div>
            <?php echo $row['content'];?>
        </div>
    </div>

    <div class = "footBox">
        <div class = "coment_list">
            <!-- 댓글 목록 -->
            <ul>
                <li>
                    <span>[작성자id]</span>
                    <span>[coment]</span>
                </li>
            </ul>
        </div>
        
        <div>
            <span>
                <?php echo "{$user_id}님";?>
            </span>
            <span>
                <form action="coment_write.php" method="post">
                    <input type="text" placeholder="댓글을 남겨보세요">
                    <button class = "orange">등록</button>
                </form>
            </span>
        </div>
    </div>
</body>

</html>