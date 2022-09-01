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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- LodingAdmin font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Logo set-->
    <link rel="shortcut icon" sizes="300x310" href="../../../Public/assets/logo/logo-green.png">
    <!--custom index css file link-->
    <link rel="stylesheet" href="Public/Admin/Css/admin.css">

    <title> Admin | BOOKSTORE</title>

</head>
<body>
<!--End Header -->

<!--make cms in the project-->
<section class="container-fluid">
 <?php  require 'Views/Admin/menu.php'?>
    <section class="product" dir="rtl">
        <section class="container">
            <form action="<?php echo URL; ?>AdminController/insertSettingAdmin" method="post" class="form">
                <h1>بروز رساني اطلاعات وب سايت </h1>
                <div class="form-group">
                    <label for="title">عنوان صفحه:</label>
                    <input type="text" name="title" class="form-control" placeholder="عنوان را وارد كنيد.." id="title">
                </div>
                <div class="form-group">
                    <label for="author">نويسنده:</label>
                    <input type="text" name="author" class="form-control" placeholder="نام نويسنده را وارد كنيد.."
                           id="author">
                </div>
                <div class="form-group">
                    <label for="description">توضيحات سئو :</label>
                    <textarea type="text" name="description" class="form-control"
                              placeholder="توضيحات را وارد كنيد.."
                              id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="keywords">كليد واژه ها:</label>
                    <textarea type="text" name="keywords" class="form-control"
                              placeholder="كليد واژه هاي مرتبط را وارد كنيد.." id="keywords"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block"> اعمال بروز رساني </button>
            </form>

        </section>
    </section>
</section>

<!--end make cms in the project-->

<!--make form in the Admin page-->

<!--end make form in the Admin page-->

<!--end body-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>