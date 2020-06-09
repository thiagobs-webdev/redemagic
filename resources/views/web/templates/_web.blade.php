
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teste do Processo Seletivo Rede Magic">
    <meta name="author" content="Thiago Bomfim">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Teste RedeMagic</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("web/css/bootstrap.css") }}" rel="stylesheet">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset("web/css/dashboard.css") }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">RedeMagic</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route("web.home") }}">
                    <span data-feather="home"></span>
                    Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.movies") }}">
                    <span data-feather="file"></span>
                    Filmes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.category") }}">
                    <span data-feather="shopping-cart"></span>
                    Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.users") }}">
                    <span data-feather="users"></span>
                    Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.role") }}">
                    <span data-feather="users"></span>
                    Papel
                    </a>
                </li>
            
            </ul>
        </div>
    </nav>
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('content')
    </main>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script></body>
</html>
