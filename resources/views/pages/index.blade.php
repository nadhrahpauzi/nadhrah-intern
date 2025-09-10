@extends('layout.page')

@section('content')
    <h1>Users</h1>

    <!-- Show success message -->
    @if(session('success'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('users.create') }}" style="margin-bottom: 20px; display: inline-block;">+ Add New User</a>

    @if($users->count() > 0)
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}">Edit</a>

                            <!-- Delete form -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?');" style="background:none; border:none; color:red; cursor:pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No users found.</p>
    @endif
@endsection
