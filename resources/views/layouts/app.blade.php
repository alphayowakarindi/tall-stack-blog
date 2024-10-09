<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen overflow-hidden text-gray-900 bg-gray-100 ml-72">
        @livewire('navigation-menu')

        <!-- sidebar -->
        <div class="fixed top-0 left-0 h-screen text-gray-400 bg-black sidebar w-72">
            <div class="flex justify-center my-20">
                <a href="{{ route('home') }}">
                    <img class="w-27 h-14" src="/images/sidebar-logo.png" alt="Alphayo logo" />
                </a>
            </div>
            <ul class="space-y-12">
                <li><a class="block pl-14" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a class="block pl-14" href="{{ route('admin.posts.index') }}">Posts</a></li>
                <li><a class="block pl-14" href="{{ route('admin.categories.index') }}">Categories</a></li>
            </ul>
        </div>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
