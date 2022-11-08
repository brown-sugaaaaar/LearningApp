@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Post -create</h1>
@stop

@section('content')

<form id="form" action="/admin/post/store" method="POST">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>content</label>
                        <textarea type="text" name="content" class="form-control"></textarea>
                    </div>
                </div>

                <!-- プルダウンでセレクトできるように設定したい -->
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>category_id</label>
                        <input type="number" name="category_id" class="form-control">
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