<!-- Users table -->
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Joined</th>
            <th>Actions</th> <!-- New column for Edit/Delete -->
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                <td>{{ $user->role ?? 'user' }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                <td>
                    <!-- Edit button -->
                    <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete button -->
                    <form action="{{ url('/users/' . $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

