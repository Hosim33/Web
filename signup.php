<?php
session_start();     //세션 시작
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>회원가입 페이지</title>
</head>
<body>
  <h1>회원가입</h1>
  <form action="signup_2.php" method="post">
    id<input type="text" name="id"><BR>
    password<input type="password" name="pw"><BR>
    이름<input type="text" name="name"><BR>
    이메일<input type="text" name="email"><BR>
    <input type="submit" value="회원가입">
  </form>
</body>
</html>
