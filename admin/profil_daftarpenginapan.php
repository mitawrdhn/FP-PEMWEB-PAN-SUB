
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
                        <li><a href="admin.php?page=daftarkanpenginapantrue">Daftarkan Penginapan</a></li>                        
                        <li><a href="admin.php?page=bantuantrue">Bantuan</a></li>
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

<!-- judul Section Begin -->
    <br><br>
    <BR><br><br><br><br><br><br>
    <BR>
                    <CENTER><P>P R O F I L</P>
                    <div class="section-title">
                    <h2>Daftar Penginapan &nbsp<?php echo $username; ?></h2>
                </div><br><br><br>
                <a href="admin.php?page=getstartedtrue" class="primary-btn">Tambah Penginapan</a>
    </CENTER>
    <!-- judul Section End -->
    <Br><Br>
   <!--nampilin daftar-->
<?php
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
if($_SESSION["username"]=='admin'){
    $data=$conn->query("SELECT * FROM penginapan");
}else{
$data = $conn->query("SELECT * FROM penginapan where username='$username'");}
$row=mysqli_fetch_assoc($data);?>
<?php foreach ($data as $row):?>
 <!--table-->
<div class="pricingTable">
  <ul class="pricingTable-firstTable">
    <li class="pricingTable-firstTable_table">
      <h1 class="pricingTable-firstTable_table__header"><?php echo $row["namapenginapan"];?></h1>
      <p class="pricingTable-firstTable_table__pricing"><img src="foto_penginapan/<?php echo $row["fotopenginapan"]; ?>" width="100" height="100"> </p>
      <ul class="pricingTable-firstTable_table__options">
        <li><?php echo $row["alamat"];?></li>
        <li><?php echo $row["jumlahkasuruntuktamu"];?> Tempat Tidur / <?php echo $row["jenisruangan"];?></li>
        <li>Rp <?php echo $row["harga"];?></li>
      </ul>
      <table>
    <thead><br>
    <tr>
      <a href="lihatadmin.php?id=<?php echo $row["id"]; ?>" class="pricingTable-firstTable_table__getstart"  >LIHAT</a>
  </tr>&nbsp&nbsp<tr>
      <a href="edit.php?id=<?php echo $row["id"]; ?>" class="pricingTable-firstTable_table__getstart">EDIT</a></tr>
      <tr>&nbsp
      <a href="hapus.php?id=<?php echo $row["id"]; ?>" class="pricingTable-firstTable_table__getstart"  onclick="return confirm('Apakah Anda yakin ingin menghapus penginapan?')" >HAPUS</a></tr>
      
  </thead></table>
    </li>
  </ul>
</div>
<?php endforeach;  ?>
<!--selesai daftar-->

   <Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br>
    <!-- Call To Action Begin -->
    <section class="callto-section">
        <div class="container">
            <div class="callto-text">
                <h2>Daftarkan Penginapan Anda ke PAN-SUB sekarang!</h2>
            </div>
            <a href="admin.php?page=daftarkanpenginapantrue" class="primary-btn">Start</a>
        </div>
    </section>
    <!-- Call To Action End  -->

 
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
                            <li><a href="admin.php">Home</a></li>
                            <li><a href="admin.php?=daftarkanpenginapantrue">Daftarkan Penginapan</a></li>
                            <li><a href="admin.php?page=bantuantrue">Bantuan</a></li>
                            <li class="active"><a href="admin.php?page=daftarpenginapan">Profil</a></li>
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