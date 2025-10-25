@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>

    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        <br><br>

        <label for="is_admin">Role:</label>
        <select name="is_admin" id="is_admin">
            <option value="0" {{ $user->is_admin ? '' : 'selected' }}>User</option>
            <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
        </select>
        <br><br>

        <button type="submit">Update User</button>
    </form>

    <br>
    <a href="{{ route('admin.users') }}">Back to User List</a>
@endsection

