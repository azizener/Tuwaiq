<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <style>
    *{
      font-family: cairo;
    }
   </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
          <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">Admin</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">الرئيسية </a>
                     
                 
                </ul>
              </div>
             
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <h3 class="nav-link active text-white" aria-current="page" href="#" style="font-family: cairo;">معسكر طويق</h3>
                    </li>
                   
                    
                  </ul>
               
              </div>
             
             
              <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                    </li>
                    
                  </ul>
               
              </div>
            </div>
          </nav>

<main class="py-0">
            <div class="">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="container-fluid">
                            <div class="row flex-nowrap">
                                <div class="col-auto col-md-5 col-xl-4 px-sm-4 px-0 bg-dark">
                                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                       
                                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                            <li class="nav-item">
                                                <a href="{{route('controlpanel')}}" class="nav-link align-middle px-0">
                                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Products</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('addgritem')}}" class="nav-link align-middle px-0">
                                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Add product</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">add element</span></a>
                                            </li>
                                            <li>
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">reciecpt</span></a>
                                               
                                            </li>
                                           
                                           
                                        </ul>
                                        <hr>
                                        <li>
                                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Sign out</span></a>
                                           
                                        </li>
                                                
                                           
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>