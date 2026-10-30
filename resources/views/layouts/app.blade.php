<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rayhan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header class="sticky top-0 z-50">
    @include('partials.header')
</header>

<main class="max-w-5xl mx-auto px-4 py-10">
   @yield('content')  
</main>

<footer>
   @include('partials.footer')
</footer>
</body>
</html>