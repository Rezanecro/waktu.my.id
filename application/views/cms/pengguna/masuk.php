<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Masuk Panel</h1>
                        <div>
                            <input name="emaiUserTxt" type="email" class="form-control" placeholder="Tulis alamat email anda" required="" />
                        </div>
                        <div>
                            <input name="passwordUserTxt" type="password" class="form-control" placeholder="Tulis password anda" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info submit" name="masuk_form">Masuk</button>
                            <a class="reset_pass" href="#">Lupa assword?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Belum punya akun?
                                <a href="#signup" class="to_register"> Buat Akun </a>
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

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Buat Akun</h1>
                       <div>
                            <input name="emaiUserTxt" type="email" class="form-control" placeholder="Tulis alamat email anda" required="" />
                        </div>
                        <div>
                            <input name="passwordUserTxt" type="password" class="form-control" placeholder="Tulis password anda" required="" />
                        </div>
                        <div>
                            <input name="passwordUserTxt" type="password" class="form-control" placeholder="Ulangi tulis password anda" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info submit" name="buat_akun_form">Buat Akun</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Sudah punya akun ?
                                <a href="#signin" class="to_register"> Masuk </a>
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
    </div>
</body>
