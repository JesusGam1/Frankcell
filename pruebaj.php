<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href= "./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
    
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav, #navbarNavBottom" aria-controls="navbarNav navbarNavBottom" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto d-flex flex-grow-1" style="max-width: 600px;">
              <input type="text" class="form-control buscar-producto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscar producto">
          </div>
          <?php
        if(isset($_SESSION["usuario"]))
        {

          echo '<div class="dropdown">
          <button class="btn btn-primary dropdown-toggle ms-3 btn-is" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              ' . htmlspecialchars($_SESSION["usuario"]) . '
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="../Frankcell php prueba/php_contenedor/scripts/log_out.php">Cerrar sesión</a></li>
          </ul>
        </div>';
        } 
        else{

          echo '<button type="button" class="btn btn-primary ms-3 btn-is" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>';


          
        }
          
        ?>



      </div>
  </div>
</nav>

<!-- 
  -->
  
     <!-- Modal -->
     <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="./php_contenedor/scripts/inicio_sesion.php" method="POST">
                    <div class="mb-3">
                          <label for="usuario" class="form-label">Usuario</label>
                          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario" required>
                          </div>
                        <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <input type="submit" name="login" id="login" class="form-control" value="Iniciar sesión">
                        <div class="mt-3">
                        <label for="form-label">¿Aún no tienes cuenta?</label>
                        <a href="./php_contenedor/views/registro.php">Regístrate</a>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
  

  <!--

  termina

  navbar 
  Parte superior

  --------------------------

  navbar

  Parte inferior
  empieza

  -->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-height">
      <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavBottom">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo_celulares.html">Celulares</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo_celulares.html">Accesorios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="servici_tecnico.html">Servicios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="acercade.html">Acerca de</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>

</body>
</html>

  