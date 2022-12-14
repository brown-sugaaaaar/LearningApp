@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contacts</h1>
@stop

@section('content')
<div class="card">

    <div class="card-body">
        <table id="data-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>subject</th>
                    <th>name</th>
                    <th>created</th>
                    <th>updated</th>
                    <th>phase_flag</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->updated_at }}</td>
                    <td>{{ $contact->phase_flag }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/contact/edit/{{$contact->id}}">
                            <i class="fas fa-pencil-alt"></i>編集
                        </a>
                    </td>
                    <td>
                        <form action="/admin/contact/destroy/{{$contact->id}}" method="POST">
                        @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
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