<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!--custom index css file link-->
    <link rel="stylesheet" href="Public/Css/register.css">

    <title>Register | BOOKSTORE</title>
</head>
<body>

<!-- End Register header-->
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
                <form method="post" action="<?php echo URL; ?>RegisterController/checkUser">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="نام کاربری خود را وارد کنید.." maxlength="100" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="آدرس ایمیل خود را وارد کنید.." maxlength="100" required class="form-control"
                                id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="رمزعبور خود رامشخص كنيد.." maxlength="100" required
                               class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" placeholder="رمزعبور را مجدد وارد كنيد.." maxlength="100" required
                               class="form-control" id="exampleInputPassword1">
                    </div>

                    <label class="login">آيا قبلا عضو سایت شده اید؟<a href="<?php echo URL; ?>loginController/index">ورود<a></label>

                    <button type="submit" class="btn">ثبت نام</button>

            </form>
            <!-- End Register form -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Register body-->
<!--js-->
<!-- custom  js bootstrap cdn link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- custom  jquery cdn link  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>

