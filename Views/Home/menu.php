<!DOCTYPE html>
<html lang="pt-br">
<head>
    <base href="<?php echo URL; ?>">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  CSS -->

    <!--custom  css file link-->
    <link rel="stylesheet" href="Public/Css/menu.css">

    <!--js-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <title></title>
</head>
<body>
<!--end header-->
<nav id="navbar">
    <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <div class="logo">
        <img src="../../Public/assets/logo/logo-green.png" class="logo-img" height="65rem" width=" 65rem"/>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>


<!--js-->
<script>
    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });

    $(document).ready(function() {
    var parent= $("nav").parent().attr('id');
    console.log(parent);
    if (parent == "menuProduct"){
        $('nav').addClass('black');

    }else{
    $(window).on("scroll", function () {

            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }

    });}
    });

</script>
</body>
</html>