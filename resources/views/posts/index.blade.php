@extends('dashboard') @section('title', 'اضافة') @section('content')

          <!-- Small boxes (Stat box) -->
          <div class="panel panel-default">
  <div class="panel-heading">منصة وقاية - عرض جميع المقالات</div>
  <div class="panel-body">
         <table class="table table-bordered">
  <tr class="text-center act">
      <td>ID# </td>
      <td>اسم المقال</td>
      <td colspan="2">العمليات </td>

      
  </tr>
  @foreach($posts as $post)
   <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>     
      <td class="text-center">
        <a  href="{{ route('posts.show',[$post->id]) }}"><button  class="btn btn-primary btn-sm">عرض <i class="fa fa-eye"></i></button></a>
        <a  href="{{ route('posts.edit',[$post->id]) }}"><button class="btn btn-success btn-sm">تعديل <i class="fa fa-edit"></i></button></a>
      </td>
      <td>
        <form method="POST" action="{{ route('posts.destroy',[$post->id]) }}">
             @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('تأكيد الحذف');">حذف <i class="fa fa-trash"></i></button></form>
      </td>
  </tr>
  @endforeach
</table>
    
                <div class="text-center"> {!! $posts->links(); !!} </div>
              </div>
            </div>
            @stop