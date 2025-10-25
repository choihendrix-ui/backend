@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl mb-4">Create User</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="block w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="block w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="block w-full border p-2 rounded">
                <option value="user" {{ old('role')=='user' ? 'selected':'' }}>User</option>
                <option value="admin" {{ old('role')=='admin' ? 'selected':'' }}>Admin</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="block w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="block w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Create</button>
        <a href="{{ route('admin.users.index') }}" class="ml-2">Cancel</a>
    </form>
</div>
@endsection

