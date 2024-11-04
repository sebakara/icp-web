<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <header>
        <!-- Include your header here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Include your footer here -->
    </footer>

    <!-- Include your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
