
<?php
if (Model::getSession('wrong')):?>
    <h1><?php echo Model::getSession('wrong'); ?></h1>
<?php endif; ?>

    <!-- Backgrounds -->
    <div id="login-bg" class="container-fluid">

        <div class="bg-img"></div>
        <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->


    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="login">

                    <h1> صفحه ورود مديريت </h1>

                    <!-- Loging form -->
                    <form method="post" action="<?php echo URL; ?>/LoginAdminController/checkAdmin">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" id="username"
                                   aria-describedby="usernameHelp" placeholder="نام كاربري خود را وارد كنيد..">

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                   id="password" placeholder="رمز عبور خود را وارد كنيد..">
                        </div>

                        <br>

                        <button type="submit" class=" btn">ورود</button>
                    </form>
                    <!-- End Loging form -->

                </div>
            </div>
        </div>
    </div>
<?php
