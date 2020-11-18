<?php
session_start();
$id = $_POST['id'];   //input 으로 입력받은 id를 변수로 받는다.
$pw = $_POST['pw'];   //input 으로 입력받은 pwd를 변수로 받는다.

$con = mysqli_connect("localhost","root","990531","mydb") or die("mysql connect error");     //mysql 연결
$query = "SELECT * from member where id='$id';"; //select 쿼리문을 보낸다. id확인
$result = mysqli_query($con, $query) or die("query error"); //쿼리결과를 받아온다.
$query2 = "SELECT * from member where pwd='$pw';"; //select 쿼리문을 보낸다. pwd 확인
$result2 = mysqli_query($con, $query2) or die("query error"); //쿼리2결과를 받아온다.
$count = mysqli_num_rows($result); //쿼리결과를 count에 저장한다.
$count2 = mysqli_num_rows($result2); //쿼리2결과를 count2에 저장한다.

if($count==1 && $count2==1){ //로그인 성공시 세션 만들고 index.php로 이동
  $_SESSION['id'] = $id;
  $_SESSION['pw'] = $pw;
header("Location:index.php");
}
else { //로그인 실패시 실패메시지
  echo "로그인 정보가 일치하지 않습니다. 잠시 후 로그인 페이지로 이동합니다.";
  echo "<meta http-equiv='refresh' content='6;url=login.php'>";
}
mysqli_close($con);
?>
