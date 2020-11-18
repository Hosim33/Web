<?php
session_start();
?>
 <!DOCTYPE html>
 <html lang="ko" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>로그인 페이지</title>
 </head>
 <body>
   <form action="2login.php" method="post">
     <p>아이디:<input type="text" name="id"><br>
     비밀번호:<input type="password" name="pw"><br></p>
     <input type="submit" value="로그인">
   </form>
   <form action="signup.php" method="post">
   <input type="submit" value="회원가입">
   </form>
 </body>
