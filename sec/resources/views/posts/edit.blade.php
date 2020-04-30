@extends('dashboard') @section('title', 'تعديل') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - ادارة المقالات - تعديل مقال  </div>
  <div class="panel-body">
  <div class="text-center imguser">
      <hr>
  </div>
<form class="form-horizontal" method="POST" action="{{ route('posts.update',[$post->id]) }}" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> عنوان المقال </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3" 
          placeholder="ادخل اسم عنوان المقال"
          value="{{ $post->title}}"
          name="title"
          />
          <div class="regicon">
          <i class="fa fa-user"></i>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> نص المقال</label>
        <div class="col-sm-8">
          <textarea rows="5"  cols="10" class="form-control" id="inputEmail3"
           placeholder="ادخل نص المقال "
           name="body">{{ $post->body}}</textarea>
          <div class="regicon">
          <i class="fa fa-user"></i>
          </div>
        </div>
    </div>
    
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <input type="submit" class="btn btn-success" value=" تسجيل" /> 
    </div>
  </div>
</form>
         </div>
</div>
@stop