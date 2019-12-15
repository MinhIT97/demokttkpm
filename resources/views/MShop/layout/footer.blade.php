<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <title>@yield('title','Vicoders HTML/CSS/JS Development Kit')</title>
</head>

<body>
    @section('header') @include('layout.header') @show @yield('content')
    @section('footer') @include('layout.footer') @show
</body>

</html>