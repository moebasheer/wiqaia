@extends('dashboard') @section('title', 'عرض مستخدم') @section('content')


        <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - ادارة المستخدمين  - عرض مستخدم  </div>
  <div class="panel-body">
    <div class=" row col-md-9 col-lg-9  col-sm-9 pull">
      
          <h4><label>    الاسم : </label>{{$customer->name}} </h4>
          <h4><label>    رقم الهاتف  :</label>{{$customer->tel}}</h4>
          <h4><label>     المدينة :</label>{{$customer->city}}</h4>
          <h4><label>   كلم المرور  :</label>{{$customer->pass}} </h4>
          <!--p><a class="btn btn-lg btn-success" href="#" customer="button">Get started today</a></p-->
         </div>
</div>
@stop