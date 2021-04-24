<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header class="border-b-2 w-screen">
        <h1 class="text-3xl text-center my-12">Sun_dock</h1>
    </header>
    <main>

        @yield('content')
        
        @show
    </main>
    <footer>
     
    </footer>
</body>
</html>