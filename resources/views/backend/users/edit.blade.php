@extends('backend.layouts.master')
@section('title')
    Update Users
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
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
        <div class="card card-primary">
            <div class="card-header">
                <h3>Chỉnh sửa người dùng</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('backend.users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                            placeholder="Nhập tên.....">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                            id="exampleInputEmail1" placeholder="Nhập email...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" name="password" value="{{ $user->password }}" class="form-control"
                            id="exampleInputPassword1" placeholder="Nhập mật khẩu...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputphoneNumber">Số điện thoại</label>
                        <input type="number" name="phone" value="{{ $user->UserInfo->phone }}" class="form-control"
                            id="exampleInputphoneNumber" placeholder="Nhập số điện thoại...">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" value="{{ $user->UserInfo->address }}" class="form-control"
                            placeholder="Nhập địa chỉ.....">
                    </div>
                    <div class="form-group">
                        <label>Roles</label>
                        <select class="form-control" name="roles[]" aria-placeholder="1" aria-valuenow="1">
                            @foreach ($roles as $role)
                                @foreach ($user->roles as $user_role)
                                    @php
                                        $selected = '';
                                        if ($user_role->id == $role->id) {
                                            $selected = 'selected';
                                            break;
                                        }
                                    @endphp
                                @endforeach
                                <option value="{{ $role->id }}" @if (isset($selected)) {{ $selected }} @endif>{{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="avatar" value="{{ $user->avatar }}" class="custom-file-input"
                                    id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Đăng ảnh</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="status">
                            <option value="{{ $user->status }}">{!! $user->status_text !!}</option>
                            <option value="0">Hoạt động</option>
                            <option value="1">Ngoại tuyến</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Sửa</button>
                    <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
                </div>
            </form>
        </div>

    </div><!-- /.container-fluid -->
@endsection
