<?php
function login1($conn, $user_id, $user_pw) {
    // identify and certify as the same time
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}' AND pw = '{$user_pw}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    if($result) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login1 success')</script>";
    } else {
        echo "<script>alert('fail')</script>";
        exit;
    }
}

function login2($conn, $user_id, $user_pw) {
    // identify and certify seperation
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    $db_pw = $result['pw'];
    if ($db_pw == $user_pw) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login2 success')</script>";
    } else {
        echo "<script>alert('fail')</script>";
        exit;
    }
}

function login3($conn, $user_id, $user_pw) {
    // identify and certify as the same time with hash
    $hash_user_pw = hash('sha512', $user_pw);
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}' AND hash_pw = '{$hash_user_pw}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    if($result) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login3 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

function login4($conn, $user_id, $user_pw) {
    // identify and certify seperation with hash
    $hash_user_pw = hash('sha512', $user_pw);
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    $hash_db_pw = $result['hash_pw'];
    if ($hash_db_pw == $hash_user_pw) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login4 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

function login5($conn, $user_id, $user_pw) {
    // identify and certify as the same time with escape text
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $user_pw = mysqli_real_escape_string($conn, $user_pw);

    $sql = "SELECT * from Data where id = '{$user_id}' and pw = '{$user_pw}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));

    if($result) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login5 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

function login6($conn, $user_id, $user_pw) {
    // identify and certify seperation with escape tex
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $user_pw = mysqli_real_escape_string($conn, $user_pw);

    $sql = "SELECT * FROM Data WHERE id = '{$user_id}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    $db_pw = $result['pw'];
    if ($db_pw == $user_pw) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login6 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

function login7($conn, $user_id, $user_pw) {
    // identify and certify as the same time with hash, escape text
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $user_ipw = mysqli_real_escape_string($conn, $user_pw);

    $hash_user_pw = hash('sha512', $user_pw);
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}' AND hash_pw = '{$hash_user_pw}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    if($result) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login7 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

function login8($conn, $user_id, $user_pw) {
    // identify and certify seperation with hash, escape text
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $user_pw = mysqli_real_escape_string($conn, $user_pw);

    $hash_user_pw = hash('sha512', $user_pw);
    $sql = "SELECT * FROM Data WHERE id = '{$user_id}'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    $hash_db_pw = $result['hash_pw'];
    if ($hash_db_pw == $hash_user_pw) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_score'] = $result['score'];
        echo "<script>alert('login8 success')</script>";
        // echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('fail')</script>";
        // echo "<script>location.replace('sign_in.php');</script>";
        exit;
    }
}

//error 출력
error_reporting(E_ALL);
ini_set('display_errors', '1');

//session start
session_start();

//sql 서버 연결
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'student1234');
define('DB_NAME', 'NotOK');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$conn) {
    echo "sql not connected<br>";
}

function login9($conn, $user_id, $user_pw) {
    // identify and certify seperation with hash, escape text, prepared statement
    $db_server = 'localhost';
    $db_username = 'admin';
    $db_password = 'student1234';
    $db_name = 'NotOK';

    $user_id = mysqli_real_escape_string($conn, $user_id);
    $user_pw = mysqli_real_escape_string($conn, $user_pw);
    $hash_user_pw = hash("sha512", $user_pw);
    echo "id: {$user_id}, pw: {$user_pw}<br>";
    echo "hash: {$hash_user_pw}<br>";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $dsn = "mysql: host = {$db_server}; dbname = {$db_name}";
    $pdo = new PDO($dsn, $db_username, $db_password);
    // $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $stmt = $pdo -> prepare("SELECT * FROM Data WHERE id = :user_id");
    $stmt -> bindParam(":user_id", $user_id, PDO::PARAM_STR);
    $stmt -> execute();
    echo "statement execute<br>";

    $result = $stmt -> fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $hash_db_pw = $result['hash_pw'];
        echo "{$hash_db_pw}<br>";
    
        if ($hash_db_pw == $hash_user_pw) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_name'] = $result['name'];
            $_SESSION['user_score'] = $result['score'];
            echo "<script>alert('login9 success')</script>";
            // echo "<script>location.replace('home.php');</script>";
        } else {
            echo "<script>alert('fail')</script>";
            // echo "<script>location.replace('sign_in.php');</script>";
            exit;
        }
    } else {
        echo "<script>alert('no result')</script>";
    }
}

//id, pw 받기
$input_id = $_POST["id"];
$input_pw = $_POST["pw"];

if (empty($input_id) or empty($input_pw)) {
    echo "<script>alert('Fill in the blank plz')</script>";
    echo "<script>location.replace('sign_in.php');</script>";
    exit;
} else {
    // login1($conn, $input_id, $input_pw);
    // login2($conn, $input_id, $input_pw);
    // login3($conn, $input_id, $input_pw);
    // login4($conn, $input_id, $input_pw);
    // login5($conn, $input_id, $input_pw);
    // login6($conn, $input_id, $input_pw);
    // login7($conn, $input_id, $input_pw);
    // login8($conn, $input_id, $input_pw);
    login9($conn, $input_id, $input_pw);
}

mysqli_close($conn);
?>