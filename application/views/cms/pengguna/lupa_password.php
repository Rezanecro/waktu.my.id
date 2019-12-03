<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="forgot"></a>

        <div class="login_wrapper">
            <section class="login_content">
                <form action="" method="POST">
                    <h1>Lupa Password</h1>
                    <div>
                        <input name="emaiUserTxt" type="email" class="form-control" placeholder="Tulis alamat email anda" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info submit" name="lupa_form">Masuk</button>
                        <a class="reset_pass" href="#">Lupa password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Belum punya akun?
                            <a href="<?php echo base_url('register') ?>" class="to_register"> Buat Akun </a>
                        </p>

                        <p class="change_link">Sudah punya akun?
                            <a href="<?php echo base_url('masuk') ?>" class="to_register"> Masuk </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-home"></i> Waktu.my.id</h1>
                            <p>©2019 All Rights Reserved. Waktu</p>
                        </div>
                    </div>
                </form>
            </section>

            
        </div>
    </div>
</body>
