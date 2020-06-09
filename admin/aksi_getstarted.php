<?php 
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");

$jenispenginapan         = $_POST["jenispenginapan"];
$jenisruangan          = strtolower($_POST["jenisruangan"]);
$jumlahtamu          = $_POST["jumlahtamu"];
$jumlahkasuruntuktamu          = $_POST["jumlahkasuruntuktamu"];
$alamat          = $_POST["alamat"];
$kecamatan          = ucfirst($_POST["kecamatan"]);
$kodepos          = $_POST["kodepos"];
$penjelasanpenginapan          = $_POST["penjelasanpenginapan"];
$namapenginapan          = strtoupper($_POST["namapenginapan"]);


$notelp          = $_POST["notelp"];
$waktucheckinfrom          = $_POST["waktucheckinfrom"];
$waktucheckinto          = $_POST["waktucheckinto"];
$harga          = $_POST["harga"];



if (isset($_POST["tambahpenginapan"]))
{
    $fotopenginapan=$_FILES["foto"]["name"];
	$lokasi=$_FILES["foto"]["tmp_name"];
move_uploaded_file($lokasi, "foto_penginapan/".$fotopenginapan);
	$conn->query("INSERT INTO penginapan (username,jenispenginapan,jenisruangan,jumlahtamu,jumlahkasuruntuktamu,alamat,kecamatan,kodepos,penjelasanpenginapan,namapenginapan,fotopenginapan,notelp,waktucheckinfrom,waktucheckinto,harga) values
	('$username','$jenispenginapan','$jenisruangan','$jumlahtamu','$jumlahkasuruntuktamu','$alamat','$kecamatan','$kodepos','$penjelasanpenginapan','$namapenginapan','$fotopenginapan','$notelp','$waktucheckinfrom','$waktucheckinto','$harga')");
	
	echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
  echo "<script> alert('Penginapan BERHASIL didaftarkan, Silahkan Cek Daftar Penginapan Anda di Profil->Daftar Penginapan')</script>";
}
?>