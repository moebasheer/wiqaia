<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->

   
    
<link rel="stylesheet"href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://wiqaia.org/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/animate.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/icofont.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/lightcase.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/swiper.min.css">
    <link rel="stylesheet" href="https://wiqaia.org/public/css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    
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
    <header class="header-section">
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
                                <li class="active"><a href="#"> تسجيل خروج<i class="fa fa-home"></i> </a>
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
        <div class="row" style="margin:100px">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="90%">
                        <thead>
                          <tr>
                            <th class="th-sm">أسم عنوان البلاغ
                      
                            </th>
                            <th class="th-sm">نص البلاخ
                      
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                         @foreach(App\Post::all() as $post)
                          <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            
                          </tr>
                          @endforeach
                          
                       </table>
                       <Script>
                           // Basic example
                            $(document).ready(function () {
                            $('#dtBasicExample').DataTable({
                                "paging": false // false to disable pagination (or any other option)
                            });
                            $('.dataTables_length').addClass('bs-select');
                            });
                       
                       </script>


        </div>
    </div>     
                
</div>   
                
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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