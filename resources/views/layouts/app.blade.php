<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title-block')</title>
</head>
<body>

@include('inc.header')
@include('inc.massage')

@yield('content')
@if(Request::is('/'))
  @include('inc.aside')
@endif

@if(Request::is('/'))
  @include('inc.myway')
@endif


<!-- @if(Request::is('contact'))
  @include('inc.hero')
@endif -->

@if(Request::is('about'))
  @include('inc.aboutme')
@endif

@include('inc.footer')
</body>
</html>