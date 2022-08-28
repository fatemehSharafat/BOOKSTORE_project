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
    <!--=======================Logo set===========================-->
    <link rel="shortcut icon" sizes="300x310" href="Public/assets/bookstore01.png">
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
    $product = $data['product'];
    ?>
    <?php if (empty($edit)): ?>
        <!--=============================== insert Product page ======================================-->

        <section class="product" dir="rtl">
            <section class="container">
                <form method="post" action="<?php echo URL; ?>ProductController/insertProduct"
                      enctype="multipart/form-data" class="form">
                    <h1>ايجاد محصول جدید </h1>
                    <div class="form-group">
                        <label for="title">نام محصول:</label>
                        <input type="text" name="title" class="form-control" placeholder="عنوان را وارد كنيد.."
                               id="title">
                    </div>
                    <div class="form-group">
                        <label for="author">نام نویسنده:</label>
                        <input type="text" name="author" class="form-control" placeholder="نام نویسنده را وارد كنيد.."
                               id="author">
                    </div>
                    <div class="form-group">
                        <label for="category_type">نوع دسته:</label>
                        <select name="category_type" class="form-group form-control" id="category_type">
                            <option value="story">داستانی</option>
                            <option value="psychology">روانشناسی</option>
                            <option value="teenager">نوجوان</option>
                            <option value="english">انگلیسی</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="summary">خلاصه کتاب:</label>
                        <textarea type="text" name="summary" class="form-control"
                                  placeholder="خلاصه کتاب  را وارد كنيد.." id="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">قیمت محصول :</label>
                        <input type="text" name="price" class="form-control" placeholder=" قیمت محصول را وارد كنيد.."
                               id="price">
                    </div>
                    <div class="form-group">
                        <label for="image">بارگذاري تصوير:</label>
                        <input type="file" name="image" id="image"></input>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ایجاد محصول </button>
                </form>

            </section>
        </section>

        <!--=============================== End insert Product page ===================================-->

    <?php else: ?>
        <!--=============================== Edit Product page =========================================-->

        <section class="product" dir="rtl">
            <section class="container">
                <form method="post" action="<?php echo URL; ?>ProductController/updateProduct"
                      enctype="multipart/form-data" class="form" id="product">
                    <h1> ویرایش محصول   </h1>
                    <div class="form-group">
                        <label for="title">نام محصول :</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $product['title']; ?>"
                               id="title">
                    </div>
                    <div class="form-group">
                        <label for="author">نام نویسنده :</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $product['author']; ?>"
                               id="author">
                    </div>
                    <div class="form-group">
                        <label for="category_type">نوع دسته:</label>
                        <select name="category_type" class="form-group form-control" id="category_type">
                            <option value="<?php echo $product['category_type']; ?>"><?php echo $product['category_type']; ?></option>
                            <option value="داستانی">داستانی</option>
                            <option value="روانشناسی">روانشناسی</option>
                            <option value="نوجوان">نوجوان</option>
                            <option value="انگلیسی">انگلیسی</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="summary">خلاصه کتاب:</label>
                        <textarea type="text" name="summary" class="form-control"
                                  value="<?php echo $product['author']; ?>" placeholder="خلاصه کتاب  را وارد كنيد.." id="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">قیمت محصول :</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $product['price']; ?>"
                               id="price">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $product['id']; ?>"
                               id="id">
                    </div>
                    <div class="form-group">
                        <label for="image" >:بارگذاري تصوير:</label>
                        <input type="file" name="image" id="image"></input>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">بروزرساني محصول </button>
                </form>


            </section>
        </section>

        <!--===============================End Edit product page ======================================-->
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