<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero App</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        nav li {
            float: left;
        }
        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li a:hover {
            background-color: #ddd;
            color: black;
        }
        .active {
            background-color: #4CAF50;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('superheroes.home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('superheroes.index') }}" class="{{ Request::is('superheroes*') ? 'active' : '' }}">Superheroes</a></li>
                <li><a href="{{ route('superheroes.about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
            </ul>
        </nav>

        @yield('content')

        <footer>
            <p>&copy; Desarrollado por Carlo Moreno Moran</p>
        </footer>
    </div>
</body>
</html>