<!DOCTYPE html>

<head>
    <title>FIND</title>
    <meta content="charset=utf-8">
    <link rel="stylesheet" href="./style/find.css">
    <script></script>
</head>

<body>
    <div class = "headBox">
        <a class = "title" href="home.php">안녕하진않아요</a>
    </div>

    <div class = "bodyBox">
        <h1>비밀번호를 찾고자하는 아이디를 입력해주세요.</h1>
        <form action="">
            <button></button>
            <h2>회원정보에 등록한 휴대전화로 인증</h2>
            <?php?>
            <input name="name" type="text" placeholder="이름">
            <input name="number" type="text" placeholder="휴대전화번호">
            <button type="submit">인증번호 받기</button>
        </form>
        <form action="">
            <button></button>
            <h2>본인확인 이메일로 인증</h2>
            <?php?>
            <input name="name" type="text" placeholder="이름">
            <input name="email" type="text" placeholder="이메일 주소">
            <button type="submit">인증번호 받기</button>
        </form>
    </div>

    <div class = "footBox">
        <button type="button">다음</button>
    </div>
</body>

</html>