@extends('dashboard') @section('title', 'عرض جميع الكوادر الطبية') @section('content')

          <!-- Small boxes (Stat box) -->
          <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - عرض جميع الكوادر الطبية</div>
  <div class="panel-body">
         <table class="table table-bordered">
  <tr class="text-center act">
      <td>ID# </td>
      <td>الاسم رباعي</td>
      <td>رقم التلفون</td>
      <td>التخصص</td>
      <td>المدينة</td>
      <td>الموقع الجغرافي</td>
      <td colspan="2">العمليات</td>
  </tr>
  @foreach($doctors as $doctor)
   <tr>
      <td>{{ $doctor->id }}</td>
      <td>{{ $doctor->name }}</td>
      <td>{{ $doctor->tel }}</td>
      <td>{{ $doctor->job }}</td>
      <td>{{ $doctor->city }}</td>
      <td>{{ $doctor->address }}</td>
      <td class="text-center">
        <a href="{{ route('doctors.show',[$doctor->id]) }}"><button  class="btn btn-primary btn-sm">عرض <i class="fa fa-eye"></i></button></a>
        <a href="{{ route('doctors.edit',[$doctor->id]) }}"><button class="btn btn-success btn-sm">تعديل <i class="fa fa-edit"></i></button></a>
      </td>
      <td>
        <form method="POST" action="{{ route('doctors.destroy',[$doctor->id]) }}">
             @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('تأكيد الحذف');">حذف <i class="fa fa-trash"></i></button></form>
      </td>
  </tr>
  @endforeach
</table>
  
                <div class="text-center"> {!! $doctors->links(); !!} </div>
              </div>
            </div>
            @stop