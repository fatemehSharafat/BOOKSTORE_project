<!-- Backgrounds -->

<div id="register-bg" class="container-fluid">

    <div class="bg-color"></div>
    <div class="bg-img"></div>

</div>

<!-- End Backgrounds -->

<div class="container" id="register">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="register">

                <h1>صفحه ثبت نام</h1>

                <!-- Register form -->
                <form method="post" action="<?php echo URL; ?>">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="نام کاربری خود را وارد کنید.." required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="آدرس ایمیل خود را وارد کنید.." required class="form-control"
                               aria-describedby="emailHelp" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="رمزعبور خود رامشخص كنيد.." required
                               class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" placeholder="رمزعبور را مجدد وارد كنيد.." required
                               class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <select name="user_type" class="form-group form-control">
                            <option value="user">كاربر</option>
                            <option value="admin">مدير</option>
                        </select>
                    </div>
                    <label class="login">آيا قبلا عضو سایت شده اید؟<a href="<?php echo URL; ?>loginController">ورود<a></label>

                    <button type="submit" class="btn">ثبت نام</button>

            </form>
            <!-- End Register form -->
            </div>
        </div>
    </div>
</div>
</div>

