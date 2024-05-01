<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizza House</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>
</head>

<body class="antialiased">

    <header class='header'>
        <a href="/" class="navigate">Home</a>
        @guest
        <a href="/register" class="navigate">Register</a>
        <a href="/login" class="navigate">Login</a>
        @endguest

        @auth
        <span class="small">Welcome back {{auth()->user()->name}}! 
            <form method="POST" action="/logout" class="text-xs small">@csrf<button type="submit" class="border-2 p-2 ">Log Out</button></form>
        </span>
        
        @endauth
    </header>


    @yield('content')

    <footer class='footer'>copyright pizzas 2024 cc</footer>

    @if(session()->has('success'))
    <div 
    x-data="{show: true }"
    x-init="setTimeout(()=>show = false, 4000)"
    x-show="show"
    class="fixed bottom-10 right-20 bg-blue-500 text-black">
        <p>{{session('success')}}</p>
    </div>
    @endif
</body>

</html>