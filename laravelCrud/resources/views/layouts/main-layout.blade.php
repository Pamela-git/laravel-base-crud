<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Laravel crud</title>
  </head>
  <body>
    <div class="container">
      @include('components.header')
      @yield('content')
      @include('components.footer')
    </div>

  </body>
</html>
