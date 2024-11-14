<?php
    include_once("../php/error_report.php");
?>

<?php
if(!session_id()) {
    session_start();
}

include_once("../php/sql_connect.php");

$user = $_SESSION['user_id'];
$created_date = new DateTime("now");
$title = $_POST["title"];
$substance = $_POST["substance"];

if (empty($title) or empty($substance)) {
    echo "<script>alert('제목과 내용을 다 채우고 등록 버튼을 눌러주시기 바랍니다')</script>";
    echo "<script>location.replace('./write.php');</script>";
    exit;
} else {
    $insert_sql = "INSERT INTO board (writer, title, content, write_date, view) VALUES ('{$user}', '{$title}', '{$substance}', '{$created_date -> format('Y-m-d')}', 0)";
    $result = mysqli_query($conn, $insert_sql);

    if ($result) {
        echo "<script>alert('등록되었습니다');</script>";
        echo "<script>location.replace('./list.php');</script>";
    } else {
        echo "<script>alert('오류가 발생했습니다');</script>";
        echo "<script>location.replace('./write.php');</script>";
    }
}

mysqli_close($conn);
?>