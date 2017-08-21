<!DOCTYPE html>
<html class="js canvas canvastext geolocation rgba hsla no-multiplebgs borderimage borderradius boxshadow opacity no-cssanimations csscolumns no-cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions  video audio cufon-active fontface cufon-ready">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="plugins/hover-master/css/hover.css" />
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/lightslider/lightslider.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/default.css" />
    <script type="text/javascript" src="plugins/modernizr-custom.js"></script>
    <script type="text/javascript" src="plugins/jquery.js"></script>
    <script type="text/javascript" src="plugins/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/simplecart/simpleCart.js"></script>
    <script type="text/javascript" src="plugins/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="plugins/pace/pace.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
    <script type="text/javascript" src="plugins/lightslider/lightslider.js"></script>
    <script type="text/javascript" src="plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/product-slider.js"></script>
    <script type="text/javascript" src="assets/js/default.js"></script>

</head>


<body oncontextmenu="return false;">
    <!--Navbar-->
    <nav class="navbar navbar-default nav-top" role="navigation">
        <div class="container">
            <div class="row">
                <!--scroll to top-->
                <div class="scroll-top-link">
                    <i style="cursor: pointer;" class="fa fa-chevron-up"></i>
                </div>

                <!--for md & sm -->
                <div class="col-sm-4 col-xs-12 bt-header hidden-xs">
                    <a href="?show=masuk" id="link-color"><i class="fa fa-sign-in"></i> Masuk</a>
                    <span class="linkhead">atau</span>
                    <a href="?show=daftar" id="link-color"><i class="fa fa-user-plus"></i> Daftar</a>
                </div>
                <!-- for xs -->
                <div class="col-sm-4 col-xs-12 bt-header visible-xs" align="center">
                    <a href="?show=masuk" id="link-color"><i class="fa fa-sign-in"></i> Masuk</a>
                    <span class="linkhead">atau</span>
                    <a href="?show=daftar" id="link-color"><i class="fa fa-user-plus"></i> Daftar</a>
                </div>


                <div class="header-right">
                    <div class="cart_box" id="cart">
                        <a href="?show=cart" class="cart_total">
                            <h3>
                                <span class="simpleCart_total">$0.00</span>(<span id="simpleCart_quantity" class="simpleCart_quantity">0</span>)
                                <span class="fa fa-shopping-cart"></span>
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty empty_cart">Hapus keranjang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Social Media -->
    <header>
        <div class="container">
            <div class="row">
                <div class="itemAlign" align="center">
                    <img src="assets/img/hellsnacks.png" class="img-responsive" width="400" title="HellSnacks">
                </div>
                <div class="btn-vertical" align="center">
                    <li><a href="#" class="btn btn-default fa-icon ic_fb"><i class="fa fa-facebook"></i></a></li>
                    <li> <a href="#" class="btn btn-default fa-icon ic_twtr"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="btn btn-default fa-icon ic_ig"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="btn btn-default fa-icon ic_yt"><i class="fa fa-youtube"></i></a></li>
                </div>
            </div>
        </div>
    </header>
    <!-- End Social Media -->

    <!-- Menu -->
    <section class="bt-header-menu">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <div class="">
                            <div class="bt-main-menu">
                                <div class="menu-nav" id="navbar-nav" align="center">
                                    <li><a class="link-menu" href="?show=beranda" style="background: transparent; outline: 0;">BERANDA</a></li>
                                    <li><a class="link-menu" href="?show=tentang" style="background: transparent; outline: 0;">TENTANG KAMI</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="hidden-xs link-menu" id="dropbtn" style="background: transparent; outline: 0;">
                                    KATEGORI
                                        </a>
                                        <a href="javascript:;" class="dropdown-toggle  visible-xs link-menu" data-toggle="dropdown" style="background: transparent; outline: 0;">
                                            KATEGORI <i class="fa fa-plus-circle pull-right"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-content" id="dropdown-mod">
                                            <a href="#" class="list-group-item">Abon Pedas</a>
                                            <a href="#" class="list-group-item">Basreng Pedas</a>
                                            <a href="#" class="list-group-item">Bawang Goreng Pedas</a>
                                            <a href="#" class="list-group-item">Kentang Pedas</a>
                                            <a href="#" class="list-group-item">Keripik Pedas</a>
                                            <a href="#" class="list-group-item">Kerupuk Pedas</a>
                                            <a href="#" class="list-group-item">Makaroni Pedas</a>
                                            <a href="#" class="list-group-item">Rendang Pedas</a>
                                            <a href="#" class="list-group-item">Singkong Pedas</a>
                                        </div>
                                    </li>
                                    <li><a class="link-menu" href="?show=produk" style="background: transparent; outline: 0;">SEMUA PRODUK</a></li>
                                    <li><a class="link-menu" href="?show=carabelanja" style="background: transparent; outline: 0;">CARA BELANJA</a></li>
                                    <li><a class="link-menu" href="?show=kontak" style="background: transparent; outline: 0;">KONTAK</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu -->
    <!-- End Header-->

    <!-- Content -->
    <?php include 'content/content.php'; ?>
    <!-- End Content -->

    <!-- Footer -->
    <footer id="bt_footer">
        <div class="container">
            <div class="footer_column">
                <div class="row">
                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>HellSnacks</b></h3>
                            <div class="footer-desc">
                                HellSnacks adalah sebuah toko online yang menjual berbagai cemilan pedas.
                                <div class="contact-us" style="padding-top: 10px;">
                                    <div class="work" style="padding-bottom: 8px;">
                                        Senin – Sabtu : 09.30 – 17.00
                                    </div>
                                    <div class="address">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Jl. Perumnas No.10 Denpasar </span>
                                    </div>
                                    <div class="phone">
                                        <i class="fa fa-phone"></i>
                                        <span>0818-63-6161 / 022-424-6161</span>
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope-o"></i>
                                        <span>hellsnacks@gmail.com</span>
                                    </div>
                                </div>

                            </div>
                        </div><br class="visible-xs" />
                    </div>
                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>Produk Top</b></h3>
                            <div class="footer-desc">
                                <ul class="widget-top-product">
                                    <li>
                                        <a href="#">
                                            <img width="83" height="103" src="assets/img/product/kerupukselondok.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" sizes="(max-width: 83px) 100vw, 83px"> <span class="product-title">Kerupuk Selondok Pedas</span>
                                        </a>
                                        <span class="price-amount amount"><span class="price-currencySymbol">Rp.</span>12.500</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img width="83" height="103" src="assets/img/product/misspeucun.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" sizes="(max-width: 83px) 100vw, 83px"> <span class="product-title">Miss Peucun Mix Snack Pedas</span>
                                        </a>
                                        <span class="price-amount amount"><span class="price-currencySymbol">Rp.</span>16.500</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img width="83" height="103" src="assets/img/product/basrengpedas-eman.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" sizes="(max-width: 83px) 100vw, 83px"> <span class="product-title">Basreng Pedas Mang Eman</span>
                                        </a>
                                        <span class="price-amount amount"><span class="price-currencySymbol">Rp.</span>11.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div><br class="visible-xs" />
                    </div>
                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>Kategori Produk</b></h3>
                            <div class="footer-desc">
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-16"><a href="https://demo.themeisle.com/shop-isle-pro/product-category/hat/blouse/">Abon Pedas</a> <span class="count">(3)</span></li>
                                    <li class="cat-item cat-item-11"><a href="https://demo.themeisle.com/shop-isle-pro/product-category/clothing/">Keripik Pedas</a> <span class="count">(9)</span></li>
                                    <li class="cat-item cat-item-13"><a href="https://demo.themeisle.com/shop-isle-pro/product-category/hat/">Kerupuk Pedas</a> <span class="count">(5)</span></li>
                                    <li class="cat-item cat-item-13"><a href="https://demo.themeisle.com/shop-isle-pro/product-category/hat/">Makaroni Pedas</a> <span class="count">(4)</span></li>
                                    <li class="cat-item cat-item-13"><a href="https://demo.themeisle.com/shop-isle-pro/product-category/hat/">Basreng Pedas</a> <span class="count">(2)</span></li>
                                </ul>
                            </div>
                        </div><br class="visible-xs" />
                    </div>

                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>Google Maps</b></h3>
                            <div onload="initMap()" id="map" class="gmaps" style="overflow:hidden; position: relative">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.100630923713!2d115.19029631440903!3d-8.681979993762003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDAnNTUuMSJTIDExNcKwMTEnMzMuMCJF!5e0!3m2!1sen!2sid!4v1501896139758"
                                    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>Bantuan</b></h3>
                            <div class="footer-desc">
                                <ul>
                                    <li><a href="?show=carabelanja">Cara Belanja</a></li>
                                    <li><a href="?show=tentang">Tentang Kami</a></li>
                                    <li><a href="?show=produk">Semua Produk</a></li>
                                    <li><a href="?show=kontak">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </div><br class="visible-xs" />
                    </div>

                    <div class="column col-md-3">
                        <div class="footer-contact">
                            <h3 class="widget-title"><b>Pembayaran & Pengiriman</b></h3>
                            <div class="footer-desc">
                                <div class="contact-us">
                                    <p>Kami melayani pembayaran dan pengiriman yaitu dengan : <br></p>
                                    <img src="assets/img/cod.png" class="imghsip" width="170" height="79">
                                </div>
                            </div>
                        </div><br class="visible-xs" />
                    </div><br class="visible-xs" />
                </div>
            </div>
        </div>

        <div class="bt-powered">
            <div class="container">
                <div class="row">
                    <div id="powered">
                        <div class="footer-social text-center">
                            <div class="btn-vertical">
                                <li><a href="#" class="btn btn-default fa-icon ic_fb"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="#" class="btn btn-default fa-icon ic_twtr"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="btn btn-default fa-icon ic_ig"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="btn btn-default fa-icon ic_yt"><i class="fa fa-youtube"></i></a></li>
                            </div>
                            <span style="font-size: 15px;">
                            HellSnacks © Copyright 2017 . Allright reserved.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</body>

<script>
    Pace.on("done", function() {
        $(".cover").fadeOut(2000);
    });
</script>

</html>