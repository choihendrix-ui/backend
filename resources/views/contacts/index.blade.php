@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>All Contacts</h2>

    <a href="{{ route('contacts.create') }}" class="btn btn-success mb-3">Add New Contact</a>

    @if($contacts->isEmpty())
        <p>No contacts yet. Add one!</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

