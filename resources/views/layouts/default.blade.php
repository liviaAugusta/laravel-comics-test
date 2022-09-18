<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="test/css">

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Document</title>
    {{-- <title>@yield('pageTitle')</title> --}}
</head>
<body>
    <header class="header">
        {{-- nav bar in comune per tutte le pagine --}}
        @include('includes.header')
    </header>
    
    <main>
        @yield('mainContent') 
    </main>

    <footer>
        {{-- footer in comune per tutte le pagine --}}
        @include('includes.footer')
    </footer>
</body>
</html>