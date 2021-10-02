@extends('backend.layouts.master')
@section('title')
  List user
@endsection

@section('content')
<h1>{{ $user->name }}</h1>
<div class="card-body table-responsive p-0">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Chức vụ</th>
        <th>Trạng thái</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ngày tạo</th>
        <th>Ngày sửa</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->email }}</td>
        <td><span class="tag tag-success">Giám đốc</span></td>
        <td>{!! $user->status_text !!}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>
      </tr>
    </tbody>
  </table>
  <div class="card-footer">
    <a href="{{ route('backend.users.index') }}">
      <button type="submit" class="btn btn-default float-right">Quay lại</button>
    </a>
  </div>
</div>
@endsection