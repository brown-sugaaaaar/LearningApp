@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contacts</h1>
@stop

@section('content')

<form id="form" action="/admin/contact/update/{{$contact->id}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>id</label>
                        <input type="text" class="form-control" name="id" value="{{$contact->id}}" disabled>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>subject</label>
                        <input type="text" class="form-control" name="subject" value="{{$contact->subject}}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>inquiry</label>
                        <input type="text" class="form-control" name="inquiry" value="{{$contact->inquiry}}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="inquiry" value="{{$contact->name}}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="inquiry" value="{{$contact->email}}">
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="from-group" style="display:flex;">
                        <label>phase</label>
                        <input type="checkbox" class="form-control" name="phase_flag" value="0" @if($contact->phase_flag == 0) checked @endif>0
                        <input type="checkbox" class="form-control" name="phase_flag" value="1" @if($contact->phase_flag == 1) checked @endif>1
                        <input type="checkbox" class="form-control" name="phase_flag" value="2" @if($contact->phase_flag == 2) checked @endif>2
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-default" href="/admin/contacts">キャンセル</a>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </div>
    </div>
</form>
@stop