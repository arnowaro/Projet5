<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer="" src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
</head>
<body class="bg-gray-50" style="">
    <header>
        @include('layouts.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer></footer>
</body>
</html>