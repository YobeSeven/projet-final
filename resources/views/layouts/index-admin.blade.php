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
    @include('backend.contents.navbar')
    <div class="pt-5">
        <img class="mx-auto" src="{{asset('img/logo.png')}}" alt="">
    </div>
    @yield('content-admin')
    <script src={{asset('js/app.js')}}></script>
</body>
</html>