<?php
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");

$id=$_GET['id'];
$get=$conn->query("DELETE FROM penginapan where id='$id'");

if($get){
  echo "<meta http-equiv='refresh' content='1;url=admin.php?page=daftarpenginapan'>";
  echo "<script> alert('Penginapan BERHASIL DIHAPUS')</script>";
}

?>