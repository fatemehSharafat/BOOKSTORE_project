<!-- ======= Header ======= -->
<?php require 'Views/Index/Header/index.php' ?><!-- End Header -->

<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
        <h2> به <span>BOOKSTORE</span> خوش اومدید! </h2>
        <p>کتابت رو انتخاب کن! درب منزل تحویل بگیر! </p>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto"> شروع خرید </a>
        </div>
    </div>
</section>

<main id="main">

    <!-- ======= Special offer slider Section ======= -->
    <section id="testimonial" class="testimonials">
        <div class="section-header">
            <p> كتاب هاي منتخب اين هفته </p>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count = 0;
                            $product = $data['product'];
                            foreach ($product as $key=>$item): ?>
                              <div class=" col-2 d-flex align-items-end justify-content-center">
                                <article class="card">
                                    <img src="<?php echo URL;?>Views/Admin/Product/Images/<?php echo $item['image'];?>" class="img-fluid">
                                    <div class="card__content">
                                        <h3 class="card__title"><?php echo $item['title']; ?> </h3>
                                        <span class="card_subtitle"><strong><?php echo $item['price']; ?></strong> تومان </span>
                                        <div class=" social">
                                            <a href=""><i class="bi bi-bell-fill"></i></i></a>
                                            <a href="" mr-3 ml-3> <i class="bi bi-cart-plus-fill"></i></a>
                                            <a href=""><i class="bi bi-heart"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php  if($count == 5): ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count=0 ;
                            continue;
                            return $count;
                             endif;

                             $count= $count+1;
                             endforeach; ?>
                        </div>
                    </div><!-- End Special offer slider item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- Special offer slider Section -->

    <!-- ======= new Section ======= -->
    <section id="team" class="team" >
        <div class="container" data-aos="fade-up">
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-out">

                    <div class="row g-5">

                        <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                            <h3>خبر نامه سايت BOOKSTORE</h3>
                            <p>شما با عضويت در بخش خبرنامه ي ما ميتوانيد از مهمترين اخبار و روديداد ها و تخفيف ها موجود
                                در سايت با دريافت ايميل با خبر شويد. جهت عضويت رو خبرنامه‌ي BOOKSTORE روي دكمه زير كليك
                                كنيد. </p>
                            <a class="cta-btn align-self-start" href="<?php echo URL; ?>IndexController/index/#subscribeEmail">عضويت در خبر نامه</a>
                        </div>

                        <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                            <div class="img">
                                <img src="<?php echo URL;?>Public/Images/news.jpg" alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </section><!-- End news Section -->

    <!-- ======= new slider Section ======= -->
    <section id="story2" class="testimonials story">
        <div class="container" data-aos="fade-up">
            <h2>تازه ها</h2>
            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count = 0;
                            $product = $data['product'];
                            foreach ($product as $item): ?>
                            <div class=" col-2 d-flex align-items-end justify-content-center">
                                <article class="card">
                                    <img src="<?php echo URL;?>Views/Admin/Product/Images/<?php echo $item['image'];?>" class="img-fluid">
                                    <div class="card__content">
                                        <h3 class="card__title"><?php echo $item['title']; ?> </h3>
                                        <span class="card_subtitle"><strong><?php echo $item['price']; ?></strong> تومان </span>
                                        <div class=" social">
                                            <a href=""><i class="bi bi-bell-fill"></i></i></a>
                                            <a href="" mr-3 ml-3> <i class="bi bi-cart-plus-fill"></i></a>
                                            <a href=""><i class="bi bi-heart"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php  if($count == 5): ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count=0 ;
                            continue;
                            return $count;
                            endif;

                            $count= $count+1;
                            endforeach; ?>
                        </div>
                    </div><!-- End Special offer slider item -->

                </div>
            </div>
        </div>
    </section><!-- End porfrosh slider Section -->

    <!-- ======= porfrosh slider Section ======= -->
    <section id="story1" class="testimonials story">
        <div class="container" data-aos="fade-up">
            <h2>پرفروش ها</h2>
            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count = 0;
                            $product = $data['product'];
                            foreach ($product as $item): ?>
                            <div class=" col-2 d-flex align-items-end justify-content-center">
                                <article class="card">
                                    <img src="<?php echo URL;?>Views/Admin/Product/Images/<?php echo $item['image'];?>" class="img-fluid">
                                    <div class="card__content">
                                        <h3 class="card__title"><?php echo $item['title']; ?> </h3>
                                        <span class="card_subtitle"><strong><?php echo $item['price']; ?></strong> تومان </span>
                                        <div class=" social">
                                            <a href=""><i class="bi bi-bell-fill"></i></i></a>
                                            <a href="" mr-3 ml-3> <i class="bi bi-cart-plus-fill"></i></a>
                                            <a href=""><i class="bi bi-heart"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php  if($count == 5): ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count=0 ;
                            continue;
                            return $count;
                            endif;

                            $count= $count+1;
                            endforeach; ?>
                        </div>
                    </div><!-- End Special offer slider item -->

                </div>
            </div>
        </div>
    </section><!-- End porfrosh slider Section -->

    <!-- ======= story slider Section ======= -->
    <section id="story" class="testimonials story">
        <div class="container" data-aos="fade-up">
            <h2>داستاني</h2>
            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count = 0;
                            $product = $data['product'];
                            foreach ($product as $item): ?>
                            <div class=" col-2 d-flex align-items-end justify-content-center">
                                <article class="card">
                                    <img src="<?php echo URL;?>Views/Admin/Product/Images/<?php echo $item['image'];?>" class="img-fluid">
                                    <div class="card__content">
                                        <h3 class="card__title"><?php echo $item['title']; ?> </h3>
                                        <span class="card_subtitle"><strong><?php echo $item['price']; ?></strong> تومان </span>
                                        <div class=" social">
                                            <a href=""><i class="bi bi-bell-fill"></i></i></a>
                                            <a href="" mr-3 ml-3> <i class="bi bi-cart-plus-fill"></i></a>
                                            <a href=""><i class="bi bi-heart"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php  if($count == 5): ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count=0 ;
                            continue;
                            return $count;
                            endif;

                            $count= $count+1;
                            endforeach; ?>
                        </div>
                    </div><!-- End Special offer slider item -->

                </div>
            </div>
        </div>
    </section><!-- End porfrosh slider Section -->

    <!-- ======= big Section ======= -->
    <section id="testimonials11" class="testimonials">
        <div class="container" data-aos="fade-up">
            <h2>تازه هاي سايت</h2>
            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count = 0;
                            $slider = $data['slider'];
                            foreach ($slider as $item): ?>
                            <div class=" col-4 d-flex align-items-end justify-content-center">
                                <article class="card">

                                    <img src="<?php echo URL;?>Views/Admin/Slider/Images/<?php echo $item['image']; ?>" class="img-fluid">
                                    <h3 class="card__title"><a href="<?php echo $item['link']; ?>"> <?php echo $item['caption']; ?> </a></h3>

                                </article>
                            </div>
                            <?php  if($count == 2): ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item row gy-5">
                            <?php $count=0 ;
                            continue;
                            return $count;
                            endif;

                            $count= $count+1;
                            endforeach; ?>
                        </div>
                    </div><!-- End bookCart slider item -->



                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End big slider Section -->

    <!-- ======= services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>BOOKSTORE</h2>
                <p>سايت BOOKESTORE سايتي است كه خدمات و سرويس هاي زير را به كاربران خودش به منظور راحتي بيشتر در خريد و
                    تهيه كتاب ارائه مي دهد .</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="<?php echo URL; ?>Public/Images/online-shope.png" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>فروش انلاين كتاب </h3>
                            </a>
                            <p>شما با استفاده از سايت BOOKSTORE ميتوانيد كتاب هاي را بررسي كنيد و كتاب انتخابي خود را
                                تهيه كنيد.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="<?php echo URL; ?>Public/Images/payment.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>پرداخت درب منزل </h3>
                            </a>
                            <p>ما براي ايجاد اعتماد و خريدي آسوده خاطر علاوه بر ويژگي پرداخت بصورت آنلاين امكان پرداخت
                                درب منزل را براي دوستداران كتاب محيا كرديم تا با خيال راحت از خريد خودشون لذت ببرن.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img src="<?php echo URL; ?>Public/Images/search.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-binoculars"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>پذيرش سفارش براي كتاب هاي كم ياب </h3>
                            </a>
                            <p>شما مي توانيد كتاب هايي كه تهيه آنها براي شما سخت و ناممكن هست را به ما بسپاريد تا ما
                                بجاي شما به دنبال آنها بگرديم و براي شما تهيه كنيم.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End news  Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                        <h3><strong>سوالات متداول </strong></h3>
                        <p>
                            توي اين بخش سوالاتي كه معمولا بصورت پرتكرار از ما پرسيده ميشه رو نوشتيم تا اگه سوال شما هم
                            بود جوابش رو از اين قسمت پيدا كنيد.
                        </p>
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    چطور ميتوان با مديريت و بخش شتيباني صحبت كرد؟
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    شما ميتوانيد از طريق بخش " ارتباط با ما " با يخش پشتياني با ما تماس بگيريد و
                                    پشتبانان ما در اولين فرصت به سوالات شما جواب خواهند داد.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    چطور ميتوانيم سفارشات خودمون رو ثبت كنيم؟
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    شما با مراجعه به بخش فروشگاه ميتوانيد محصولات رو مشاهده و انتخاب كنيد و بازدن بر روي
                                    دكمه ي افزودن به سبد خريد كتاب مورد نظرتون رو به سبد خريد اضافه كرده و از قسمت سبد
                                    خريد در نوار بالاي صفحه سفارشات خودتون رو ثبت و تاييد نهايي كنيد.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    براي سفارش كتاب هاي ناياب چطور بايد اقدام كنيم؟
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    شما ميتوانيد از طريق بخش " ارتباط با ما " با موضوع " <strong>سفارش كتاب
                                        ناياب </strong>" و عنوان كتاب و اطلاعات كتاب سفارش خودتون رو به دست تيم BOOKSTORE
                                    برسونيد و آنها پس از دريافت و برسي به در خواست شما پاسخ ميدن و فرايند جستجو و خريد
                                    كتاب شما بعد از تاييد شما آغاز مي شود.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    سفارشات چه زماني به ما تحويل داده ميشه؟
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    شما بعد از افزودن محصول به سبد خريد و تاييد و ثبت نهايي سفارشتون، سفارش ما در ليست
                                    سفارشات ارسالي قرار ميگيره و بعد از بسته بندي آن براي شما ارسال مي شود . زمان انجام
                                    اي فرايند بسته به شهر محل سفارش بين 3 تا 7 روز كاري زمان ميبرد.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    آيا شرايط پرداخت درب منزل هم وجود دارد؟
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    بله شما ميتوانيد هنگام سفارش نوع پرداخت را "<strong>پرداخت درب منزل</strong>" انتخاب
                                    كنيد.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                     style='background-image: url("<?php echo URL; ?>Public/Images/faq.jpg");'
                </div>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="<?php echo URL; ?>Public/assets/logo/bookstore.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-header">
                        <h2>در باره ما </h2>
                    </div>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mt-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">هدف سایت </a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">پيشنيه‌ </a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>سايت BOOKSTORE چيكار ميكنه؟</h4>
                            </div>
                            <p>سايت BOOKSTORE يه منظور ايجاد شرايطي براي علاقه مندان به كتاب و كتاب خواني كه زمان و فرصت
                                خريد حضوري و رفتن به كتاب فروشي هاي موجود رو ندارن ايجاد شده تا بتوانند كتابها ي مورد
                                علاقه خودشون رو به راحتي از هرجايي كه هستن انتخاب و خريداري كنند و كتاب خودشون رو در هر
                                آدرسي كه تمايل داشته باشن تحويل بگيرن.</p>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>سايت BOOKSTORE براي چي ايجاد شد؟ </h4>
                            </div>
                            <p>تيم BOOKSTORE در كنار هم تلاش بر اين دارند تا با ايجاد شرايط براي دوستداران كتاب و مطالعه
                                ايجاد كنند تا بتوانند از كتابهاي مورد علاقه ي خودشون بهره مند بشن . تا بتوانند كمكي بر
                                افزايش راندمان مطالعه اضافه بكنند تا آگاهي مردامان عزيز ايران به نحوي افزوده باشند.</p>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>ويژگي خاص سايت BOOKSTORE نسبت به ديگر سايت ها چيست؟</h4>
                            </div>
                            <p>سايت BOOKSTORE علاوه بر كتاب هاي موجود در فروشگاه سايت اين امكان رو ايجاد ميكند تا با
                                گرفتن اطلاعات كتاب هاي مورد علاقه مشتريان خود كه نميتونيد به راحتي آن را پيدا كنيد را
                                دريافت كرده و بصورت سفارشي براي شما تهيه ميكند. </p>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="d-flex align-items-center mt-5">
                                <p class="fst-italic"> سايت فروش كتاب BOOKSTORE در سال 1400 توسط تيم جوان و پر تلاش
                                    BOOKSTORE كه خود علاقه مند به كتاب و مطالعه بودند به منظور ايجاد شرايط مطالعه براي
                                    همه جهت استفاده از كتاب ها ي مورد علاقه خود پايگذاري شد و تلاش بر اين دارد كار خود
                                    را در اين عرصه گسترش دهد تا زماني كه فعاليت خود را علاوه بر ايران در كشور هاي ديگر و
                                    سراسر جهان انتقال دهد.</p>
                            </div>
                        </div><!-- End Tab 2 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="info">
                <div class="section-header">
                    <h2>ارتباط با ما </h2>
                    <p> درصورت وجود مشكل، سوال، انتقاد پيشنهاد و هرگونه كمك يا نياز ميتوانيد از طريق فرم زير پيغام خود
                        را به را
                        به ما انتقال دهيد و در اولين فرصت ما به آن رسيدگي و به آن پاسخ ميدهيم.</p>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="نام خود را وارد كنيد..." required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="نشاني ايميل خود را وارد كنيد..." required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject"
                               placeholder="موضوع مورد نظر خود را عنوان كنيد.." required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="پيام خود را مطرح كنيد..."
                                  required></textarea>
                    </div>
                    <!-- ======= submit massage ======= -->
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message">خطا<br> مشكلي در ارسال پيام پيش آماده. كمي بعد مجدد ارسال كنيد.</div>
                        <div class="sent-message">پيغام شما با موفقيت ثبت شد. از پيام شما سپاس گزاريم.</div>
                    </div> <!-- end submit massage -->
                    <div class="text-center">
                        <button type="submit"> ارسال پيام</button>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main>

<!-- ======= Footer ======= -->
<?php require 'Views/Index/Footer/index.php' ?><!-- End Footer -->
