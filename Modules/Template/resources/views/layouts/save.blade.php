<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Save Leave Template</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Vite CSS --}}
    @vite('resources/assets/css/app.css')

    {{-- {{ module_vite('build-template', 'resources/assets/css/app.css') }} --}}
</head>

<body class="application-body">
    @yield('content')

    {{-- Vite JS --}}
    @vite('resources/assets/js/app.js')
    {{-- {{ module_vite('build-template', 'resources/assets/js/app.js') }} --}}
</body>