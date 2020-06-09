
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
                    <h2>Daftar Pemesanan &nbsp<?php echo $username; ?></h2>
                </div><br><br><br>
                <a href="admin.php" class="primary-btn">Booking Penginapan</a>
    </CENTER>
    <!-- judul Section End -->
    <Br><Br>
    

 <!--nampilin daftar-->
<?php
if($_SESSION["username"]=='admin'){
    $data = $conn->query("SELECT * FROM booking");
}else{
$data = $conn->query("SELECT * FROM booking WHERE username='$username'");}
$row=mysqli_fetch_assoc($data);?>
<?php foreach ($data as $row):?>
 <!--table-->
<div class="pricingTable">
  <ul class="pricingTable-firstTable">
    <li class="pricingTable-firstTable_table">
      <h1 class="pricingTable-firstTable_table__header">P A N  -  S U B<br>
        <li></li></h1>
      <p class="pricingTable-firstTable_table__pricing"><?php echo $row["namapenginapan"];?></p>
      <ul class="pricingTable-firstTable_table__options">
        <li>Mulai :<?php echo $row["mulai"];?></li>
        <li>Sampai :<?php echo $row["sampai"];?></li>
        <li>Total : Rp<?php echo $row["totalbayar"];?></li>
      </ul>
      <table>
    <thead><br><tr>
      <a href="lihatyangdipesan.php?idbooking=<?php echo $row["id"]; ?>" class="pricingTable-firstTable_table__getstart">LIHAT</a>
  </tr>
  </thead></table>
    </li>
  </ul>
</div>
<?php endforeach; ?>
<!--selesai daftar-->
    
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Reviews</</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            03 / 02 / 2020
                        </div>
                        <h4>I will come back again</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>It was such a good timme spending my time with my girlfriend in Surabaya on 3rd of February until 9th of February. Although I was only stayed in Surabaya for a week, but I really enjoyed it and will be back again soon.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/author1.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>ZHONG JUN YU <span>Zhuhai</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            03 / 02 / 2020
                        </div>
                        <h4>We loved our stay</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>it was such a good experience! On 3rd of February I met my boyfriend for the first time in Surabaya. This website provides some information that lets me know where my boyfriend can stay while he spending time here.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/author2.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>MITA WARDHANI <span>Surabaya</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End --><br><br>
<!-- Call To Action Begin -->
    <section class="callto-section">
        <div class="container">
            <div class="callto-text">
                <h2>Daftarkan Penginapan Anda ke PAN-SUB sekarang!</h2>
            </div>
            <a href="admin/admin.php?page=getstartedtrue" class="primary-btn">Start</a>
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
                            <a href="index.php"><img src="img/pansub.png" alt=""></a>
                        </div>
                        <p>PAN-SUB merupakan Sistem Informasi Pemesanan Penginapan area Surabaya berbasis Web dimana setiap pemilik dapat mendaftar dan memasarkan penginapnnya. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Newsletter</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit">SEND</button>
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
                              <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="daftarkanpenginapan.html">Daftarkan Penginapan</a></li>
                            <li><a href="bantuan.html">Bantuan</a></li>
                            <li><a href="admin/login.php">Log In</a></li>
                            <li><a href="signup.html">Sign Up</a></li>
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
