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
    


    <!-- Index Start -->
<?php
    if(empty($_GET['page']) OR $_GET['page']==NULL){
        include('home.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'aksicari') {
            include('aksi_cari.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'pemesanan') {
            include('pemesanan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'daftarpenginapan') {
            include('profil_daftarpenginapan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'getstartedtrue') {
            include('getstartedtrue.php');
    }elseif(!empty($_GET['page']) && $_GET['page'] == 'pesanpenginapan') {
            include('pesanpenginapan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'aksigetstartedtrue') {
            include('aksi_getstarted.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'daftarkanpenginapantrue') {
            include('daftarkanpenginapan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'logout') {
            include('logout.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'bantuantrue') {
            include('bantuan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'login') {
            include('login.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'aksilogin') {
            include('aksi_login.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'signup') {
            include('signup.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'aksisignup') {
            include('aksi_signup.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'pengaturantrue') {
            include('pengaturan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'keamanantrue') {
            include('keamanan.php');
    }
    elseif(!empty($_GET['page']) && $_GET['page'] == 'keuangantrue') {
            include('keuangan.php');
    }
?>

    