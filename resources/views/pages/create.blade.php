@extends('layout.page')

@section('content')
    <h1>Add New User</h1>

    <!-- Show validation errors -->
    @if($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('users.index') }}" style="margin-left: 10px;">Cancel</a>
    </form>
@endsection
