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
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
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
                        {{-- search --}}
                        <div class="card-tools">
                            <form method="GET" action="{{ route('backend.users.index') }}">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="name" value="{{ request()->get('name') }}"
                                        class="form-control float-right" placeholder="Tìm kiếm">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên người dùng</th>
                                        <th>Ảnh đại diện</th>
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
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>
                                                @if (!empty($user->avatar))
                                                    <img src="{{ $user->avatar_full }}" width="100px" ; height="60px">
                                                @endif
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    {{ $role->name }}
                                                @endforeach
                                            </td>
                                            <td>{!! $user->status_text !!}</td>
                                            <td>{{ $user->userInfo->phone }}</td>
                                            <td>{{ $user->userInfo->address }}</td>
                                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                            <td style="display: flex">
                                                <a href="{{ route('backend.users.edit', $user->id) }}"
                                                    class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                                <form method="POST"
                                                    action="{{ route('backend.users.login', $user->id) }}">
                                                    @csrf
                                                    <button class="btn btn-outline-danger">
                                                        <i class="fas fa-user"></i>
                                                    </button>
                                                </form>
                                                <form method="POST"
                                                    action="{{ route('backend.users.destroy', $user->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('backend.users.show', $user->id) }}"
                                                    class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    @endsection
