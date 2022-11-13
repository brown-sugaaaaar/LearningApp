@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <a class="btn btn-success btn-sm" href="/admin/post/new">
                <i class="fas fa-plus"></i>
                新規作成
            </a>
        </div>
    </div>

    <div class="card-body">
        <table id="data-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>title</th>
                    <th>thumbnail</th>
                    <th>category_id</th>
                    <th>category_name</th>
                    <th>created</th>
                    <th>updated</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->thumb_name }}</td>
                <td>{{ $post->category_id }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/post/edit/{{$post->id}}">
                        <i class="fas fa-pencil-alt"></i>編集
                    </a>
                </td>
                <td>
                    <form action="/admin/post/destroy/{{$post->id}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-danger btn-sm" action="/admin/post/destroy/{{$post->id}}">
                            <i class="fas fa-trash"></i>削除
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop