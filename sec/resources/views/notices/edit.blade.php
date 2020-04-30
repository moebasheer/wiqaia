@extends('dashboard') @section('title', 'تعديل بلاغ') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - البلاغات  - تعديل بلاغ  </div>
  <div class="panel-body">
  <div class="text-center imguser">
      <hr>
  </div>
<form class="form-horizontal" method="POST" action="{{ route('notices.update',[$notice->id]) }}">
    @csrf
    @method('PUT')
<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">الاسم </label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" 
      placeholder="ادخل اسم   "
      name="name"
      value="{{ $notice->name}}">
      <div class="regicon">
      <i class="fa fa-user"></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label"> رقم الهاتف</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3"
       placeholder="ادخل رقم الهاتف"
       name="tel"
       value="{{ $notice->tel}}">
      <div class="regicon">
      <i class="fa fa-user"></i>
      </div>
    </div>
</div> 
  <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> المدينة</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
            placeholder="ادخل المدينة"
            name="city"
        value="{{ $notice->city}}" >
            <div class="regicon">
            <i class="fa fa-user"></i>
            </div>
        </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">الموقع الجغرافي</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3"
       placeholder="ادخل العنوان الجغرافي"
       name="address"
       value="{{ $notice->address}}" >
      <div class="regicon">
      <i class="fa fa-eye"></i>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label"> نص البلاغ  </label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3"
       placeholder=" نص البلاغ "
       name="body"
       value="{{ $notice->body}}" >
      <div class="regicon">
      <i class="fa fa-eye"></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-success">حفظ <i class="fa fa-sign-in"></i></button>
    </div>
  </div>
</form>
         </div>
</div>
@stop