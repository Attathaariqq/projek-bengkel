<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>
    @include('includes.css')
</head>
<body>

@if(!Request::is("login") && !Request::is("register"))
@include('includes.navbar')
@endif

<div class="container-fluid">
    <div class="row">
        @if(!Request::is("login") && !Request::is("register"))
        @include('includes.sidebar')
        @endif
        <main class="{{ !Request::is('login') && !Request::is('register') ? 'col-md-9 ms-sm-auto col-lg-10 px-md-4' : ''}}">
            @yield('content')
        </main>
    </div>
</div>


@include("includes.js")
@yield("custom-js")
</body>
</html>
