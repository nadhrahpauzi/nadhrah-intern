@extends('layout.page')


@section('content')
    <h1>Users</h1>


    <ol>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
    </ol>
@endsection