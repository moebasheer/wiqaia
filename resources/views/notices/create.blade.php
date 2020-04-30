@extends('dashboard') @section('title', 'تسجيل بلاغ') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading"> منصة وقاية - الاطباء  -تسجيل  بلاغ  </div>
  <div class="panel-body">
  <div class="text-center imguser">
      <img src="dist/img/images.jpg">
      <hr>
  </div>
<form class="form-horizontal" action="{{ route('notices.store') }}" method="POST" >
    @csrf
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">الاسم </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3" 
          placeholder="ادخل اسم   "
          name="name"
          />
          <div class="regicon">
          <i class="fa fa-user"></i>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> رقم الهاتف</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="inputEmail3"
           placeholder="ادخل رقم الهاتف "
           name="tel"
           >
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
                />
                <div class="regicon">
                <i class="fa fa-user"></i>
                </div>
            </div>
      </div>
    
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">الموقع الجغرافي</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="ادخل   الموقع الجغرافي"
           name="address"
           />
          <div class="regicon">
          <i class="fa fa-eye"></i>
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> نص البلاغ  </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="  نص البلاغ "
           name="body"
           />
          <div class="regicon">
          <i class="fa fa-eye"></i>
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