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
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANSUB</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles --> 
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/stylegetstarteddanedit.css" type="text/css">
    <link rel="shortcut icon" href="css/Icon.ico">
    <link rel="stylesheet" href="css/tables.css" type="text/css">
</head>

<body>
     <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="admin.php"><img src="img/pansub.png" alt=""></a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="admin.php?page=daftarkanpenginapantrue">Overview</a></li>
                        <li><a href="admin.php?page=pengaturantrue">Setup</a></li>
                        <li><a href="admin.php?page=keamanantrue">Keamanan</a></li>
                        <li><a href="admin.php?page=keuangantrue">Keuangan</a></li>
                        <li class="active"><a href="admin.php?page=getstartedtrue">Get Started</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <br><br><br><br><br><br><br><br>



<?php
//edit data sesuai yg diklik
$id=$_GET["id"];
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
$data = $conn->query("SELECT * FROM penginapan where id='$id'");
$row=mysqli_fetch_assoc($data);?>
<?php foreach ($data as $row):?>


<?php
//jenispenginapan
$datajenispenginapan = array();

$get = $conn->query("SELECT * FROM jenispenginapan");
while($each = $get->fetch_assoc())
{
  $datajenispenginapan[] = $each;
}
//jenisruangan
$datajenisruangan = array();

$get1 = $conn->query("SELECT * FROM jenisruangan");
while($each1 = $get1->fetch_assoc())
{
  $datajenisruangan[] = $each1;
}
//jumlahruanganuntuktamu
$datajumlaruanganuntuktamu = array();

$get2 = $conn->query("SELECT * FROM jumlahruanganuntuktamu");
while($each2 = $get2->fetch_assoc())
{
  $datajumlaruanganuntuktamu[] = $each2;
}
//kecamatan
$datakecamatan = array();

$get3 = $conn->query("SELECT * FROM kecamatan");
while($each3 = $get3->fetch_assoc())
{
  $datakecamatan[] = $each3;
}
//waktucheckinfrom
$datawaktucheckinfrom = array();

$get4 = $conn->query("SELECT * FROM waktucheckinfrom");
while($each4 = $get4->fetch_assoc())
{
  $datawaktucheckinfrom[] = $each4;
}
//waktucheckinto
$datawaktucheckinto = array();

$get5 = $conn->query("SELECT * FROM waktucheckinto");
while($each5 = $get5->fetch_assoc())
{
  $datawaktucheckinto[] = $each5;
}
?>
<body>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-up" checked><label class="tab">Edit 🧡 <?php echo $row["namapenginapan"];?></label>
    <div class="login-form">   
      <div class="sign-up-htm">
        <form method="post" enctype="multipart/form-data" action="aksi_edit.php?id=<?php echo $id; ?>">
            
<div class="group">
  <label>Jenis Penginapan</label><br>
    <select name="jenispenginapan" required />
      <option value="<?php echo $row["jenispenginapan"];?>"><?php echo $row["jenispenginapan"];?></option>
      <?php foreach ($datajenispenginapan as $key => $value): ?>
      <option value="<?php echo $value["jenispenginapan"] ?>"><?php echo $value["jenispenginapan"] ?></option>
      <?php endforeach ?>
    </select></div><br>

<div class="group">
  <label>Jenis Ruangan</label><br>
    <select name="jenisruangan" required />
      <option value="<?php echo $row["jenisruangan"];?>"><?php echo $row["jenisruangan"];?></option>
      <?php foreach ($datajenisruangan as $key1 => $value1): ?>
      <option value="<?php echo $value1["jenisruangan"] ?>"><?php echo $value1["jenisruangan"] ?></option>
      <?php endforeach ?>
    </select></div><br>

<label>Berapa Jumlah Tamu per ruangan?</label><br>
<div class="group">
          <input name="jumlahtamu" placeholder="Jumlah Tamu" value="<?php echo $row["jumlahtamu"];?>" type="number" class="input" required />
        </div><br>

<label>Berapa Jumlah Kasur Untuk per Ruangan?</label><br>
<div class="group">
          <input name="jumlahkasuruntuktamu" placeholder="Jumlah Kasur Untuk Tamu" type="number" value="<?php echo $row["jumlahkasuruntuktamu"];?>"class="input" required />
        </div><br>

<label>Alamat Penginapan</label><br>
 <div class="group">
          <input name="alamat" placeholder="Alamat" type="text" value="<?php echo $row["alamat"];?>" class="input" required />
        </div><br>

<div class="group">
  <label>Kecamatan</label><br>
    <select name="kecamatan" required />
      <option value="<?php echo $row["kecamatan"];?>"><?php echo $row["kecamatan"];?></option>
      <?php foreach ($datakecamatan as $key3 => $value3): ?>
      <option value="<?php echo $value3["kecamatan"] ?>"><?php echo $value3["kecamatan"] ?></option>
      <?php endforeach ?>
    </select></div><br>

<label>Kode Pos</label><br>
<div class="group">
          <input name="kodepos" placeholder="Kode Pos" type="number" value="<?php echo $row["kodepos"];?>" class="input" required />
        </div><br>
        
<label>Penjelasan Penginapan</label><br>
 <div class="group">
          <input name="penjelasanpenginapan" placeholder="Jelaskan Penginapan" type="text" class="input" value="<?php echo $row["penjelasanpenginapan"];?>" required />
        </div><br>

<label>Nama Penginapan</label><br>
 <div class="group">
          <input name="namapenginapan" placeholder="Nama Penginapan" type="text" class="input" value="<?php echo $row["namapenginapan"];?>" required />
        </div><br>

<label>Nomor Telepon</label><br>
<div class="group">
          <input name="notelp" placeholder="No. Telp" type="number" class="input" value="<?php echo $row["notelp"];?>" required />
        </div><br>

<div class="group">
  <label>Kapan Tamu dapat Checkin?</label><br>
  <label>Dari :</label><br>
    <select name="waktucheckinfrom" required />
     <option value="<?php echo $row["waktucheckinfrom"];?>"><?php echo $row["waktucheckinfrom"];?></option>
      <?php foreach ($datawaktucheckinfrom as $key4 => $value4): ?>
      <option value="<?php echo $value4["waktucheckinfrom"] ?>"><?php echo $value4["waktucheckinfrom"] ?></option>
      <?php endforeach ?>
    </select></div>

<div class="group">
    <label>Sampai :</label><br>
    <select name="waktucheckinto" required />
      <option value="<?php echo $row["waktucheckinto"];?>"><?php echo $row["waktucheckinto"];?></option>
      <?php foreach ($datawaktucheckinto as $key5 => $value5): ?>
      <option value="<?php echo $value5["waktucheckinto"] ?>"><?php echo $value5["waktucheckinto"] ?></option>
      <?php endforeach ?>
    </select></div><br>

<label>Berapa Harga yang ditetapkan?</label><br>
<div class="group">
          <input name="harga" placeholder="Harga Penyewaan" type="number" class="input" value="<?php echo $row["harga"];?>" required />
        </div><br>
        
    <div class="group">
          <button class="button" name="simpanpenginapan">Save</div>
          <center><div class="label">Sudah punya akun?<a href="login.php">Log In</a></div></center><P>&nbsp</P>

</form></div></div></div></div><br><br><br>
<?php endforeach; ?>
<!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="#"><img src="img/pansub.png" alt=""></a>
                        </div>
                        <p>PAN-SUB merupakan Sistem Informasi Pemesanan Penginapan area Surabaya berbasis Web dimana setiap pemilik dapat mendaftar dan memasarkan penginapnnya. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Newsletter</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><img src="img/contact.png" alt="">Rahayu K.P. Wardhani<br />Muh. Hilman</li>
                            <li><img src="img/placeholder.png" alt="">Universitas Pembangunan Nasional "Veteran" Jawa Timur</li>
                            <li><img src="img/phone.png" alt="">+6295736188311</li>
                            <li><div class="social-links">
                            <a href="https://wa.me/085736188311"><i class="fa fa-whatsapp" target="_blank"></i></a>&nbsp&nbsp&nbsp&nbsp
                            <a href="https://www.instagram.com/mitawrdhn/" target="_blank"><i class="fa fa-instagram"></i></a>&nbsp&nbsp&nbsp&nbsp
                            <a href="https://msng.link/o/?https%3A%2F%2Fu.wechat.com%2FIL8BIBZ4bxj6D4UvOW9Ry6A=wc" target="_blank"><i class="fa fa-wechat"></i></a>&nbsp&nbsp&nbsp&nbsp
                            <a href="https://github.com/mitawrdhn/" target="_blank"><i class="fa fa-github"></i></a>&nbsp&nbsp&nbsp&nbsp
                            <a href="https://t.me/mitawrdhn" target="_blank"S><i class="fa fa-telegram"></i></a>&nbsp&nbsp&nbsp&nbsp
                            <a href="https://www.youtube.com/channel/UCEs29yKM45YtylFdpzanWuA?view_as=subscriber"><i class="fa fa-youtube-play"></i></a>
                        </div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Rooms</a></li>
                            <li><a href="#">Facilities</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>