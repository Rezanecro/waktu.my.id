<body class="login">
    <div>
        <!-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="forgot"></a> -->

        <div class="login_wrapper">
            <section class="login_content">
                <h1>Buat Akun</h1>
                 <div>
                    <input name="namaTxt" id="namaId" type="text" class="form-control" placeholder="Tulis nama anda" required="" />
                </div>
                <div style="margin-top: 30px">
                    <input name="emaiUserTxt" id="emaiUserId" type="email" class="form-control" placeholder="Tulis alamat email anda" required="" />
                </div>
                <div style="margin-top: 30px">
                    <input name="passwordUserTxt" id="passwordUserId" type="password" class="form-control" placeholder="Tulis password anda" required="" />
                </div>
                <div style="margin-top: 30px">
                    <input name="rePasswordUserTxt" id="rePasswordUserId" type="password" class="form-control" placeholder="Ulangi tulis password anda" required="" />
                </div>
                <div style="margin-top: 30px"   >
                    <button type="submit" class="btn btn-info submit" name="registerForm" id="registerFormId">Buat Akun</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Sudah punya akun ?
                        <a href="<?php echo base_url('masuk') ?>" class="to_register"> Masuk </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <h1><i class="fa fa-home"></i> Waktu.my.id</h1>
                        <p>©2019 All Rights Reserved. Waktu</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
