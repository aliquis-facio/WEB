<?php
//error 출력
error_reporting(E_ALL);
ini_set('display_errors', '1');

//sql 서버 연결
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'student1234');
define('DB_NAME', 'NotOK');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$conn) {
    echo "sql not connected<br>";
}

$check = true;
$insert_sql = "insert into Data (id, pw, email, name, birth, number, score) values (";
foreach($_POST as $key => $value) {
    echo "key: {$key}, value: {$value}<br>";
    if(empty($value)) {
        $check = false;
          break;
    }

    if($key == 'score') {
        $insert_sql = $insert_sql . $value . ")";
    } else {
        $insert_sql = $insert_sql . "'" . $value . "', ";
    }
}

if($check) {
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $birth = $_POST["birth"];
    $number = $_POST["number"];
    $score = $_POST["score"];
    
    $result = mysqli_query($conn, $insert_sql);
    echo "<script>alert('회원가입되셨습니다!')</script>";
    echo "<script>location.replace('./sign_in.php');</script>";
    exit;
} else {
    echo "<script>alert('Fill in the blank plz')</script>";
    echo "<script>location.replace('./sign_up.php');</script>";
    exit;
}


mysqli_close($conn);
?>