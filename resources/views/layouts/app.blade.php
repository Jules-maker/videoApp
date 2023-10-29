@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/videos/create">Upload Video</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2023
    </footer>
</body>
</html>
