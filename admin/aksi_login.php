<?php
session_start();


$username         = $_POST['username'];
$password          = $_POST['password'];
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
$get = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($get)===1){
$row=mysqli_fetch_assoc($get);

if ($row['password']==$password){
  $_SESSION["username"]=$username;
  $_SESSION["login"]=true;
  header("location:../admin/admin.php");
}
}
else{
  echo "<meta http-equiv='refresh' content='1;url=../admin/login.php'>";
  echo "<script> alert('Username / Password Salah')</script>";

}
?>