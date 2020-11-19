<?php
session_start();
$id = $_POST['id']; $pw = $_POST['pw'];
$name = $_POST['name']; $email = $_POST['email'];
if( $id==NULL || $pw==NULL || $name==NULL || $email==NULL )
{
  echo "빈 칸을 모두 채워주세요.";
  echo '<a href="/signup.php">이전으로</a>';
  exit();
}
$con = mysqli_connect("localhost","root","990531","mydb") or die("mysql connect error");
$query = "SELECT * from member where id='$id';";
$result = mysqli_query($con, $query) or die("query error");
$count = mysqli_num_rows($result);
if($count == 1) {
  echo "중복된 id 입니다.";
  echo '<a href="/signup.php">이전으로</a>';
  exit();
}
else {
  $query2 = "Insert into member values('$id', '$pw', '$name', '$email');";
  $result2 = mysqli_query($con, $query2) or die("query error");
    echo "회원가입이 완료되었습니다.";
}
mysqli_close($con);
?>
