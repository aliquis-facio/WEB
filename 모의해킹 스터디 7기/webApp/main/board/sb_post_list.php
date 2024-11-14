<?php
    include_once("../php/error_report.php");
?>

<?php
$select_sql = "SELECT board_id, writer, title, write_date, view FROM board WHERE writer = '{$writer}'";
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