<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Contact</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-lg mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Contact</h1>

        @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
                <ul>
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
                <label class="block font-semibold">Name</label>
                <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name', $contact->name) }}">
            </div>
            <div>
                <label class="block font-semibold">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2" value="{{ old('email', $contact->email) }}">
            </div>
            <div>
                <label class="block font-semibold">Message</label>
                <textarea name="message" class="w-full border rounded p-2">{{ old('message', $contact->message) }}</textarea>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('contacts.index') }}" class="ml-2 text-gray-600">Cancel</a>
        </form>
    </div>
</body>
</html>


