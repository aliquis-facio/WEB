<?php
//error 출력
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
ini_set('display_errors', '1');

function get_id($conn, $id, $name, $type, $var) {
    $select_sql = "SELECT id, name, {$type}, pw FROM member WHERE id = '{$id}' AND name = '{$name}' AND {$type} = '{$var}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $select_sql));

    if (isset($result['pw'])) {
        echo "<script>alert('당신의 비밀번호는 {$result['pw']}입니다.')</script>";
        echo "<script>location.replace('../home.php');</script>";
    } else {
        echo "<script>alert('아이디 혹은 이름, {$type}을 잘못 입력하셨습니다')</script>";
        echo "<script>location.replace('./find_pw.php');</script>";
        exit;
    }
}

//sql 서버 연결
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'student1234');
define('DB_NAME', 'NotOK');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$conn) {
    echo "sql not connected<br>";
}

$input_id1 = $_POST['id1'];
$input_name1 = $_POST["name1"];
$input_number = $_POST["number"];
$input_id2 = $_POST['id2'];
$input_name2 = $_POST["name2"];
$input_email = $_POST["email"];

$check1 = empty($input_id1) or empty($input_name1) or empty($input_number);
$check2 = empty($input_id2) or empty($input_name2) or empty($input_email);

if($check1 && $check2) {
    echo "<script>alert('Fill in the blank plz')</script>";
    echo "<script>location.replace('find_pw.php');</script>";
    exit;
} else if($check2) {
    get_id($conn, $input_id1, $input_name1, 'number', $input_number);
} else if($check1) {
    get_id($conn, $input_id2, $input_name2, 'email', $input_email);
}

mysqli_close($conn);
?>