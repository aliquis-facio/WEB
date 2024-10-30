<!DOCTYPE html>

<head>
    <title>SIGN IN</title>
    <meta content="charset=utf-8">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/sign_in.css">
    <script></script>
</head>

<body>
    <div class = "headBox">
        <a class = "title" href="home.php">안녕하진않아요</a>
    </div>

    <div class = "bodyBox">
        <form action="login_proc.php" method="POST">
            <input name = "id" type="text" placeholder = "아이디">
            <input name = "pw" type="password" placeholder="비밀번호">
            <button type="submit">LOG IN</button>
        </form>
    </div>

    <div class = "footBox">
        <nav>
            <a href="find_id.php">아이디 찾기</a> | 
            <a href="find_pw.php">비밀번호 찾기</a> | 
            <a href="sign_up.php">회원가입</a>
        </nav>
    </div>
</body>

</html>