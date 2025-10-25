<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        h1 {
            margin-bottom: 10px;
            font-size: 2rem;
        }
        p {
            margin-bottom: 30px;
            font-size: 1.1rem;
        }
        a, button {
            display: inline-block;
            background: #fff;
            color: #4e54c8;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        a:hover, button:hover {
            background: #4e54c8;
            color: #fff;
            transform: translateY(-2px);
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome to Laravel 🎉</h1>
        <p>You are viewing the main dashboard page.</p>
<<<<<<< HEAD

        @auth
            <p>Hello, {{ auth()->user()->name ?? 'User' }}!</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</body>
</html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)

        @auth
            <p>Hello, {{ auth()->user()->name ?? 'User' }}!</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</body>
</html>

