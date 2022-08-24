<!--LoginAdmin index-->
<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- LodingAdmin font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!--custom index css file link-->
    <link rel="stylesheet" href="Public/Css/login.css">

    <title>LoginAdmin | BOOKSTORE</title>

</head>
<body>

<!--end header-->

<?php

if (Model::getSession('wrong')):?>
    <h1 dir="rtl"><?php echo Model::getSession('wrong'); ?></h1>
<?php endif; ?>
<?php
if (Model::getSession('admin')) {
    Model::landingPage('AdminController/index');
}
?>

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
<!--end body-->
<!--js-->
<!-- custom  js bootstrap cdn link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- custom  jquery cdn link  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>