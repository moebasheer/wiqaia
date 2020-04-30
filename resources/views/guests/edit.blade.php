<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->

    <link rel="stylesheet" href="https://wiqaia.org/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/animate.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/icofont.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/lightcase.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/swiper.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

    <script>
			var msg = '{{Session::get('alert')}}';
			var exist = '{{Session::has('alert')}}';
			if(exist){
				alert('تم التسحيل بنجاح ');

				
			}
		  </script>
    <title>منصة وقاية</title>
</head>

<body class="rtl" dir="rtl">
    <!-- Mobile Menu Start Here -->
    <div class="mobile-menu">
        <nav class="mobile-header">
            <div class="header-logo">
                <a href="{{url('/')}}"><img src="https://wiqaia.org/public/images/logo.png" alt="logo"></a>
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
                    <li class="active"><a href="{{url('/')}}"> الرئيسية <i class="fa fa-home"></i> </a>
                        </li>
                        <li><a href="#">عن المنصة <i class=""></i> </a></li>
                        <li><a href="#0"> خدماتنا </a>

                        </li>
                        <li><a href="{{ url('ulogin') }}"> دخول <i class="fa fa-user"></i> </a>

                        </li>
                        <li><a href="#">تواصل معنا <i class="fa fa-phone"></i> </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu Ending Here -->


    <!-- desktop menu start here -->
    <<header class="header-section">
            <div class="header-area">
                <div class="container">
                    <div class="primary-menu">
                        <div class="logo">
                            <a href="#"><img src="https://wiqaia.org/public/images/logo.png" alt="logo"></a>
                        </div>
    
                        <div class="main-area">
                                <div class="header-btn">
                                        <a href="#" class="lab-btn"><span> مرحبا بك  :{{$customer->name}} <i class="fa fa-download"></i></span></a>
                                    </div>
                            <div class="main-menu">
                                <ul class="lab-ul">
                                    <li class="active"><a href="#">  الرئيسية -التصاريح<i class="fa fa-home"></i> </a>
                                    </li>
                                    
                                    
                                </ul>
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
                    <form class="form-horizontal" action="{{ route('req-order') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                إستخراج  تصريح للمستخدم : 
                            {{$customer->name}}
                            </div>
                            <input type="hidden" class="form-control" 
                                    placeholder="المستخدم  "
                                    name="user_id"
                                    value="{{$customer->id}}"
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
                    <a href="#"><img src="https://wiqaia.org/public/images/2.jpg" width="400px"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Start Here -->
    <footer style="background-image: url(https://wiqaia.org/public/css/bg-image/footer-bg.jpg);">
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


    <script src="https://wiqaia.org/public/js/jquery.js"></script>
    <script src="https://wiqaia.org/public/js/waypoints.min.js"></script>
    <script src="https://wiqaia.org/public/js/bootstrap.min.js"></script>
    <script src="https://wiqaia.org/public/js/lightcase.js"></script>
    <script src="https://wiqaia.org/public/js/isotope.pkgd.min.js"></script>
    <script src="https://wiqaia.org/public/js/swiper.min.js"></script>
    <script src="https://wiqaia.org/public/js/jquery.countdown.min.js"></script>
    <script src="https://wiqaia.org/public/js/functions.js"></script>
</body>

</html>