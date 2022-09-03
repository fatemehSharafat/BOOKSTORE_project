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
    <link rel="shortcut icon" sizes="300x310" href="Public/assets/logo/logo-green.png">

    <!--custom index css file link-->
    <link rel="stylesheet" href="Public/Admin/Css/admin.css">

    <title> Admin | BOOKSTORE</title>

</head>
<body>
<!--End Header -->

<!--make cms in the project-->
<section class="container-fluid">
    <?php require 'Views/Admin/menu.php' ?>
    <section class="container" dir="rtl">
        <?php
        $slider=$data['slider'];

        ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>عنوان</th>
                <th>لينك اسلايد</th>
                <th>تصوير اسلايد</th>
                <th>ويرايش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($slider as  $item): ?>
                <!--  Modal massage delete -->
            <section class="modal" >
                <section class="modal-massage" >
                    <section class="close " onclick="closeModal()"><span class="fas fa-times"></span></section>
                    <p><span class="fas fa-exclamation-triangle"></span> آيا از حذف اين اسلايد از اسلايدر مطمن هستيد؟ </p>
                    <form method="post" action="<?php echo URL; ?>SliderController/deleteSettingSlider" class=" ">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="path" value="">
                        <button type="button" class="btn btn-lg btn-danger " onclick="closeModal()">انصراف</button>
                        <button type="submit" class="btn btn-lg btn-success " onclick="closeModal()">تاييد </button>
                    </form>
                </section>
            </section>
                <!-- End Modal massage -->
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['caption']; ?></td>
                    <td><?php echo $item['link']; ?></td>
                    <td><img src="<?php echo URL; ?>Views/Admin/Slider/Images/<?php echo $item['image']; ?>" alt="" width="50px" ></td>
                    <!--=============================== update sliader btn ======================================-->
                    <td><a class="btn btn-info " href="<?php echo URL; ?>SliderController/index/<?php echo $item['id']; ?>/edit"><span class="fas fa-edit"></span> ويرايش </a> </td>
                    <!--=============================== update sliader btn ======================================-->
                    <!--=============================== delete sliader btn ======================================-->
                    <td>
                        <button type="submit" class="btn btn-danger" onclick="submitDelete(<?php echo $item['id'];?>,'Views/Admin/Slider/Images/<?php echo $item['image']; ?>')"><span class="fas fa-trash"></span>  حذف</button>

                        <!--======================== first solution for delete sliader - "with just php" ==============================-->

                        <!--   <a class="btn btn-danger " href="--><?php //echo URL; ?><!--/SliderController/deleteSettingSlider/--><?php //echo $item['id']; ?><!--/--><?php //echo $item['image'] ;?><!--"><span class="fas fa-trash"></span> حذف </a>-->

                        <!--===============================end first solution for delete sliader ======================================-->

                        <!--=============================== second solution for delete sliader - "with form + js +php"  ======================================-->

                        <!--                        <form method="post" action="--><?php //echo URL; ?><!--SliderController/deleteSettingSlider" >-->
<!--                            <input type="hidden" name="id" value="--><?php //echo $item['id'];?><!--" />-->
<!--                            <input type="hidden" name="path" value="Views/Admin/Slider/Images/--><?php //echo $item['image']; ?><!--" />-->
<!--                           <button type="submit" class="btn btn-danger" onclick="submitDelete(--><?php //echo $item['id'];?>
<!--                        //)">-->
<!--                        <span class="fas fa-trash"></span>  حذف</button>-->
                        <!-- </form>-->
                        <!--=============================== end second solution for delete sliader======================================-->
                    </td>
                    <!--=============================== end delete sliader btn ======================================-->

                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

    </section>
</section>

<!--end make cms in the project-->


<!--end body-->
<!--js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--SubmitDelete btn-->
<script>
    // function submitDelete(id){
    //     ////first solution
    //     // $('form').submit();
    //
    //     //// second solution
    //     // var form = $('#slider');
    //     //  form.submit();
    // }

    function submitDelete(id,path){
        $('input[name=id]').attr('value',id);
        $('input[name=path]').attr('value',path);
        $('.modal').fadeIn(500);
    }
    function closeModal(){
        $('.modal').fadeOut(500);
    }
</script>

</body>
</html>