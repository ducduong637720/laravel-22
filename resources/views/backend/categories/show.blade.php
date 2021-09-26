@extends('backend.layouts.master')
@section('title')
  Show Category
@endsection

@section('content')
<h1>{{ $category->name }}</h1>
<div class="card-body table-responsive p-0">
  <table class="table table-hover text-nowrap">
    <thead>
     <tr>
        <th>ID</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Ngày sửa</th>
     </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->status }}</td>
        <td>{{ $category->created_at }}</td>
        <td>{{ $category->updated_at }}</td>
     </tr>
    </tbody>
  </table>
</div>
@endsection