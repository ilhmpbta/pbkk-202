<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'PBKK Profile'))</title>

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="h-full bg-[#161616] text-[#f2f4f8] antialiased">
    <div class="min-h-full flex flex-col">

        @include('components.navbar')
        
        <main class="flex-1 w-full">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-8">
                @yield('content')
            </div>
        </main>

        @include('components.footer')

    </div>

    @stack('scripts')
</body>
</html>
