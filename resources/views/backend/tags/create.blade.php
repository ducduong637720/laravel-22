@extends('backend.layouts.master')

@section('title')
    Thêm mới thẻ
@endsection

@section('content-header')
    <h1>Thêm mới thẻ</h1>
@endsection

@section('content')
    <div class="card card-info">
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('backend.tags.store') }}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="name">
                </div>

                <button type="submit" class="btn btn-primary" style="float: right">Thêm thẻ</button>

            </form>
        </div>
    </div>
@endsection
