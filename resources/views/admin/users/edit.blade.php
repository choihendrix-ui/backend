@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl mb-4">Edit User</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="block w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="block w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="block w-full border p-2 rounded">
                <option value="user" {{ old('role', $user->role)=='user' ? 'selected':'' }}>User</option>
                <option value="admin" {{ old('role', $user->role)=='admin' ? 'selected':'' }}>Admin</option>
            </select>
        </div>

        <div class="mb-3">
            <label>New Password (leave blank to keep current)</label>
            <input type="password" name="password" class="block w-full border p-2 rounded">
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="block w-full border p-2 rounded">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
        <a href="{{ route('admin.users.index') }}" class="ml-2">Cancel</a>
    </form>
</div>
@endsection

