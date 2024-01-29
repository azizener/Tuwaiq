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
              <a class="navbar-brand text-white" href="{{route('welcome')}}">User</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   
                 
                  <li class="nav-item">
                 <a class="nav-link text-white" href="#">  <i class="fa-solid fa-cart-shopping"></i>                                     <span class="badge bg-danger">4</span>
                 </a>
                  </li>
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

                    <div class="col-sm-7">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          
   
   
   
   
   
   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>