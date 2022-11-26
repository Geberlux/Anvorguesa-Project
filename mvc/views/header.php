<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="public/css/estilos.css">
    
    <title>Anvorguesa - Inicio</title>
    <link rel="shortcut icon" href="public/img/anvorguesaicon.png">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body class="fondo-imagen">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark negroo ">
            <div class="container-fluid">
              <a class="navbar-brand" href="usuario"><img src="public/img/anvorguesa2_2.png" alt="Logo de la empresa, dice XPerience" height="43" width="43"> <p class="lobster">Anvorguesa</p></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index">Incio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="producto">Hamburguesas</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Más
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="nosotros">Sobre Nosotros</a></li>
                      <li><a class="dropdown-item" href="contacto">Contacto</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="usuario">Loguear</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usuario/logout">logout</a>
                  </li>
                  <li class="nav-item" >
                     <a class="nav-link" href="">Bienvenido <?php echo $correo ?>  </a>
                 </li>
      </ul>
      
              </div>
            </div>
          </nav>
    </header>