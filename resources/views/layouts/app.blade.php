<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav {
            background-color: #f1f1f1;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        nav span {
            font-weight: bold;
        }
        nav form button {
            padding: 5px 10px;
            border: none;
            background-color: #ff4d4d;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }
        nav form button:hover {
            background-color: #ff1a1a;
        }
        img.logo {
            width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <span>Logged in as {{ auth()->user()->name }} ({{ auth()->user()->company }})</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>

