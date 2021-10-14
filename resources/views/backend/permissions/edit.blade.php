@extends('backend.layouts.master')
@section('title')
  Edit Permission
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Danh sách permission</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-primary">
        <div class="card-header">
          <h3>Chỉnh sửa role</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ route('backend.permissions.update', $permission->id) }}">
            @method('PUT')
            @csrf
            <div class="card-body">
            <div class="form-group">
                <label>Tên permission</label>
                <input type="text" name="name" value="{{ $permission->name }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary" style="float: right">Thay đổi</button>
            <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
            </div>
        </form>
      </div>
    
  </div><!-- /.container-fluid -->
@endsection
