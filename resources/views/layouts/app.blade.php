<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="relative flex min-h-dvh font-sans antialiased bg-slate-50 text-sm">
    @include('components.sidebar')
    <figure class="absolute bg-slate-100 w-full h-48 -z-10 border-b border-slate-300 bg-pattern"></figure>
    <main class="grow py-10 flex items-center flex-col min-h-dvh px-5 w-full mx-auto gap-10">
        @yield('content')
    </main>
</body>

</html>
