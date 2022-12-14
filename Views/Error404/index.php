<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--=======================Logo set===========================-->
    <link rel="shortcut icon" sizes="300x310" href="Public/assets/logo/logo-green.png">

    <!--custom CSS bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--custom err0r404 css file link-->
    <link rel="stylesheet" href="Public/Css/error404.css" >
    <title>404 page</title>
</head>
<body>
<!--end header error404 page-->

<!--body error404 page-->
<nav class="shelf">
    <a class="book home-page" href="<?php echo URL; ?>IndexController/index/#hero-fullscreen">صفحه اصلي</a>
    <a class="book about-us" href="<?php echo URL; ?>IndexController/index/#about">درباره ما</a>
    <a class="book contact" href="<?php echo URL; ?>IndexController/index/#faq">سوالات متداول</a>
    <a class="book faq" href="<?php echo URL; ?>IndexController/index/#subscribeEmail">عضويت در خبرنامه</a>

    <span class="book not-found"></span>

    <span class="door left"></span>
    <span class="door right"></span>
</nav>
<h1>Error 404</h1>
<p>The page you're loking for can't be found</p>
<!-- end body error404 page-->
<!--  footer error404 page-->
<!--js-->
<!-- custom  js bootstrap cdn link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- custom  jquery cdn link  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>