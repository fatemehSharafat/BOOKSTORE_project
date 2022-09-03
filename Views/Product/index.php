<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Product | BOOKSTORE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Public/assets/logo/logo-white.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Public/assets/vender/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files -->
    <link href="Public/Css/variables.css" rel="stylesheet">


    <!--  Main CSS File -->
    <link href="Public/Css/main.css" rel="stylesheet">


    <!-- Toastr CSS  -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


</head>

<body>

<!-- ======= Header ======= -->
<section id="menuProduct">
    <?php require 'Views/Index/Header/index.php' ?><!-- End Header -->
</section>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="<?php echo URL; ?>IndexController/index">صفحه اصلي</a></li>
                    <li>جزئيات محصول</li>
                </ol>
                <h2>جزئيات محصول</h2>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <img class=" img-fluid img-responsive"
                         src="<?php echo URL; ?>Views/Admin/Slider/Images/dastan_do_shahr.jpg" alt="">

                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info">
                        <h1>نام كتاب </h1>
                        <div class="row">
                            <div class="col-lg-9 ">
                                <h3>مشخصات كتاب</h3>
                                <ul>
                                    <li><strong>نام كتاب :</strong>داستان دو شهر</li>
                                    <li><strong> نام نويسنده :</strong>چارلز ديكنز</li>
                                    <li><strong>موضوع كتاب :</strong>داستاني</li>
                                    <li><strong>زبان كتاب :</strong>ترجمه فارسي</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 d-grid price" >
                                <h2 class="font-weight-bold"> تومان <strong>35,600</strong></h2>
                                <button class="btn btn-danger btn-block buy "><i class="bi bi-cart3"></i> اضافه به سبد خريد</button>
                            </div>
                        </div>
                        </div>
                        <div class="portfolio-description">
                            <h2>خلاصه كتاب</h2>
                            <p>
                                كتاب داستان يك شهر را عنوان ميكنيد.اين كتاب داستان يك شهر را عنوان ميكنيد.اين
                                كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان
                                ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر
                                را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب
                                داستان يك شهر را عنوان ميكنيد.اين كتاباين كتاب داستان يك شهر را عنوان ميكنيد.اين </p>
                        </div>
                    </div>

                </div>

            </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php require 'Views/Index/Footer/index.php' ?><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!--<div id="preloader"></div>-->

<!--=========== js ========== -->
<!--  jquery cdn link  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Vendor JS Files -->
<script src="Public/assets/vender/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Public/assets/vendor/aos/aos.js"></script>
<script src="Public/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="Public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="Public/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="Public/assets/vendor/php-email-form/validate.js"></script>
<!-- Main JS File -->
<script src="Public/js/main.js"></script>

<!-- Toastr  JS cnd -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>


<!--                                    داستان يك شهر را عنوان ميكنيد.اين كتاب داستان يك شهر را عنوان ميكنيد. </p>-->
<!--                            </div>-->
<!--                            <!--*************************************** end description book ************************************-->-->
<!---->
<!--                            <hr>-->
<!--                            <div class="d-flex flex-row align-items-center" style="font-size: 16px;"><i-->
<!--                                        class="fa fa-calendar-check-o" class="ml-1"></i> <span class="mr-1">زمان تحويل : تا 1 هفته‌ي كاري</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="about">-->
<!--                            <div class="d-flex flex-row">-->
<!--                                <div class="col s12 x12 m12 4 d-flex align-items-end  price"><span-->
<!--                                            class="font-weight-bold">3,444</span><span-->
<!--                                            class="font-weight-bold mr-2">تومان  </span></div>-->
<!---->
<!--                                <div class="col s12 x12 m12 14">-->
<!--                                    <div class="buttons">-->
<!--                                        <!--                            <button class="btn btn-outline-warning btn-long cart">Add to Cart</button>-->-->
<!--                                        <button class="btn btn-warning btn-long buy"> اضافه به سبد خريد</button>-->
<!--                                        <button class="btn btn-light wishlist"><i class="fa fa-heart"></i></button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->
<!--<!-- end product page-->-->
<!---->
<!--<!--footer-->-->
<!--<!--end footer-->-->
<!---->
<!---->
<!--<!--end body-->-->
<!---->
<!--<!--=========== js ========== -->-->
<!--<!--  jquery cdn link  -->-->
<!--<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->-->
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<!---->
<!--<!-- Vendor JS Files -->-->
<!--<script src="Public/assets/vender/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!--<script src="Public/assets/vendor/aos/aos.js"></script>-->
<!--<script src="Public/assets/vendor/glightbox/js/glightbox.min.js"></script>-->
<!--<script src="Public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->
<!--<script src="Public/assets/vendor/swiper/swiper-bundle.min.js"></script>-->
<!--<script src="Public/assets/vendor/php-email-form/validate.js"></script>-->
<!---->
<!--<!-- Main JS File -->-->
<!--<script src="Public/js/main.js"></script>-->
<!---->
<!--<!-- Toastr  JS cnd -->-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>-->
<!---->
<!---->
<!--<!--js-->-->
<!--<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>-->
<!--<!-- custom  bootstrap js  link  -->-->
<!--<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>-->
<!---->
<!--<!-- custom  jquery link  -->-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>-->
<!---->
<!--<!--js script-->-->
<!--<script>-->
<!--    $('#lightSlider').lightSlider({-->
<!--        gallery: true,-->
<!--        item: 1,-->
<!--        loop: true,-->
<!--        slideMargin: 0,-->
<!--        thumbItem: 9-->
<!--    });-->
<!---->
<!--</script>-->
<!--</body>-->
<!--</html>-->
