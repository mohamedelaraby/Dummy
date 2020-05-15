<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Venture')</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}  ">
        <link rel="stylesheet" href="{{url('css/app.css')}}  ">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
      
    </head>
    <body>
        
        @include('layouts.inc.nav',['username'=>'Edmond kirsh'])
        <div class="container">
            @include('layouts.inc.message')

            @yield('content')
        </div>



        <script src=" {{url('js/jquery-3.4.1.js')}} "></script>
        <script src=" {{url('js/popper.min.js')}} "></script>
        <script src=" {{url('js/bootstrap.min.js')}} "></script>
    </body>
</html>
