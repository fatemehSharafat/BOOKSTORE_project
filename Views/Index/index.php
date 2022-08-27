<?php require 'Views/Home/menu.php' ?>
<?php require 'Views/Home/index.php' ?>
<?php require 'Views/Home/slider.php' ?>
<?php require 'Views/Home/card.php' ?>
<?php require 'Views/Contact/contact.php' ?>


<section class="footer">
    <div class="container-fluid text-right" dir="rtl">
        <div class="row">
            <div class="col s12 x12 m12 14"></div>
            <div class="col s12 x12 m12 14"></div>

            <!--خبر نامه Newsletters-->
            <div class="col s12 x12 m12 14">
                <div class="main-titles">
                    <h3 class="title "><span class="light"> در يافت خبر نامه</span></h3>
                </div>
                <form method="post" action="<?php echo URL; ?>SubscribeController/insertEmail" id="subscribeEmail">
                    <p>جهت دريافت اخبار جديدترين محصولات سايت همين حالا در خبر نامه ي BOOKSTORE عضو شويد</p>
                    <div class="form-group">
                        <input type="email" name="newsEmail" placeholder="آدرس ایمیل خود را وارد کنید.." maxlength="100"
                               required class="form-control"
                               id="exampleInputEmail1">
                    </div>
                    <button type="submit" class="btn">ثبت نام</button>
                </form>
                <div class="clearfix"></div>

                <!--   end خبر نامه Newsletters-->
            </div>
            <div class="col s12 x12 m12 14"></div>
        </div>

</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
