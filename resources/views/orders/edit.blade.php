@extends('dashboard') @section('title', 'تعديل بيانات تصريح') @section('content')
 
                <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - ادارة طلبات التصريح -  تعديل بيانات   تصريح </div>
  <div class="panel-body"> 
<form class="form-horizontal" method="POST" action="{{ route('orders.update',[$order->id]) }}">
    @csrf
    <input type="hidden" name="user_id" value="1">

    @method('PUT')
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">رقم المركبة</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3" 
          placeholder="ادخل ررقم المركبة  "
          name="cnum"
          value="{{ $order->cnum}}">
          <div class="regicon">
          <i class="fa fa-car"></i>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> الوظيفة</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="الوظيفة  "
           name="job"
           value="{{ $order->job}}">
          <div class="regicon">
          <i class="fa fa-align-justify"></i>
          </div>
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> مكان العمل</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="مكان العمل  "
           name="jadd"
           value="{{ $order->jadd}}">
          <div class="regicon">
          <i class="fa fa-map-marker"></i>
          </div>
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> البطاقة</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="البطاقة"
           name="card"
           value="{{ $order->card}}">
          <div class="regicon">
          <i class="fa fa-address-card "></i>
          </div>
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label"> عدد المرافقين</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder=" عدد المرافقين"
           name="conum"
           value="{{ $order->conum}}">
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
           value="{{ $order->purpose}}">
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
        value="{{ $order->track}}" >
            <div class="regicon">
            <i class="fa fa-map"></i>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">  حالة الطلب  </label>
        <div class="col-sm-8">
        <select class="form-control" id="customer-order" name="status">
    
         
          @if($order->status=='1')
          <option value='1' >تم استلام الطلب</option>
          @endif
          @if($order->status=='2')
          <option value='2' >الطلب قيد الاجراء</option>
          @endif
          @if($order->status=='3')
          <option value='3' >تم الغاء الطلب</option>
          @endif
          @if($order->status=='4')
          <option value='4' >تم تنفيذ الطلب</option>
          @endif
          <option value='1' >تم استلام الطلب</option>
          <option value='2' >الطلب قيد الاجراء</option>
          <option value='3' >تم الغاء الطلب</option>
          <option value='4' > تم تنفيذ الطلب </option>
          <option value='5' ></option>
    
        </select>
    </div> 
    </div>  
    
      <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label"> تاريخ البداية</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" 
                placeholder="ادخل تاريخ البداية"
                name="sdate"
            value="{{ $order->sdate}}" >
                <div class="regicon">
                <i class="fa fa-calendar"></i>
                </div>
            </div>
      </div>
    
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">تاريخ النهاية </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3"
           placeholder="ادخل تاريخ النهاية "
           name="edate"
           value="{{ $order->edate}}" >
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