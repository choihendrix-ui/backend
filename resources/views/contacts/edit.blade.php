@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Contact</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name', $contact->name) }}" 
                   class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                   required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $contact->email) }}" 
                   class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                   required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Message</label>
            <textarea name="message" rows="4" 
                      class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-300" 
                      required>{{ old('message', $contact->message) }}</textarea>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit"
                    class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">
                Update
            </button>
            <a href="{{ route('contacts.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
        </div>
    </form>
@endsection

