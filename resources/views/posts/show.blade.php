@extends('dashboard') @section('title', 'عرض') @section('content')


        <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - المقالات - عرض مقال  </div>
  <div class="panel-body">
    <div class=" row col-md-9 col-lg-9  col-sm-9 pull">
      
          <h4><label>   عنوان المقال : </label>{{$post->title}} </h4>
          <h4><label>   تفاصيل المقال  :</label>{{$post->body}}</h4>
          
          <!--p><a class="btn btn-lg btn-success" href="#" post="button">Get started today</a></p-->
         </div>
</div>
@stop
