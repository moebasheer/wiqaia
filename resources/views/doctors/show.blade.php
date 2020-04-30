@extends('dashboard') @section('title', 'عرض كادر طبي') @section('content')


        <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - الاطباء - عرض طبيب  </div>
  <div class="panel-body">
    <div class=" row col-md-9 col-lg-9  col-sm-9 pull">
      
          <h4><label>   الاسم رباعي : </label>{{$doctor->name}} </h4>
          <h4><label>    رقم الهاتف  :</label>{{$doctor->tel}}</h4>
          <h4><label>     التخصص :</label>{{$doctor->job}}</h4>
          <h4><label>   المدينة  :</label>{{$doctor->city}} </h4>
          <h4><label>   الموقع الجغرافي :</label>{{$doctor->address}} </h4>
          <!--p><a class="btn btn-lg btn-success" href="#" doctor="button">Get started today</a></p-->
         </div>
</div>
@stop
