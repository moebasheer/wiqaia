@extends('dashboard') @section('title', 'تسجيل طلب تصريح جديد') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - ادارة الطلبات - تسجيل طلب جديد </div>
  <div class="panel-body">
  <div class="text-center imguser">
      <hr>
  </div>
<form class="form-horizontal" action="{{ route('orders.store') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="1">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">رقم المركبة</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
          placeholder="ادخل رقم المركبة  "
          name="cnum"
          >
          <div class="regicon">
          <i class="fa fa-car"></i>
          </div>
        </div>
      </div>
      
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> الوظيفة  </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="inputEmail3" 
          placeholder="الوظيفة"
          name="job"
          >
          <div class="regicon">
          <i class="fa fa-align-justify"></i>
          </div>
        </div>
      </div>
      
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> مكان العمل  </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
          placeholder="مكان العمل"
          name="jadd"
          >
          <div class="regicon">
          <i class="fa fa-map-marker"></i>
          </div>
        </div>
      </div>
      
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">البطاقة  </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
          placeholder="البطاقة"
          name="card"
          >
          <div class="regicon">
          <i class="fa fa-address-card "></i>
          </div>
        </div>
      </div>
      
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">عدد المرافقين  </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
          placeholder="عدد المرافقين "
          name="conum"
          >
          <div class="regicon">
          <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> الغرض</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="ادخل الغرض"
           name="purpose"
           >
          <div class="regicon">
          <i class="fa fa-question"></i>
          </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> مسار الحركة</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" 
            placeholder="ادخل مسار الحركة"
            name="track"
           >
            <div class="regicon">
            <i class="fa fa-map"></i>
            </div>
        </div>
    </div> 
    
      <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label"> تاريخ البداية</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="inputEmail3" 
                placeholder="ادخل تاريخ البداية"
                name="sdate"
            >
                <div class="regicon">
                <i class="fa fa-calendar"></i>
                </div>
            </div>
      </div>
    
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">تاريخ النهاية </label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="inputEmail3"
           placeholder="ادخل تاريخ النهاية "
           name="edate"
            >
          <div class="regicon">
          <i class="fa fa-calendar"></i>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <input  type="submit" class="btn btn-success" value="تسجيل" />
        </div>
      </div>
</form>
         </div>
</div>
@stop