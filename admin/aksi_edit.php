<?php 

$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");

$id=$_GET["id"];
$jenispenginapan         = $_POST["jenispenginapan"];
$jenisruangan          = strtolower($_POST['jenisruangan']);
$jumlahtamu          = $_POST['jumlahtamu'];
$jumlahkasuruntuktamu          = $_POST['jumlahkasuruntuktamu'];
$alamat          = $_POST['alamat'];
$kecamatan          = ucfirst($_POST['kecamatan']);
$kodepos          = $_POST['kodepos'];
$penjelasanpenginapan          = $_POST['penjelasanpenginapan'];
$namapenginapan          = strtoupper($_POST['namapenginapan']);
$notelp          = $_POST['notelp'];
$waktucheckinfrom          = $_POST['waktucheckinfrom'];
$waktucheckinto          = $_POST['waktucheckinto'];
$harga          = $_POST['harga'];

if (isset($_POST['simpanpenginapan']))
{
	$conn->query("UPDATE penginapan SET jenispenginapan='$jenispenginapan',jenisruangan='$jenisruangan',jumlahtamu='$jumlahtamu',jumlahkasuruntuktamu='$jumlahkasuruntuktamu',alamat='$alamat',kecamatan='$kecamatan',kodepos='$kodepos',penjelasanpenginapan='$penjelasanpenginapan',namapenginapan='$namapenginapan',notelp='$notelp',waktucheckinfrom='$waktucheckinfrom',waktucheckinto='$waktucheckinto',harga='$harga' WHERE id='$id'"); 
	
	echo "<meta http-equiv='refresh' content='1;url=admin.php?page=daftarpenginapan'>";
	echo "<script> alert('Edit Penginapan BERHASIL, Silahkan cek di Profil Data Penginapan Anda')</script>";
}
?>
