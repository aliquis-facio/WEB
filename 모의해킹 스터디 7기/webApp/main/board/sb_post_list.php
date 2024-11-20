<?php
    include_once("../php/error_report.php");
    include_once("../php/sql_connect.php");
?>

<?php
    $writer = $_GET['writer'];
    $select_sql = "SELECT * FROM board WHERE writer = '{$writer}'";
    $ret = mysqli_query($conn, $select_sql);

    if ($ret) {
        while($row = mysqli_fetch_assoc($ret)) {
            // row가 null만 나오고 있나봐
            print_r($row);
            echo "<div class = 'table row'>
                    <div class = 'table cell'>{1}</div>
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