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
  <!--

    navbar 

    Parte superior
    empieza

    -->

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

              if($_SESSION["rol"] == "Administrador"){

                echo '<div class="dropdown">
                <button class="btn btn-primary dropdown-toggle ms-3 btn-is bg-danger" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    ' . htmlspecialchars($_SESSION["usuario"]) . '
                    ' . htmlspecialchars($_SESSION["rol"]) . '
                    
                </button>
                <ul class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="usuario.php">Perfil</a></li>
                    <li><a class="dropdown-item" href="../Frankcell php prueba/vista admin/inventario_y_gestion.php">Vista<br> Administrador</a></li>

                    <li><a class="dropdown-item" href="../Frankcell php prueba/php_contenedor/scripts/log_out.php">Cerrar sesión</a></li>
  
                </ul>
              </div>';

                
              }
              else if($_SESSION["rol"] == "Cliente")
              {

              echo '<div class="dropdown">
              <button class="btn btn-primary dropdown-toggle ms-3 btn-is" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  ' . htmlspecialchars($_SESSION["usuario"]) . '
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="usuario.php">Perfil</a></li>
                  <li><a class="dropdown-item" href="../Frankcell php prueba/php_contenedor/scripts/log_out.php">Cerrar sesión</a></li>
              </ul>
            </div>';
            } 
            else
            {
                echo "<script type='text/javascript'>
                          alert('" . $_SESSION['error_message'] . "');
                        </script>";
                  unset($_SESSION['error_message']); 

            }
          }
            else{
              
              echo '<button type="button" class="btn btn-primary ms-3 btn-is" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>';


              
            }
              // Mostrar alerta si hay un mensaje de error
              if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message']))
              {
                echo "<script type='text/javascript'>
                        alert('" . $_SESSION['error_message'] . "');
                      </script>";
                unset($_SESSION['error_message']); 
              }
              
            ?>
            



          </div>
      </div>
  </nav>
  
  <!-- 
  
  Modal 
  Iniciar sesión 
  
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
                      <a class="nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo_celulares_responsivo.php">Celulares</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo_celulares.html">Accesorios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="servici_tecnico.php">Servicios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="acercade.html">Acerca de</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!--

  termina

  navbar
  Parte inferior

  ---------------------------------
  
  Carrusel

  Empieza

  -->

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

      </div>
    </div>
  </div>
    
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/Imagenes/banner_index1.jpg" class="d-block w-100 img-fluid" id="fotocarucel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Imagenes/banner_index2.jpg" class="d-block w-100 img-fluid" id="fotocarucel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Imagenes/banner_index3.jpg" class="d-block w-100 img-fluid" id="fotocarucel" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--
  
    Terminahttp://127.0.0.1:5500/catalogo_celulares.html

    Carrusel

    ------------------------

    Contenido

    Empieza
    
  -->

  <div class="container mt-3 mb-3">
    <br> <br>
    <a class="nav-link" href="acercade.html">
    <h1 class="text-center titulo-main">FranKarcell</h1>
    </a>
    <br> <br>
    <div class="row mt-3">
      <div class="col-lg-6 col-sm-12 text-center">
        <h2>¡TENEMOS CELULARES PARA TI!</h2>
        <p>
          Accede a nuestro catálogo y conoce nuestros celulares con garantía y grandes ofertas para ti.
        </p>
        <a class="nav-link" href="catalogo_celulares.html">
        <button class="btn btn-success btn-icono mb-3">
          <img src="./Imagenes/icono_celular1.png" alt="" width="14%" class="icono1">
          <img src="./Imagenes/icono_celular2.png" alt="" width="14%" class="icono2">
        <b>TELEFONIA</b>
        </button></a>
      </div>
      <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
          <img src="./Imagenes/celulares_index.jpeg" alt="Celulares" class="custom-img">
      </div>
    </div>

    <br> <hr> <br>
    
    <div class="container">
      <div class="row mt-3">
        <div class="col-lg-6 col-sm-12 order-lg-1 order-2 d-flex justify-content-center align-items-center">
          <img src="./Imagenes/fundas_index.jpeg" alt="Celulares" class="custom-img">
        </div>
        <div class="col-lg-6 col-sm-12 order-lg-2 order-1 text-center mt-3">
          <h2>¡ENCUENTRA LOS MEJORES ACCESORIOS!</h2>
          <p>
            Cargadores, fundas, protectores de pantalla y mucho màs que puedes encontrar en nuestro catalogo de accesorios.
          </p>
          <a class="nav-link" href="catalogo_celulares_responsivo.html">
          <button class="btn btn-success btn-icono mb-3">
            <img src="./Imagenes/icono_accesorios1.png" alt="" width="14%" class="icono1">
            <img src="./Imagenes/icono_accesorios2.png" alt="" width="14%" class="icono2">
          <b>ACCESORIOS</b>
          </button></a>
        </div>
      </div>
    </div>
            
    <br> <hr> <br>

    <div class="row mt-3">
      <div class="col-lg-6 col-sm-12 text-center">
        <h2>¡REPARA TU CELULAR CON NOSOTROS!</h2>
        <p>
          Recupera la funcionalidad de tu celular con nuestro servicio de reparación profesional. Confianza y calidad garantizadas para cada dispositivo.
        </p>
        <a class="nav-link" href="servici_tecnico.html">
        <button class="btn btn-success btn-icono mb-3">
          <img src="./Imagenes/icono_servicio1.png" alt="" width="14%" class="icono1">
          <img src="./Imagenes/icono_servicio2.png" alt="" width="14%" class="icono2">
        <b>SERVICIOS</b>
        </button>
      </a>
      </div>
      <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
          <img src="./Imagenes/servicios_index.jpeg" alt="Celulares" class="custom-img">
      </div>
    </div>
  </div>

  <br> <br> <br>

  <!--
  
  termina

  Contenido

  ---------------------------

  footer

  empieza

  -->

  <footer class="footer">
    <div style="background-color: black; height: 250px;">
      <div class="row">
        <div class="col-lg-6 col-12">
          
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


  </script>
            
</body>
</html>