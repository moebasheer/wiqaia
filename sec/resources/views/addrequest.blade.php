<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notokufiarabic.css">

    <title>منصة وقاية</title>
</head>

<body class="rtl" dir="rtl">
    <!-- Mobile Menu Start Here -->
    <div class="mobile-menu">
        <nav class="mobile-header">
            <div class="header-logo">
                <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
            </div>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="mobile-menu">
            <div class="mobile-menu-area">
                <div class="mobile-menu-area-inner">
                    <ul class="lab-ul">
                        <li class="active"><a href="index.php"> الرئيسية <i class="fa fa-home"></i> </a>
                        </li>
                        <li><a href="#">عن المنصة <i class=""></i> </a></li>
                        <li><a href="#0"> خدماتنا </a>

                        </li>
                        <li><a href="#0"> دخول <i class="fa fa-user"></i> </a>

                        </li>
                        <li><a href="service.php">تواصل معنا <i class="fa fa-phone"></i> </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu Ending Here -->


    <!-- desktop menu start here -->
    <header class="header-section">
        <div class="header-area">
            <div class="container">
                <div class="primary-menu">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="main-area">
                        <div class="main-menu">
                            <ul class="lab-ul">
                                <li class="active"><a href="index.php"> الرئيسية <i class="fa fa-home"></i> </a>
                                </li>
                                <li><a href="#">عن المنصة <i class=""></i> </a></li>
                                <li><a href="#0"> خدماتنا <i class="fa fa-sign-in"></i> </a>

                                </li>
                                <li><a href="#0"> دخول <i class="fa fa-user"></i> </a>

                                </li>
                                <li><a href="service.html">تواصل معنا <i class="fa fa-phone"></i> </a></li>
                            </ul>
                        </div>
                        <div class="header-btn">
                            <a href="#" class="lab-btn"><span> تحميل التطبيق <i class="fa fa-download"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop menu ending here -->


    <div class="container">
        <div class="login-box">
            <div class="login-box-body">
                <div class="login-logo text-center">
                    
                </div>
                <br>
                <p class="login-box-msg text-center">طلب تصريح </p>
                <form class="form-horizontal" method="post" action="http://wiqaia.org/wiqaia/public/api/neworder">
                    <input type="hidden" class="form-control" 
                            placeholder="الغرض  "
                            name="user_id"
                            value="33"
                            >
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" 
                            placeholder="الغرض  "
                            name="purpose"
                            >
                            <i class="fa fa-book form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" 
                            placeholder="المسار  "
                            name="track"
                            >
                            <i class="fa fa-truck form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" 
                            placeholder="رقم العربة "
                            name="cnum"
                            >
                            <i class="fa fa-car form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="date" class="form-control" 
                            placeholder="تاريخ البداية"
                            name="sdate"
                            >
                            <i class="fa fa-calendar form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="date" class="form-control" 
                            placeholder="تاريخ النهاية "
                            name="edate" 
                            >
                            <i class="fa fa-calendar form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm">ارسال الطلب <i class="fa fa-send"></i></button>
                        </div>
                    </div>
                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    </div>








    <!-- Blog Section Ending Here -->
    <div class="footer-widgets-wrap clearfix">
        <div id="bh-footer" class="container clearfix">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="#"><img src="assets/images/2.jpg" width="400px"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Start Here -->
    <footer style="background-image: url(assets/css/bg-image/footer-bg.jpg);">
        <div class="footer-bottom">
            <div class="container">
                <div class="section-wrapper">
                    <p>&copy;جميع الحقوق محفوظة 2020 <a href="#">wiqaia</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ending Here -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>