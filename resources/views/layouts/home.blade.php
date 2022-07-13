<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>@yield('title') Pizza Co</title>
</head>
<style>*{font-family: 'Poppins', sans-serif ;}</style>
<body class="no-scrollbar leading-normal tracking-normal"  x-data="{ showBar: false }">
        <nav>
            @include('components.navbar')
        </nav>
        <main>
            @yield  ('content')
        </main>
        <section>
            @include('components.subsciption')
        </section>
        <section>
            @include('components.footer')
        </section>
</body>
</html>
