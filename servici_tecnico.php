<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
  <!--
    navbar 

    Parte superior
    empieza

    -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FranKarcell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav, #navbarNavBottom" aria-controls="navbarNav navbarNavBottom" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto d-flex flex-grow-1" style="max-width: 600px;">
          <input type="text" class="form-control buscar-producto" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Buscar producto">
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
              if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message']))
              {
                echo "<script type='text/javascript'>
                        alert('" . $_SESSION['error_message'] . "');
                      </script>";
                unset($_SESSION['error_message']); 
              }
              
            ?>

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
  
    \
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
                      <a class="nav-link" href="catalogo_celulares_responsivo.html">Celulares</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo_celulares_responsivo.html">Accesorios</a>
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
  <!--

    termina

    navbar
    Parte inferior

    -->

  <!--navar de abajo -->
  <nav class="navbar" style="background-color: gray;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/Imagenes/soporte.jpeg" alt="Logo" width="150px" height="50px" class="d-inline-block align-text-center">
      </a>
      <p class="text-center">
      <h4 style="color: white;">Servicio tecnico</h4>
      </p>


      
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Consultar orden
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content ">
              <div class="modal-header bg-secondary text-center">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Consulta servicio técnico</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <img src="/Imagenes/search-2041815_1280.jpg" class="img-fluid" style="width: 100%; height: 300px;">
              <div class="modal-body">
                <div class="container-fluid mt-3 ">
                  <form action="./php_contenedor/scripts/buscarpedidoporid.php" method="POST" class="row">
                    <div class="col-6">
                        <input type="number" class="form-control" name="orden" id="orden" placeholder="Ingresa el número de orden">
                    </div>
                    <div class="col-6 text-center">
                        <button type="submit" class="btn btn-dark w-100">Buscar Orden</button>
                    </div>
                </form>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  

<!-- Modal MOSTRANDO LOS RESULTADOS-->
<div class="modal fade" id="resultadoModal" tabindex="-1" role="dialog" aria-labelledby="resultadoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resultadoModalLabel">Resultado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí se mostrarán los datos -->
        <div id="resultado"></div>
        <?php
         if (isset($_SESSION['resultado'])) {
          echo '<script>';
          echo 'var resultado = ' . json_encode($_SESSION['resultado'], JSON_UNESCAPED_UNICODE) . ';';
          echo '</script>';
      }
      
          ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- codigo beta, tiene que mejorar y veremos que pasa  -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($_SESSION['mostrar_modal']) && $_SESSION['mostrar_modal']): ?>
            var myModal = new bootstrap.Modal(document.getElementById('resultadoModal'), {
                keyboard: false
            });
            myModal.show();

            if (typeof resultado !== 'undefined') {
                if (typeof resultado === 'string') {
                    document.getElementById('resultado').innerText = resultado;
                } else {
                    var html = '<table class="table table-striped">';
                    html += '<thead><tr>';
                    for (var key in resultado) {
                        html += '<th>' + key + '</th>';
                    }
                    html += '</tr></thead>';
                    html += '<tbody><tr>';
                    for (var key in resultado) {
                        html += '<td>' + resultado[key] + '</td>';
                    }
                    html += '</tr></tbody></table>';
                    document.getElementById('resultado').innerHTML = html;
                }
            }

            <?php 
            unset($_SESSION['mostrar_modal']);
            unset($_SESSION['resultado']);
            ?>
        <?php endif; ?>
    });
    </script>

  <!-- imagen de servicio -->
  
  <img src="/Imagenes/wg7xdm0a.png" class="img-fluid" style="height: 300px; width: 100%;">
  <br>
  <!--termina imagen de servicio -->

  <div class="container-fluid container ">
    <h4>
    <p class="text-center">!! Hola Bienvenido !!</p>
    <p class="text-start">En FranKarcell te ayudamos a resolver cualquier inconveniente de una manera ágil y cómoda,a
      través de la atención personalizada contamos con </p>
    <p class="text-center"> técnicos certificados .</p>
    <p class="text-start">Te ofrecemos un servicio integral, que incluye reparaciones de equipos de la gran variedad de
      marcas y modelos, con refacciones originales y mano de obra con la maxima calidad.</p></h4>
  </div><br>

  <div class="container mt-3 mb-3">
    <h1 class="text-center">Servicios</h1> <br><br>
    <div class="row mt-3">
      <div class="col-lg-6 col-sm-12 text-center">
        <h4> Reparación de Display de dispositivos con refacciones originales de la marca.</h4>
      </div>
      <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
        <img src="path_to_icon/icon.png" alt="Icono Celular">
      </div>
    </div><br><br><br>

    <div class="container">
      <div class="row mt-3">
        <div class="col-lg-6 col-sm-12 order-lg-1 order-2 d-flex justify-content-center align-items-center">
          <img src="path_to_icon/icon.png" alt="Celulares" class="custom-img">
        </div>
        <div class="col-lg-6 col-sm-12 order-lg-2 order-1 text-center mt-3">
          <h4>Asesorías Uno a Uno por  chat interactivo y configuraciones </h4>
        </div>
      </div>
    </div>
    <br><br><br>

    <div class="container mt-3 mb-3">
      <div class="row mt-3">
        <div class="col-lg-6 col-sm-12 text-center">
          <h4> Ofrecemos garantias con todos nuestros servicios y reparaciones </h4>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
          <img src="path_to_icon/icon.png" alt="Icono Celular">
        </div>











        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>