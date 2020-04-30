<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>لوحة التحكم  | @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck --> 
    <link rel="stylesheet" href="{{asset('/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{asset('/dist/fonts/fonts-fa.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/style.css')}}">
    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
 
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            
          </div>
        </nav>
      </header>
     
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
       
        <section class="sidebar">
          <!-- Sidebar user panel -->
                <div class="user-panel"> 
                    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif                   
                    @guest
                              
                       @else
                    <div class="pull-right info">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <p > <?php if (Auth::user()->uname ) { } ?> </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> متصل </a> </div>  
                </div>
                        @endguest
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">      
                    <li><a href="{{ url('admin/') }}"><i class="fa fa-home"></i> <span>الرئيسية</span></a></li> 
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-users"></i> <span>ادارة المستخدمين</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/customers/create') }}"><i class="fa fa-circle-o"></i> اضافة مستخدم</a></li>
                <li><a href="{{ url('admin/customers') }}"><i class="fa fa-circle-o"></i>عرض المستخدمين  </a></li>
              </ul>
            </li>  
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-first-order"></i> <span>الطلبات</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/orders/create') }}"><i class="fa fa-circle-o"></i> طلب جديد</a></li>
                <li><a href="{{ url('admin/orders') }}"><i class="fa fa-circle-o"></i> عرض جميع الطلبات</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-file-text-o"></i> <span>المقالات</span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/posts/create') }}"><i class="fa fa-circle-o"></i> اضافة مقال</a></li>
                <li><a href="{{ url('admin/posts') }}"><i class="fa fa-circle-o"></i> عرض جميع المقالات</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-user-md"></i> <span>الكادر الطبي</span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/doctors/create') }}"><i class="fa fa-circle-o"></i> تسجيل</a></li>
                <li><a href="{{ url('admin/doctors') }}"><i class="fa fa-circle-o"></i> عرض جميع الكوادر الطبية</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-bell"></i> <span> البلاغات  </span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/notices/create') }}"><i class="fa fa-circle-o"></i> بلاغ جديد</a></li>
                <li><a href="{{ url('admin/notices') }}"><i class="fa fa-circle-o"></i> عرض جميع البلاغات</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ url('admin/#') }}">
                <i class="fa fa-bar-chart"></i> <span>التقارير</span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>
            </li>
             <li class="treeview">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-user-times"></i> <span>تسجيل الخروج</span>
              </a>
            </li>
            </ul> 
            </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="dash">
                                     نظام لوحة التحكم المبادرة الالكترونية السودانية للوقاية من فايروس كورونا
          </h1> 
        </section>

        <!-- Main content -->
        <section class="content">
         @yield('content')    
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-left hidden-xs">
            <b>Version</b>
        </div>
        <strong>Copyright &copy; 2020-2021 <a href="#"></a></strong> 
      </footer>
 
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->    

     @yield('script')

    <script src="{{asset('/dist/js/demo.js')}}"></script>
  </body>
</html>
