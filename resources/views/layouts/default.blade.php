<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        @include('layouts.partials.navbar')
    </header>
    @include('layouts.partials.jumbotron')
    <main>
        @yield('content')
    </main>
    @include('layouts.partials.shop')
    @include('layouts.partials.centralfooter')
    @include('layouts.partials.bottomfooter')
</body>
</html>