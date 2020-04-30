@extends('dashboard') @section('title', 'عرض تفاصيل طلب التصريح') @section('content')

        <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - الطلبات -   نفاصيل الطلب  </div>
  <div class="panel-body">
    <div class=" row col-md-9 col-lg-9  col-sm-9 pull">
      
          <h4><label>     الاسم : </label>
          <?php $id = $order->user_id;  echo $name = \App\Customer::findOrFail($id)->name; ?>
          <h4>
          <h4><label>   رقم المركبة : </label>{{$order->cnum}} </h4>
          <h4><label>     الوظيفة  : </label>{{$order->job}} </h4>
          <h4><label>     مكان العمل  : </label>{{$order->jadd}} </h4>
          <h4><label>    البطاقة   : </label>{{$order->card}} </h4>
          <h4><label>    عدد المرافقين   : </label>{{$order->conum}} </h4>
          <h4><label>    الغرض  :</label>{{$order->purpose}}</h4>
          <h4><label>     المسار :</label>{{$order->track}}</h4>
          <h4><label>    تاريخ البداية :</label>{{$order->sdate}} </h4>
          <h4><label>   تاريخ النهاية  :</label>{{$order->edate}} </h4>
            
      @if($order->status=='1')
          <h4><label>   حالة الطلب  :</label>تم استلام الطلب</h4>
         
      @endif
      @if($order->status=='2')
            <h4><label>   حالة الطلب  :</label> الطلب قيد الاجراء</h4>
            
      @endif
      @if($order->status=='3')
            <h4><label>   حالة الطلب  :</label>  تم الغاء الطلب </h4>
      @endif
      @if($order->status=='4')
            <h4><label>   حالة الطلب  :</label>  تم تنفيذ الطلب </h4>
            <h4><label>  رمز QrCode  :</label> </h4>
             <img src="{{$order->barcode}}" width="200" height="200">

      @endif
      @if($order->status=='1')
      <p>
      <form  method="POST" action="{{ route('orders.update',[$order->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="cnum" value="{{$order->cnum}}" />
            <input type="hidden" name="job" value="{{$order->job}}" />
            <input type="hidden" name="jadd" value="{{$order->jadd}}" />
            <input type="hidden" name="card" value="{{$order->card}}" />
            <input type="hidden" name="conum" value="{{$order->conum}}" />
            <input type="hidden" name="purpose" value="{{$order->purpose}}" />
            <input type="hidden" name="track" value="{{$order->track}}" />
            <input type="hidden" name="sdate" value="{{$order->sdate}} " />
            <input type="hidden" name="edate" value="{{$order->edate}}" />
            <input type="hidden" name="status" value="4" />
       <button  type="submit" class="btn btn-info btn-lg">تفعيل </button>
      </form>
      </p>
      <p>
      <form  method="POST" action="{{ route('orders.update',[$order->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="cnum" value="{{$order->cnum}}" />
            <input type="hidden" name="job" value="{{$order->job}}" />
            <input type="hidden" name="jadd" value="{{$order->jadd}}" />
            <input type="hidden" name="card" value="{{$order->card}}" />
            <input type="hidden" name="conum" value="{{$order->conum}}" />
            <input type="hidden" name="purpose" value="{{$order->purpose}}" />
            <input type="hidden" name="track" value="{{$order->track}}" />
            <input type="hidden" name="sdate" value="{{$order->sdate}} " />
            <input type="hidden" name="edate" value="{{$order->edate}}" />
            <input type="hidden" name="status" value="3" />
      <button  type="submit "class="btn btn-danger btn-lg"> الـغــاء</button>
      </form>
      </p>
      @endif
          
          <!--p><a class="btn btn-lg btn-success" href="#" order="button">Get started today</a></p-->
         </div>
</div>
@stop
