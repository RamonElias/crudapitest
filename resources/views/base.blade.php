<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <title>Laravel Test @yield('title')</title>
   </head>

   <body>
      <div class="container">
         {{-- <h3>CRUD</h3> --}}

         @yield('content')
      </div>

      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
   </body>

</html>
