
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

                <h1>صفحه ورود</h1>

                <!-- Loging form -->
                <form method="post" action="<?php echo URL; ?>" >
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-check">

                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>

                        <label class="register">آيا عضو سايت هستيد؟<a href="<?php echo URL; ?>RegisterController">ثبت نام<a></label>
                        <br>
                    </div>
                    <button type="submit" class=" btn">ورود</button>
                </form>
                <!-- End Loging form -->

            </div>
        </div>
    </div>
</div>
