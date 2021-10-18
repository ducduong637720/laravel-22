@extends('backend.layouts.master')
@section('title')
    Show Role
@endsection

@section('content')
    <h1>{{ $role->name }}</h1>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Permission</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->slug }}</td>
                    <td>{{ $role->permissions }}</td>
                </tr>
            </tbody>
        </table>
        <div class="card-footer">
            <a href="{{ route('backend.roles.index') }}">
                <button type="submit" class="btn btn-default float-right">Quay lại</button>
            </a>
        </div>
    </div>
@endsection
