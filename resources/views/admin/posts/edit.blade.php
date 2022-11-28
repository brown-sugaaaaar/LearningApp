@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Post -create</h1>
@stop

@section('content')

<form id="form" action="/admin/post/update/{{$post->id}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="from-group">
                        <label>image</label>
                        <input type="file" class="form-control" name="thumbnail">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="from-group" style="text-align: center;">
                        <img src="/storage/images/thumb/thumbnail{{ $post->id }}.png" width="300px">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>content</label>
                        <textarea type="text" name="content" class="form-control">{{$post->content}}</textarea>
                    </div>
                </div>

                <!-- プルダウンでセレクトできるように設定したい -->
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>category_id</label>
                        <input type="number" name="category_id" class="form-control" value="{{$post->category_id}}">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="from-group">
                        <label>非公開</label>
                        <input type="checkbox" name="display_flag" class="form-control" value="{{$post->display_flag}}">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-default" href="/admin/posts">キャンセル</a>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </div>
    </div>
</form>

@stop