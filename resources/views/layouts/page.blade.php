<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <title>@yield('title')</title> 
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}"> 
   <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
   <link rel="stylesheet" href="{{ asset('css/font.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> 
   
   @include('module.header')

   <main>
      @yield('content')
   </main> 

   @include('module.footer')

   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
