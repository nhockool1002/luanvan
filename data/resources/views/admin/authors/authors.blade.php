@extends('admin')
@section('title','Quản lý Tác giả')
@section('h1','Quản lý Tác giả')
@section('submenu')
	@include('admin.submenu.submenu-author')
@endsection
@section('content')
@if(session('success_mesage'))
				<div class="alert alert-success">
					<i class="fa fa-check" aria-hidden="true"></i> {{session('success_mesage')}}
				</div>
	@endif
	<div class="container table-responsive text-sm-center">
  <h2>Danh sách Tác giả</h2>
  <table class="table" style="overflow-x:auto;">
    <thead>
      <tr>
        <th style="width: 10p%;">ID</th>
        <th style="width: 10p%;">Tên tác giả</th>
        <th style="width: 30p%;">Email</th>
        <th style="width: 40p%;">Option</th>
      </tr>
    </thead>
    <tbody class='usertable'>
     @foreach($author as $row)
      <tr class="table">
       	<td style="width: 10p%;">{{$row->id}}</td>
        <td style="width: 10p%;">{{$row->auth_name}}</td>
        <td style="width: 30p%;">{{$row->auth_email}}</td>
        <td style="width: 40p%;"><a href="{{route('authors')}}/geteditauthor/{{$row->id}}"><i class="fa fa-cog" aria-hidden="true"></i></a>
            <a class="delete" href="{{route('authors')}}/getdeleteauthor/{{$row->id}}" onclick="return confirm('Are you sure?')"><i class="fa fa-user-times" aria-hidden="true"></i></a></td>
      </tr>
      @endforeach()
    </tbody>
  </table>
</div>
<center>
<div class="paginatebar" style="width:100%;text-align:center;">
<div class="container">
{{$author->render()}}
</div>
</div>
</center>
@endsection