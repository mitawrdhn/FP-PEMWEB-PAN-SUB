<?php 
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
include('signup.html');
$uname         = $_POST['uname'];
$name          = $_POST['name'];
$email          = $_POST['email'];
$hp          = $_POST['hp'];
$pass          = $_POST['pass'];

if (isset($_POST['simpan']))
{
$get = $conn->query("SELECT * FROM user WHERE username='$uname'");
if(mysqli_num_rows($get)>0){
	echo "<script> alert('Username telah terpakai, Silahkan gunakan username lain')</script>";
	return false;
}else{

  $conn->query("INSERT INTO user
		(username,name,email,hp,password) 
		VALUES ('$uname','$name','$email','$hp','$pass')");
	
	echo "<script> alert('Sign Up BERHASIL, Silahkan Log In untuk dapat mengakses PAN-SUB')</script>";
	echo "<meta http-equiv='refresh' content='1;url=admin/login.php'>";
}
}
?>