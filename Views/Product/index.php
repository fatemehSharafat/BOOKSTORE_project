<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Logo-->
    <link rel="shortcut icon" sizes="300x310" href="Public/assets/bs6.png">
    <!-- font -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!--  CSS -->
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <!--custom  bootstrap css file link-->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--custom  css file link-->
    <link rel="stylesheet" href="Public/Css/Product.css">

    <title>Product | BOOKSTORE</title>
</head>
<body>
<!--end header-->

<!--mune -->
<section id="menuProduct">
    <?php require 'Views/Home/menu.php' ?>
</section>
<!--end mune -->

<!--product page-->
<section class="product" dir="rtl">
    <div class="container-fluid ">
        <div class="container ">
            <div class="row no-gutters">
                <div class="col-md-4 pl-2">
                    <div class="card">
                        <div class="demo">
                            <ul id="lightSlider" class="ul-product">
                                <li class="li-product">
                                    <img src="<?php echo URL; ?>Views/Admin/Slider/Images/man_pish_azto.jpg"
                                         class="img-product"/>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="product-description">
                            <h1>كتاب پس از تو </h1>
                            <!--*************************************** info book **********************************************-->
                            <div class="bullets">
                                <div class="mt-2"><span class="font-weight-bold">مشخصات كتاب</span>
                                    <div class="d-flex align-items-center ">
                                        <span class="dot ml-1 font-weight-bold"></span>
                                        <span class="font-weight-bold">نام كتاب:</span>
                                        <span class="bullet-text mr-1">سلام الاغ عزيز</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="dot ml-1"></span>
                                        <span class="font-weight-bold">نام نويسنده:</span>
                                        <span class="bullet-text mr-1">سلام الاغ عزيز</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="dot ml-1"></span>
                                        <span class="font-weight-bold">موضوع كتاب:</span>
                                        <span class="bullet-text mr-1">سلام الاغ عزيز</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="dot ml-1"></span> نام كتاب
                                        <span class="bullet-text mr-1">سلام الاغ عزيز</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="dot ml-1"></span> نام كتاب :
                                        <span class="bullet-text mr-1">سلام الاغ عزيز</span>
                                    </div>

                                </div>
                            </div>
                            <!--*************************************** end info book *******************************************-->
                            <!--*************************************** description book ***************************************-->
                            <div class="mt-2"><span class="font-weight-bold">خلاصه كتاب</span>
                                <p> اين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاب داستان يك شهر را عنوان ميكنيد.اين
                                    كتاب داستان يك شهر را عنوان ميكنيد.اين كتاب داستان يك شهر را عنوان ميكنيد.اين
                                    كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان
                                    ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر
                                    را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب
                                    داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين
                                    كتاب
                                    داستان يك شهر را عنوان ميكنيد.اين كتاب داستان يك شهر را عنوان ميكنيد. </p>
                            </div>
                            <!--*************************************** end description book ************************************-->

                            <hr>
                            <div class="d-flex flex-row align-items-center" style="font-size: 16px;"><i
                                        class="fa fa-calendar-check-o" class="ml-1"></i> <span class="mr-1">زمان تحويل : تا 1 هفته‌ي كاري</span>
                            </div>
                        </div>
                        <div class="about">
                            <div class="d-flex flex-row">
                                <div class="col s12 x12 m12 4 d-flex align-items-end  price"><span
                                            class="font-weight-bold">3,444</span><span
                                            class="font-weight-bold mr-2">تومان  </span></div>

                                <div class="col s12 x12 m12 14">
                                    <div class="buttons">
                                        <!--                            <button class="btn btn-outline-warning btn-long cart">Add to Cart</button>-->
                                        <button class="btn btn-warning btn-long buy"> اضافه به سبد خريد</button>
                                        <button class="btn btn-light wishlist"><i class="fa fa-heart"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end product page-->

<!--footer-->
<!--end footer-->


<!--end body-->
<!--js-->
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<!-- custom  bootstrap js  link  -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>

<!-- custom  jquery link  -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>

<!--js script-->
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });

</script>
</body>
</html>
