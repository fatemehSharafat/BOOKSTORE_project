<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- LodingAdmin font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Logo set-->
    <link rel="shortcut icon" sizes="72x72" href="Public/Images/logobook.png">
    <!--custom index css file link-->
    <link rel="stylesheet" href="Public/Admin/Css/admin.css">

    <title> Admin | BOOKSTORE</title>

</head>
<body>
<!--End Header -->

<!--make cms in the project-->
<section class="container-fluid">
    <?php require 'Views/Admin/menu.php' ?>
    <?php $edit = $data['edit'];
    $slider = $data['slider'];
    ?>
    <?php if (empty($edit)): ?>
<!--=============================== insert sliader page ======================================-->

        <section class="product" dir="rtl">
            <section class="container">
                <form method="post" action="<?php echo URL; ?>SliderController/insertSlider"
                      enctype="multipart/form-data" class="form">
                    <h1>ايجاد اسلايدر </h1>
                    <div class="form-group">
                        <label for="caption">عنوان اسلايدر:</label>
                        <input type="text" name="caption" class="form-control" placeholder="عنوان را وارد كنيد.."
                               id="caption">
                    </div>
                    <div class="form-group">
                        <label for="link">لينك اسلايد:</label>
                        <input type="text" name="link" class="form-control" placeholder="آدرس لينك را وارد كنيد.."
                               id="link">
                    </div>
                    <div class="form-group">
                        <label for="image">بارگذاري تصوير:</label>
                        <input type="file" name="image" id="image"></input>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ايجاد اسلايد</button>
                </form>

            </section>
        </section>

<!--=============================== End insert sliader page ===================================-->

    <?php else: ?>
<!--=============================== Edit sliader page =========================================-->

        <section class="product" dir="rtl">
            <section class="container">
                <form method="post" action="<?php echo URL; ?>SliderController/updateSlider"
                      enctype="multipart/form-data" class="form">
                    <h1> ويرايش اسلايدر </h1>
                    <div class="form-group">
                        <label for="caption">عنوان اسلايدر:</label>
                        <input type="text" name="caption" class="form-control" value="<?php echo $slider['caption']; ?>"
                               id="caption">
                    </div>
                    <div class="form-group">
                        <label for="link">لينك اسلايد:</label>
                        <input type="text" name="link" class="form-control" value="<?php echo $slider['link']; ?>"
                               placeholder="آدرس لينك را وارد كنيد.."
                               id="link">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $slider['id']; ?>"
                               id="id">
                    </div>
                    <div class="form-group">
                        <label for="image">بارگذاري تصوير:</label>
                        <input type="file" name="image" id="image"></input>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ايجاد اسلايد</button>
                </form>

            </section>
        </section>

<!--===============================End Edit sliader page ======================================-->
    <?php endif; ?>
</section>

<!--end make cms in the project-->


<!--end body-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- custom  jquery cdn link  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>