@extends('backend.layouts.master')
@section('title')
    Edit Role
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
        <div class="card card-primary">
            <div class="card-header">
                <h3>Chỉnh sửa role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('backend.roles.update', $roles->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" name="name" value="{{ $roles->name }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Permission</label>
                                <select multiple="" class="form-control" name="permissions[]" aria-placeholder="1"
                                    aria-valuenow="1">
                                    @foreach ($permissions as $permission)
                                        @foreach ($roles->permissions as $role_permission)
                                            @php
                                                $selected = '';
                                                if ($role_permission->id == $permission->id) {
                                                    $selected = 'selected';
                                                    break;
                                                }
                                            @endphp
                                        @endforeach
                                        <option value="{{ $permission->id }}" {{ $selected }}>
                                            {{ $permission->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
                </div>
            </form>
        </div>

    </div><!-- /.container-fluid -->
@endsection
