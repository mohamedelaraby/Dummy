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
            @yield('content')
        </div>



        {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
        <script src=" {{url('js/jquery-3.4.1.js')}} "></script>
        <script src=" {{url('js/popper.min.js')}} "></script>
        <script src=" {{url('js/bootstrap.min.js')}} "></script>
    </body>
</html>
