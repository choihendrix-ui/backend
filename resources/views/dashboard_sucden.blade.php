<!DOCTYPE html>
<html>
<head>
    <title>Sucden Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>Company: {{ auth()->user()->company }}</p>

    <img src="{{ asset('images/sucden.png') }}" alt="Sucden Logo" style="width:150px;">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>


