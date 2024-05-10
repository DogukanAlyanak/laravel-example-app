<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/4.6.2/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/sweetalert2/sweetalert2.min.css") }}">
    @yield("css")
</head>
<body>
    @include("layouts.front.navbar")

    @yield("content")
    
    @include("layouts.front.footer")

    <script src="{{ asset("assets/jquery/jquery-3.7.1.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/4.6.2/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/4.6.2/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/sweetalert2/sweetalert2.min.js") }}"></script>

    @yield("js")
    
</body>
</html>