<!DOCTYPE html>
<html>
<head>
    <title>Amerop Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>Company: {{ auth()->user()->company }}</p>

    <img src="{{ asset('images/amerop.png') }}" alt="Amerop Logo" style="width:150px;">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

