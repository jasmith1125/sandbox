<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','ChoreZoo')</title>

    {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/app.css') }}
  
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Slackey' rel='stylesheet' type='text/css'>
  <script src="{{ URL::asset('js/vendor/custom.modernizr.js') }}"></script>

    @yield('head')


</head>
<body>
 
  <img src="../img/giraffe_banner3.png" alt="zoo animals" >

<div id="container" class="large-12 large-centered columns">

   
    </div>


    

    @yield('content')

    @yield('/body')
<script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script>
    $(document).foundation();
  </script>
</div>
</body>
</html>




