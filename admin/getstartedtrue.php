 
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
                        <li><a href="#">Profil</a>
                            <ul class="drop-menu">
                                <li><a href="admin.php?page=daftarpenginapan">Daftar Penginapan</a></li>
                                <li><a href="admin.php?page=pemesanan">Daftar Pemesanan</a></li>
                                <li><a href="admin.php?page=logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <br><br><br><br><br><br><br><br><br><br><br>

<?php
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
?>
<body>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-up" checked><label class="tab">Daftarkan Penginapan</label>
    <div class="login-form">   
      <div class="sign-up-htm">
        <form method="post" enctype="multipart/form-data" action="admin.php?page=aksigetstartedtrue">

<div class="group">
  <label>Jenis Penginapan</label><br>
    <select name="jenispenginapan" required />
      <option value="">-Pilih Salah Satu-</option>
<?php
$get = $conn->query("SELECT * FROM jenispenginapan");
$no=0;
$each=mysqli_fetch_assoc($get);?>
<?php foreach ($get as $each):
$no++;?>
      <option value="<?php echo $each["jenispenginapan"] ?>"><?php echo $each["jenispenginapan"] ?></option>
      <?php endforeach; ?>
    </select></div><br>


<div class="group">
  <label>Jenis Ruangan</label><br>
    <select name="jenisruangan" required />
      <option value="">-Pilih Salah Satu-</option>
<?php
$get1 = $conn->query("SELECT * FROM jenisruangan");
$no=0;
$each1=mysqli_fetch_assoc($get1);?>
<?php foreach ($get1 as $each1):
$no++;?>
      <option value="<?php echo $each1["jenisruangan"] ?>"><?php echo $each1["jenisruangan"] ?></option>
      <?php endforeach; ?>
    </select></div><br>

<label>Berapa Jumlah Tamu per ruangan?</label><br>
<div class="group">
          <input name="jumlahtamu" placeholder="Jumlah Tamu" type="number" class="input" required />
        </div><br>

<label>Berapa Jumlah Kasur Untuk per Ruangan?</label><br>
<div class="group">
          <input name="jumlahkasuruntuktamu" placeholder="Jumlah Kasur Untuk Tamu" type="number" class="input" required />
        </div><br>

<label>Alamat Penginapan</label><br>
 <div class="group">
          <input name="alamat" placeholder="Alamat" type="text" class="input" required />
        </div><br>

<div class="group">
  <label>Kecamatan</label><br>
    <select name="kecamatan" required />
      <option value="">-Pilih Salah Satu-</option>
<?php
$get2 = $conn->query("SELECT * FROM kecamatan ");
$no=0;
$each2=mysqli_fetch_assoc($get2);?>
<?php foreach ($get2 as $each2):
$no++;?>
      <option value="<?php echo $each2["kecamatan"] ?>"><?php echo $each2["kecamatan"] ?></option>
      <?php endforeach; ?>
    </select></div><br>

<label>Kode Pos</label><br>
<div class="group">
          <input name="kodepos" placeholder="Kode Pos" type="number" class="input" required />
        </div><br>
        
<label>Penjelasan Penginapan</label><br>
 <div class="group">
          <input name="penjelasanpenginapan" placeholder="Jelaskan Penginapan" type="text" class="input" required />
        </div><br>

<label>Nama Penginapan</label><br>
 <div class="group">
          <input name="namapenginapan" type="text" class="input" required />
        </div><br>

<label>Foto Penginapan</label><br>
 <div class="group">
    <input type="file" class="input" name="foto" placeholder="Pilih Foto" required />
  </div><br>

<label>Nomor Telepon</label><br>
<div class="group">
          <input name="notelp" placeholder="No. Telp" type="number" class="input" required />
        </div><br>

<div class="group">
  <label>Kapan Tamu dapat Checkin?</label><br>
  <label>Dari :</label><br>
    <select name="waktucheckinfrom" required />
      <option value="">-Pilih Salah Satu-</option>
<?php
$get3 = $conn->query("SELECT * FROM waktucheckinfrom");
$no=0;
$each3=mysqli_fetch_assoc($get3);?>
<?php foreach ($get3 as $each3):
$no++;?>
      <option value="<?php echo $each3["waktucheckinfrom"] ?>"><?php echo $each3["waktucheckinfrom"] ?></option>
      <?php endforeach; ?>
    </select></div>

<div class="group">
    <label>Sampai :</label><br>
    <select name="waktucheckinto" required />
      <option value="">-Pilih Salah Satu-</option>
<?php
$get4 = $conn->query("SELECT * FROM waktucheckinto");
$no=0;
$each4=mysqli_fetch_assoc($get4);?>
<?php foreach ($get4 as $each4):
$no++;?>
      <option value="<?php echo $each4["waktucheckinto"] ?>"><?php echo $each4["waktucheckinto"] ?></option>
      <?php endforeach; ?>
    </select></div><br>

<label>Berapa Harga yang ditetapkan per Hari?</label><br>
<div class="group">
          <input name="harga" placeholder="Harga Penyewaan" type="number" class="input" required />
        </div><br><br><br><br>
    <div class="group">
          <button class="button" name="tambahpenginapan">Create</div>
          

</form></div></div></div></div><br><br><br><br><br><br><br><br>

<!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="admin.php"><img src="img/pansub.png" alt=""></a>
                        </div>
                        <p>PAN-SUB merupakan Sistem Informasi Pemesanan Penginapan area Surabaya berbasis Web dimana setiap pemilik dapat mendaftar dan memasarkan penginapnnya. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Newsletter</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <center><button type="submit">SEND</button></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><img src="img/contact.png" alt="">Rahayu K.P. Wardhani<br />18082010038</li>
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
                             <li><a href="admin.php?page=daftarkanpenginapantrue">Overview</a></li>
                        <li><a href="admin.php?page=pengaturantrue">Setup</a></li>
                        <li><a href="admin.php?page=keamanantrue">Keamanan</a></li>
                        <li><a href="admin.php?page=keuangantrue">Keuangan</a></li>
                        <li class="active"><a href="admin.php?page=getstartedtrue">Get Started</a></li>
                        <li><a href="admin.php?page=daftarpenginapan">Profil</a></li>
                            <li>
                            <li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/mitawrdhn/" target="_blank">Mitawrdhn</a></div>
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