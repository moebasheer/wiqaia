@extends('dashboard') @section('title', 'الرئيسية') @section('content')

        <!-- Main content --> 
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="padding: 30px;  color: white;  background-color: lightsteelblue;">
                <div class="inner">
                  <h3>{{ count($orders) }}</h3>
                  <p>مجموع طلبات التصريح</p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-first-order"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green"  style="padding: 30px;">
                <div class="inner">
                  <h3>{{ $o4 }}</h3>
                  <p> الطلبات المصدقة</p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-check"></i>
                </div>
               </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red"  style="padding: 30px;">
                <div class="inner">
                  <h3>{{$o3}}</h3>
                  <p> الطلبات المرفوضة</p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-times"></i>
                </div>
               </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box"  style="  color: white;  background-color: darkslateblue; padding: 30px;">
                <div class="inner">
                  <h3>{{ count($customers) }}</h3>
                  <p>مجموع المستخدمين</p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-users"></i>
                </div> 
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange"  style="padding: 30px;">
                <div class="inner">
                  <h3>{{ count($notices) }}</h3>
                  <p> مجموع البلاغات </p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-bell"></i>
                </div>
               </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background-color:#3894d3; color: white; padding: 30px;">
                <div class="inner">
                  <h3>{{ count($doctors) }}</h3>
                  <p> مجموع الكادر الطبي</p>
                </div>
                <div class="icon" style="padding-top: 30px;">
                  <i class="fa fa-user-md"></i>
                </div>
               </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              
            </section>
          </div><!-- /.row (main row) -->
 
 @endsection