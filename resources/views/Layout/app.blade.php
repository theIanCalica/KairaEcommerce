<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaira - Tshirt Store</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    @vite('resources/js/app.js')
    <style>

    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        @include('Layout.navbar')
    </header>
    <main class="flex-grow-1">
        @yield('content')
    </main>
    <footer class="bg-light text-center py-3">
        @include('Layout.footer')
    </footer>
</body>



</html>
