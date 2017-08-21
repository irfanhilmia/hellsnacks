
<title>Daftar | HellSnacks</title>
<link rel="stylesheet" href="assets/css/signup.css" />
<script type="text/javascript" src="assets/js/signup.js"></script>


<div class="signup signup-action">

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

    <!--content-->
    <section class="id-sign-up signup-action">
        <div class="container">
            <div class="row">
                <div class="page-title text-center" style="color:#000">
                    <div class="itemalign" align="center">
                        <h2 class="">Daftar Sekarang</h2>
                    </div>
                </div>

                <!-- Validation -->
                <script>
                    $.validator.setDefaults({
                        submitHandler: function() {
                            alert("submitted!");
                        }
                    });
                </script>

                <div class="signup-form">
                    <form role="form" name="signup-form" id="signup-form" action="" method="post">
                        <div class="form-group">
                            <label class="required">Nama Pengguna</label>
                            <input type="text" class="form-control" name="username" id="user_form" placeholder="Masukkan nama pengguna">
                        </div>
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input type="email" class="form-control" name="email" id="email_form" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <label class="required">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" id="pass_form" placeholder="Masukkan kata sandi">
                        </div>
                        <div class="form-group">
                            <label class="required">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="confirm_password" id="repass_form" placeholder="Masukkan ulang kata sandi">
                        </div>
                        <div class="form-group">
                            <label class="required">No.Telepon</label>
                            <input type="number" class="form-control" name="telp" id="no_form" max-length="12" placeholder="Masukkan no.telepon">
                        </div>
                        <div class="form-group">
                            <label class="required">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" id="alamat_form" placeholder="Masukkan alamat"></textarea>
                        </div>
                        <div class="item-align" align="center">
                            <button class="btn btn-default hvr-bubble-top" value="Daftar" id="btn_signup">DAFTAR</button>
                        </div>
                    </form>
                    <p class="text-center" id="information">
                        <caption>Sudah punya akun? <a href="?show=masuk" id="login-link">Masuk</a></caption>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end content-->
</div>