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
                    <th>id</th>
                    <th>subject</th>
                    <th>name</th>
                    <th>created</th>
                    <th>updated</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
@stop