
<title>Login | HellSnacks</title>
<link rel="stylesheet" href="assets/css/login.css" />
<script type="text/javascript" src="assets/js/login.js"></script>


<div class="login login-action">

       <!-- Breadcrumber (Riwayat Halaman)-->
        <section class="id-breacrumber">
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="?show=beranda" id="link-color"><i class="fa fa-home"></i></a></li>
                        <li><a href="javascript:void(0)" id="link-underline">Daftar</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumber -->

    <!-- Form Login -->
    <section class="id-form-login">
        <div class="container" id="login">
            <div class="row">
                <div class="log-form">
                    <label>Selamat datang. Masuk.</label>
                    <form role="form" name="loginform" id="loginform" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="log" class="form-control" id="user_login" placeholder="Nama pengguna">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" class="form-control" id="user_pass" placeholder="Kata sandi">
                        </div>
                        <div class="item-align" align="center">
                            <button class="btn btn-default btn-log hvr-bubble-top" id="btn-log" name="btnlogin">MASUK</button>
                        </div>
                    </form>
                    <p class="text-center" id="information">
                        <caption>Anda belum punya akun? <a href="?show=daftar" id="signUp-link">Daftar</a></caption>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form Login -->


</div>
