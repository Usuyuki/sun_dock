<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

    {{-- GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">

</head>
<body>
    <style>
        textarea {
    resize: none;
    width: 300px;
    height: 200px;
}
    .potta {
        font-family: "Potta One", cursive;
    }
    .sunDock-frame{
        
        border:1px solid gray;
        border-radius:74% 26% 24% 76% / 54% 30% 70% 46% ;
    }
    .sunDock-frame{
        border:1px solid gray;
        border-radius:74% 26% 24% 76% / 54% 30% 70% 46% ;
    }
    </style>
    @section('header')
    <header class="relative border-b-2 w-screen">
        <h1 class="text-3xl text-center my-4"><a href="{{url("/")}}">さんどっく！</a></h1>
        @show
    </header>
    @if($is_identifier)
    @else
     @component("components.newvisitor")
     @endcomponent
    @endif
    <main>

        @yield('content')
        
        
    </main>
    <footer>
     
    </footer>
</body>
</html>