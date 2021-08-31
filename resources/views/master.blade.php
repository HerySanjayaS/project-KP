<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://api.fontshare.com/css?f[]=satoshi@400&display=swap" rel="stylesheet">
  </head>
  <body>

    @include('header')

    @yield('konten')

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script language="javascript" src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js'></script>
    <script type="text/javascript" src='/js/logic.js'></script>  
    <script type="text/javascript" src='/js/carousel.js'></script>
  </body>
</html>