<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['pw'])) {
  echo "로그인 정보","<br/>\n";
  echo "id :", $_SESSION['id'];
  echo "<br/>\n";
  echo "pw :", $_SESSION['pw'];
}
else {
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>index</title>
</head>
<body>
  <h1>게시판</h1>
    <form action="">
      <textarea name="" id="" cols="30" rows="10"></textarea><br>
      <button>수정</button>
      <button>완료</button>
      <input type="reset">
    </form>
    <h3><a href="logout.php">로그아웃하기</a></h3>
</body>
