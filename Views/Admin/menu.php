<section class="menu">
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark ">
        <button class="navbar-toggler " type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto mr-2  " href="#">BOOKSTORE</a>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto mr-2">
                <!--home Admin bnt-->
                <li class="nav-item dropdown">
                    <a class=" nav-link dropdown-toggle " ref="<?php echo URL ?>AdminController/index"
                       id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        داشبورد مديريت
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo URL ?>AdminController/showSettingAdmin">نمايش جزئيات</a>
<!--                        <a class="dropdown-item" href="#">Another action</a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo URL ?>AdminController/index">
                        <!--                        <i class="fa fa-envelope-o">-->
                        <!--                            <span class="badge badge-danger">11</span>-->
                        <!--                        </i>-->
                        ورود اطلاعات
                    </a>
                </li>
                <!-================== other btn in navbar Admin =====================-->
                <!--                    <li class="nav-item">-->
                <!--                        <a class="nav-link disabled" href="#">-->
                <!--                            <i class="fa fa-envelope-o">-->
                <!--                                <span class="badge badge-warning">11</span>-->
                <!--                            </i>-->
                <!--                            Disabled-->
                <!--                        </a>-->
                <!--                    </li>-->
                <!-================== End other btn in navbar Admin =====================-->
            </ul>

            <ul class="navbar-nav ">
                <!-- nav item-->
                <li class="nav-item dropdown">

                    <a class=" nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user">
                            <span class="badge  badge-info ">11</span>
                        </i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"
                        <p>نام كاربري : <span><?php echo $_SESSION['username']; ?></span></p></a>
                        <a class="dropdown-item" href="#"><p>آدرس ايميل :
                                <span><?php echo $_SESSION['email']; ?></span></p></a>
                        <div class="dropdown-divider "></div>
                        <a href="<?php echo URL ?>LoginAdminController/logOut" class="dropdown-item adiv">خروج</a>
                        <!--                        <div class="adiv">جديد <a href="login.php">ورود</a> | <a href="register.php">ثبت نام </a>-->
                        <!--                        </div>-->
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL?>" target="_blank">
                        نمايش وب سايت
                        <span class="fas fa-chalkboard"></span>

                    </a>
                </li>
            </ul>
        </div>
    </nav>
</section>