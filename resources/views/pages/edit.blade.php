@extends('layout.page')

@section('content')
    <h1>Edit User</h1>

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

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Password: <small>(Leave blank to keep current password)</small></label><br>
            <input type="password" name="password">
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('users.index') }}" style="margin-left: 10px;">Cancel</a>
    </form>
@endsection
