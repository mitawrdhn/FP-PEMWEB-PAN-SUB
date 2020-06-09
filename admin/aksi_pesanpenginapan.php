<?php
session_start();
if (empty($_SESSION["username"]))
{
    echo "<script> alert('Silahkan Log In terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    exit;
}

$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
$username=$_SESSION["username"];
$id_penginapan=$_GET["id"];
$pemilikpenginapan=$_GET["pemilikpenginapan"];
$namapemesan = $_POST["namapemesan"];
$namapenginapan=$_GET["namapenginapan"];
$harga=$_GET["harga"];
$nohp  = $_POST["nohp"];
$mulai=$_POST["mulai"];
$sampai=$_POST["sampai"];
$waktumulai=new DateTime($mulai);
$waktusampai=new DateTime($sampai);
$lamapemesanan = $waktusampai->diff($waktumulai)->days;   
$totalbayar=$lamapemesanan*$harga; 

if (isset($_POST["pesanpenginapan"])) 
{
	$conn->query("INSERT INTO booking (username,id_penginapan,pemilikpenginapan,namapemesan,namapenginapan,nohp,mulai,sampai,lamapemesanan,totalbayar) 
		values ('$username','$id_penginapan','$pemilikpenginapan','$namapemesan','$namapenginapan','$nohp','$mulai','$sampai','$lamapemesanan','$totalbayar')");


	echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
  echo "<script> alert('Booking Penginapan BERHASIL, Silahkan Cek Daftar Booking Anda di Profil -> Daftar Pemesanan')</script>";
}else{
	echo 'gagal';
}
 
 ?>

