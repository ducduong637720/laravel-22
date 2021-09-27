@extends('backend.layouts.master')
@section('title')
  List user
@endsection

@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Danh sách users</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Danh sách Users</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          @include('backend.components.btn', [
  'href' => route('backend.users.create'),
  'type' => 'success',
  'content' => 'Tạo mới người dùng'
])

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Trạng thái</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $users as $user )
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><span class="tag tag-success">Giám đốc</span></td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                  <a href="{{ route('backend.users.edit', $user->id) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                  <form method="POST" action="{{ route('backend.users.destroy', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">
                      <i class="far fa-trash-alt"></i>
                    </button>
                </form>  
                  <a href="{{ route('backend.users.show', $user->id) }}" class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>  
                </td>  
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  
</div><!-- /.container-fluid -->
@endsection