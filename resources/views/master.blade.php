<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/masterStyle.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6358d70998.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6358d70998.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
  </head>
  <header>
  <nav class="navbar bg-nav text-black fixed-top" id="bg-nav">
    <div class="row justify-content-md-left">
        <a class="navbar-brand  ps-4" href="#">
            <img src="{{asset('images/pngwing.com.png')}}" alt="Bootstrap" width="30" height="24">
        </a>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto boton">
            <a href="" class="boton" id="texto">Inicio</a>
            <a href="" class="boton" id="texto2">Quienes Somos</a>
            <a href="" class="boton" id="texto3">Servicios</a>
        </div>
    </div>
    <div class="row">
        <a class="navbar-brand  pe-4" href="#">
            <img src="{{asset('images/user.png')}}" alt="Bootstrap" width="30" height="24">
        </a>
    </div>
  </nav>
  </header>
  <body class="bg-secondary-subtle">
    
    <main>
        @yield('contenido')
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
    <script src="https://kit.fontawesome.com/6358d70998.js" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/navbar.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>