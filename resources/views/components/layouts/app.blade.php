<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="overflow-hidden text-gray-900 ml-72">
        <!-- hero -->
        @isset($hero)
            {{ $hero }}
        @endisset

        <!-- sidebar -->
        <div class="fixed top-0 left-0 h-screen text-gray-400 bg-black sidebar w-72">
            <div class="flex justify-center my-20">
                <a href="index.html">
                    <img class="w-27 h-14" src="images/sidebar-logo.png" alt="Alphayo logo" />
                </a>
            </div>
            <ul class="space-y-12">
                <li>
                    <a class="block text-white active pl-14" href="{{ route('home') }}">Home</a>
                </li>
                <li><a class="block pl-14" href="{{ route('posts.index') }}">Posts</a></li>
                <li><a class="block pl-14" href="{{ route('about') }}">About</a></li>
            </ul>
        </div>

        <!-- main -->
        <main class="p-4">
            {{ $slot }}
        </main>

        <!-- footer -->
        <footer class="mt-20 mb-10 text-center">
            <small class="text-gray-400">&copy; 2024 Alphayo Blog</small>
        </footer>
    </div>
</body>

</html>
