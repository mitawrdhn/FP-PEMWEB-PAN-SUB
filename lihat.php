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
    <link rel="stylesheet" href="css/stylee.css" type="text/css">
    <link rel="shortcut icon" href="css/Icon.ico">
    <link rel="stylesheet" href="css/tables.css" type="text/css">
    <link rel="stylesheet" href="css/search.css" type="text/css">
    <script src="JQuery.js"></script>   
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
                    <a href="index.php"><img src="img/pansub.png" alt=""></a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="daftarkanpenginapan.html">Daftarkan Penginapan</a></li>
                        <li><a href="bantuan.html">Bantuan</a></li>
                        <li><a href="admin/login.php">Log In</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
    
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    

   <!--nampilin daftar-->

<?php
//lihat data sesuai yg diklik

$id=$_GET["id"];
$conn = new mysqli("localhost","id13994322_mitawrdhn","(ZPPvD5)TTh_q8s[","id13994322_pansub");
$data = $conn->query("SELECT * from penginapan where id='$id'");
$row=mysqli_fetch_assoc($data);?>
<?php foreach ($data as $row):?>


    <!-- Steps Section Begin -->
    <br><br>
    <BR><br><br><br><br><br><br>
    <BR>
                    <CENTER><P>D E T A I L</P>
                    <div class="section-title">
                    <h2>P E N G I N A P A N</h2>
                </div>
                <div class="container">
            <div class="row">
<span>  &nbsp</span><span>  &nbsp</span>
                        <h4></h4>
                </div>
            </div><br><br>
    </CENTER>
    <!-- Steps Section End -->

<br><br><br>

<section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    
                    <div class="ri-slider-item">
                            <img src="admin/foto_penginapan/<?php echo $row["fotopenginapan"]; ?>"class="ri-sliders owl-carousel"/>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="ri-text">
                        <div class="section-title">
                                <span>P A N  -  S U B</span>
                                <h2><?php echo $row["namapenginapan"]; ?></h2>
                        
                        <div class="section-title">
                                <h4>Rp<?php echo $row["harga"]; ?> / malam</h4>
                                <p><?php echo $row["jenispenginapan"]." "."~"." ".$row["jenisruangan"];?></p></div>
            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-050-bellboy"></i>
                                    <p><?php echo $row["jumlahtamu"]; ?></p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-026-bed"></i>
                                    <p><?php echo $row["jumlahkasuruntuktamu"]; ?></p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-044-clock-1"></i>
                                    <p><?php echo $row["waktucheckinfrom"]; ?></p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-044-clock-1"></i>
                                    <p><?php echo $row["waktucheckinto"]; ?></p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-020-telephone"></i>
                                    <p><?php echo $row["notelp"]; ?></p>
                                </div>
                            <a href="admin/pesanpenginapan.php?id=<?php echo $row["id"]; ?>&harga=<?php echo $row["harga"];  ?>&pemilikpenginapan=<?php echo $row["username"];?>&namapenginapan=<?php echo $row["namapenginapan"]; ?>" class="primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <h4><?php echo $row["alamat"].","." ".$row["kecamatan"].","." ".$row["kodepos"]; ?></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p><?php echo $row["penjelasanpenginapan"]; ?></p>
                        <div class="ti-author">
                            <div class="author-text">
                                <h6><?php echo $row["username"]; ?></h6>
                                <span>Pemilik Penginapan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Section End -->
    
    <?php endforeach; ?>
<BR><BR><BR><BR><BR><BR>
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
