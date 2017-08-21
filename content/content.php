<?php
    if(isset($_GET['show'])){
        $show = $_GET['show'];
        }else $show = 'beranda';

    if($show == "beranda") include ("content/beranda.php");
    else if($show == "masuk") include ("content/login.php");
    else if($show == "daftar") include ("content/signup.php");
    else if($show == "tentang") include ("content/about.php");
    else if($show == "produk") include ("content/product.php");
    else if($show == "carabelanja") include ("content/howto.php");
    else if($show == "kontak") include ("content/contact.php");

    else {
        echo "<h2 class='text-center' style='color: #000'>Kontent Tidak Ada</h2>";
        echo "<h2 class='text-center' style='color: #000'>404</h2>";
    }
    
?>