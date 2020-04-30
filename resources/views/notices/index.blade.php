@extends('dashboard') @section('title', 'عرض جميع البلاغات ') @section('content')

          <!-- Small boxes (Stat box) -->
          <div class="panel panel-default">
  <div class="panel-heading"> منصة وقاية - عرض جميع البلاغات</div>
  <div class="panel-body">
         <table class="table table-bordered">
  <tr class="text-center act">
      <td>ID# </td>
      <td>الاسم رباعي</td>
      <td>رقم التلفون</td> 
      <td>المدينة</td> 
      <td colspan="2">العمليات</td>
  </tr>
  @foreach($notices as $notice)
   <tr>
      <td>{{ $notice->id }}</td>
      <td>{{ $notice->name }}</td>
      <td>{{ $notice->tel }}</td> 
      <td>{{ $notice->city }}</td> 
      <td class="text-center">
        <a href="{{ route('notices.show',[$notice->id]) }}"><button  class="btn btn-primary btn-sm">عرض <i class="fa fa-eye"></i></button></a>
        <a href="{{ route('notices.edit',[$notice->id]) }}"><button class="btn btn-success btn-sm">تعديل <i class="fa fa-edit"></i></button></a>
      </td>
      <td>
        <form method="POST" action="{{ route('notices.destroy',[$notice->id]) }}">
             @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('تأكيد الحذف');">حذف <i class="fa fa-trash"></i></button></form>
      </td>
  </tr>
  @endforeach
</table>
  
                <div class="text-center"> {!! $notices->links(); !!} </div>
              </div>
            </div>
            @stop