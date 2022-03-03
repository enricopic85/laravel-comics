<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    @include('partials.jumbotron')
    <main>
        @yield('content')
    </main>
    @include('partials.shop')
    @include('partials.centralfooter')
    @include('partials.bottomfooter')
</body>
</html>