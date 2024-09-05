<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/pertemuan3tugas.css') }}"> <!-- Link ke file CSS jika ada -->
</head>
<body>
    <header>
        <h1>Praktikum Pemrograman Web 2</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Laravel</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 Praktikum Pemrograman Web 2. All rights reserved.</p>
    </footer>
</body>
</html>
