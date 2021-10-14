@extends('backend.layouts.master')
@section('title')
  Create Role
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Danh sách roles</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-warning">
        <div class="card-header">
          <h3>Tạo mới roles</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('backend.roles.store')}}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                  <label>Tên role</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên roles ...">
              </div>  
              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Permission</label>
                        <select multiple="" class="form-control" name="permissions[]" aria-placeholder="1" aria-valuenow="1">
                            @foreach ($permissions as $permission)
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
  
            <div class="card-footer">
              <button type="submit" class="btn btn-warning">Lưu</button>
              <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
            </div>
          </form>
      </div>
    
  </div><!-- /.container-fluid -->
@endsection