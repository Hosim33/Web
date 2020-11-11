<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];
if ($id == 'swing' && $pw == 'swu28') {
  $_SESSION['id'] = $id;
  $_SESSION['pw'] = $pw;
header("Location:index.php");
}
else {
  echo "로그인 정보가 일치하지 않습니다. 잠시 후 로그인 페이지로 이동합니다.";
  echo "<meta http-equiv='refresh' content='6;url=login.php'>";
}
?>
