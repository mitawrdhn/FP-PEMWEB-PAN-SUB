<?php 
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
include('bantuan.html');
$namaanda        = $_GET['namaanda'];
$emailanda          = $_GET['emailanda'];
$subject          = $_GET['subject'];
$pesan          = $_GET['pesan'];

if (isset($_POST['kirimpesan']))
{
	$conn->query("INSERT INTO bantuan
		(namaanda,emailanda,subject,pesan) 
		VALUES ('$namaanda','$emailanda','$subject','$pesan')");
	
	echo "<script> alert('Pesan Berhasil Terkirim')</script>";
	echo "<meta http-equiv='refresh' content='1;url=bantuan.html'>";
}
?>