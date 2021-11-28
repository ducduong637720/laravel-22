{{-- @extends('backend.layouts.master')
@section('title')
    Show Post
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Danh mục</th>
                    <th>View_Count</th>
                    <th>Người khởi tạo</th>
                    <th>Người sửa</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Ngày sửa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>Hạ chí</td>
                    <td>{{ $post->view_count }}</td>
                    <td>{{ $post->user_created_id }}</td>
                    <td>{{ $post->user_updated_id }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{!! $post->status_text !!}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                </tr>
            </tbody>
        </table>
        <div class="card-footer">
            <a href="{{ route('backend.posts.index') }}">
                <button type="submit" class="btn btn-default float-right">Quay lại</button>
            </a>
        </div>
    </div>
@endsection --}}
