<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>{{config('app.name','myApp1')}}</title>
</head>
<body>
<div>@include('inc.navbar')</div>
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

</body>
</html>
