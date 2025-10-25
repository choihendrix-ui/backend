<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Contacts</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('contacts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add New</a>

        <ul class="mt-4 space-y-2">
            @foreach($contacts as $contact)
                <li class="bg-white p-3 rounded shadow flex justify-between items-center">
                    <div>
                        <strong>{{ $contact->name }}</strong> ({{ $contact->email }})<br>
                        {{ $contact->message }}
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('contacts.edit', $contact) }}" class="bg-yellow-400 text-black px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this contact?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-4">
            {{ $contacts->links() }}
        </div>
    </div>
</body>
</html>

