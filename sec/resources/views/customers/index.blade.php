@extends('dashboard') @section('title', 'عرض جميع المستخدمين') @section('content')

          <!-- Small boxes (Stat box) -->
          <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - عرض جميع المستخدمين </div>
  <div class="panel-body">
         <table class="table table-bordered">
  <tr class="text-center act">
      <td>ID# </td>
      <td>الاسم رباعي</td>
      <td>رقم التلفون</td>
      <td>المدينة</td>
      <td>رقم الكود</td>
      <td colspan="2">العمليات</td>
  </tr>
  @foreach($customers as $customer)
   <tr>
      <td>{{ $customer->id }}</td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->tel }}</td>
      <td>{{ $customer->city }}</td>
      <td>{{ $customer->code }}</td>
      <td class="text-center">
        <a href="{{ route('customers.show',[$customer->id]) }}"><button  class="btn btn-primary btn-sm">عرض <i class="fa fa-eye"></i></button></a>
        <a href="{{ route('customers.edit',[$customer->id]) }}"><button class="btn btn-success btn-sm">تعديل <i class="fa fa-edit"></i></button></a>
      </td>
      <td>
        <form method="POST" action="{{ route('customers.destroy',[$customer->id]) }}">
             @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('تأكيد الحذف');">حذف <i class="fa fa-trash"></i></button></form>
      </td>
  </tr>
  @endforeach
</table>
       <nav>
  <ul class="pagination">
    <li class="disabled">
      <span>
        <span aria-hidden="true">&laquo;</span>
      </span>
    </li>
    <li class="active">
      <span>1 <span class="sr-only">(current)</span></span>
    </li>
    <li>
      <span>2 <span class="sr-only">(current)</span></span>
    </li>
    <li>
      <span>3 <span class="sr-only">(current)</span></span>
    </li>
    <li>
      <span>4 <span class="sr-only">(current)</span></span>
    </li>
    <li class="disabled">
      <span>
        <span aria-hidden="true">&raquo;</span>
      </span>
    </li>
  </ul>
</nav>
              </div>
            </div>
            @stop