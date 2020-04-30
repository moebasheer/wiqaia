@extends('dashboard') @section('title', 'تعديل مستخدم') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - ادارة المستخدمين - تعديل مستخدم </div>
  <div class="panel-body">
  <div class="text-center imguser">
      <hr>
  </div>
<form class="form-horizontal" method="POST" action="{{ route('customers.update',[$customer->id]) }}">
        @csrf
        @method('PUT')

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">الاسم </label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" 
      placeholder="ادخل اسم المستخدم "
      name="name"
      value="{{ $customer->name}}">
      
      <div class="regicon">
      <i class="fa fa-user"></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label"> رقم الهاتف</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="inputEmail3"
       placeholder="ادخل البريد الألكتروني"
       name="tel"
       value="{{ $customer->tel}}">
      <div class="regicon">
      <i class="fa fa-user"></i>
      </div>
    </div>
</div>
  <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> المدينة</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
            placeholder="المدينة"
            name="city"
        value="{{ $customer->city}}" >
            <div class="regicon">
            <i class="fa fa-user"></i>
            </div>
        </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">كلمة السر</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3"
       placeholder="ادخل كلمة السر"
       name="pass"
       value="{{ $customer->pass}}" >
      <div class="regicon">
      <i class="fa fa-eye"></i>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-success">تسجيل <i class="fa fa-sign-in"></i></button>
    </div>
  </div>
</form>
         </div>
</div>
@stop