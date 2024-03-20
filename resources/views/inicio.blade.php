<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sol y Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
       body {
            padding-top: 100px; 
        }

        /* Estilo del navbar */
        .navbar {
            height: 90px; 
            background-color: #D66706; 
            font-size: 17px;
        }

        /* Estilo del logo en el navbar */
        .navbar-brand img {
            width: 100px; 
            height: auto; 
        }
        
        .navbar-nav .nav-link {
            color: #FFFFFF; 
        }
        .icono-blanco {
            color: white;
            font-size: 200%;
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Tu Logo" width="70" height="70" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li>
                        <span class="material-icons icono-blanco">shopping_cart</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a href="register" class="material-icons icono-blanco">account_circle</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5">
        <h1>Menu</h1>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/capuccino.png') }}" alt="Cappuccino" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Cappuccino</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/capuccino.png') }}" alt="Cappuccino" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Cappuccino</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                    <p class="mt-3"><strong class="h4">Americano</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts de Bootstrap y jQuery (asegúrate de tener internet para cargar los CDN) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
