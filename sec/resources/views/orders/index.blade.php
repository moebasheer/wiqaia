@extends('dashboard') @section('title', 'عرض جميع طلبات التصاريح') @section('content')

          <!-- Small boxes (Stat box) -->
          <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - عرض جميع طلبات التصاريح</div>
         <table class="table table-bordered">
  <tr class="text-center act">
      <td>ID# </td>
      <td>رقم المركبة</td>
      <td>الغرض </td>
      <td>مسار الحركة</td>
      <td>تاريخ بداية التصديق</td>
      <td> تاريخ  نهاية التصديق</td>
      <td> حالة الطلب</td>
      <td colspan="2"> العمليات</td>


  </tr>
  @foreach($orders as $order)
   <tr>
      <td>{{ $order->id }}</td>
      <td>{{ $order->cnum }}</td>
      <td>{{ $order->purpose }}</td>
      <td>{{ $order->track }}</td>
      <td>{{ $order->sdate }}</td>
      <td>{{ $order->edate }}</td>
      @if($order->status=='4')
      <td class="text-center"> <button class="btn btn-success btn-sm">   مفعل </button></td>
      @endif
      @if($order->status=='3')   
      <td class="text-center"> <button class="btn btn-danger btn-sm"> غير مفعل </button></td>
      @endif
      @if($order->status=='2' || $order->status=='1') 
      <td class="text-center"> <button class="btn btn-warning btn-sm"> طلب جديد </button></td>
      @endif
      <i class="fas fa-external-link-square-alt    "></i>
      <td class="text-center">
        <a href="{{route('orders.show',[$order->id] )}}"><button  class="btn btn-primary btn-sm">عرض <i class="fa fa-eye"></i></button></a>
        <a href="{{route('orders.edit',[$order->id] )}}"><button class="btn btn-success btn-sm">تعديل <i class="fa fa-edit"></i></button></a>
      </td>
      <td>
        <form method="POST" action="{{ route('orders.destroy',[$order->id]) }}">
             @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('تأكيد الحذف');">حذف <i class="fa fa-trash"></i></button></form>
      </td>
  </tr>
  @endforeach
</table>

                <div class="text-center"> {!! $orders->links(); !!} </div>
              </div>
            </div>
            @stop