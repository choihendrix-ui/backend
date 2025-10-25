@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Add Contact</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>
@endsection

