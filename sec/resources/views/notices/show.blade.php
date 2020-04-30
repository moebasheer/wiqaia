@extends('dashboard') @section('title', 'عرض بلاغ') @section('content')


        <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - البلاغات - عرض بلاغ  </div>
  <div class="panel-body">
    <div class=" row col-md-9 col-lg-9  col-sm-9 pull">
      
          <h4><label>   الاسم  : </label>{{$notice->name}} </h4>
          <h4><label>    رقم الهاتف  :</label>{{$notice->tel}}</h4> 
          <h4><label>   المدينة  :</label>{{$notice->city}} </h4>
          <h4><label>   الموقع الجغرافي :</label>{{$notice->address}} </h4>
          <h4><label>      نص البلاغ :</label>{{$notice->body}} </h4>
          <!--p><a class="btn btn-lg btn-success" href="#" notice="button">Get started today</a></p-->
         </div>
</div>
@stop
