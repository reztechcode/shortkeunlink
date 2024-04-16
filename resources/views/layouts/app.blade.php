<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-e76e97bf.css') }}"> --}}
    {{-- <script src="{{ asset('build/assets/app-a5991337.js') }}"></script> --}}
    <title>ShortkeunLink</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navbar --}}
    @include('components.navbar')
    <div class="">

        @yield('konten')
    </div>
    <footer class="footer footer-center fixed 
    inset-x-0 bottom-0  p-4 bg-base-300 text-base-content">
        <aside>
            <p>Copyright © 2024 - by <a href="https://rezweb.my.id" target="_blank"
                    class="link link-secondary link-hover">irez abdullah</a></p>
        </aside>
    </footer>
</body>

</html>
