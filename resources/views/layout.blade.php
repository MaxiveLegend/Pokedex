<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body class="bg-stone-800 text-white">
    <div id="app" class="md:container md:mx-auto mt-5">
        @yield('content')
    </div>
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
