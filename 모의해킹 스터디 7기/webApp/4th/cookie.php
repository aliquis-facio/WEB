<!DOCTYPE HTML>
<?php
setcookie("session", "This_is_session");

$word = $_GET['word'];

echo $word;
?>

<html>

<head>
    <title>Cookie</title>
    <meta content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./style/main.css">
    <script type="text/javascript" src="./script/cookie.js"></script>
</head>

<body>
    cookie가 알아서 만들어지나요?
</body>

</html>