

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading-section mb-5">اسلایدر </h2>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <?php $slider = $data['slider'];
                    foreach ($slider as $item):
                        ?>
                        <div class="item">
                        <div class="work">
<!--                            --><?php // require 'Views/Home/card.php'?>
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(<?php echo URL;?>Views/Admin/Slider/Images/<?php echo $item['image']; ?>);">
                                <div class="text w-100">
                                    <span class="cat"><?php echo $item['caption']; ?></span>
                                    <h3><a href="<?php echo $item['link']; ?>"> <?php echo $item['caption']; ?> </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
					<div class="item">

                 </div>
            </div>
        </div>
    </div>
</section>
