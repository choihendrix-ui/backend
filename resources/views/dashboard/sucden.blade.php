<!DOCTYPE html>
<html>
<head>
    <title>Sucden Dashboard</title>
</head>
<body>
    <h1>Welcome, Sucden User</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

