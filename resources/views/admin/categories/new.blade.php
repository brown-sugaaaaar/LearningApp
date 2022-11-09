@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Category -create</h1>
@stop

@section('content')

<form id="form" action="/admin/category/store" method="POST">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>name</label>
                        <textarea type="text" name="name" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-default" href="/admin/categories">キャンセル</a>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </div>
    </div>
</form>
    
@stop