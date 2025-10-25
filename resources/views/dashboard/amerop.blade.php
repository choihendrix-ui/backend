<!DOCTYPE html>
<html>
<head>
    <title>Amerop Dashboard</title>
</head>
<body>
    <h1>Welcome, Amerop User</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

