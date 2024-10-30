<!DOCTYPE html>

<head>
    <title>SIGN UP</title>
    <meta content="charset=utf-8">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/sign_up.css">
    <script></script>
</head>

<body'>
    <div class = 'container'>
        <div class = "headBox">
            <a class = "title" href="home.php">안녕하진않아요</a>
        </div>
    
        <div class = "bodyBox">
            <form action="regist_proc.php" method="POST">
                <input name = "id" type="text" placeholder = "아이디">
                <input name = "pw" type="password" placeholder="비밀번호">
                <input name = "email" type="text" placeholder="이메일: example@example.com">
                <input name = "name" type="text" placeholder="이름">
                <input name = "birth" type="text" placeholder="생일: 0000-00-00">
                <input name = "number" type="text" placeholder="번호: 000-0000-0000">
                <input name = "score" type="text" placeholder="점수: 000">
                <button type="submit">REGIST</button>
            </form>
        </div>
    </div>
</body>

</html>