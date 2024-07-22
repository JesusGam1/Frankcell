<?php
session_start();
if ($_SESSION["rol"] !== "Administrador"){
    // Redirigir a la página de inicio de sesión o una página de error
    header("Location: ../../index.php");
    exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/admin-styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/admin-styles.css">


</head>

<body>

    <div class="container-fluid" style="display:flex; justify-content:space-between;">

            <div class="sidebar">
                <h1>Dashboard</h1>
                <a href="#">Estadísticas</a>
                <div>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#productosMenu" aria-expanded="false"
                        aria-controls="productosMenu">Productos ▼</a>
                    <div class="collapse submenu" id="productosMenu">
                        <a href="inventario_y_gestion.html">Inventario y gestion</a>
                        <a href="#">Registrar venta</a>
                    </div>
                </div>
                <div>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#serviciosMenu" aria-expanded="false"
                        aria-controls="serviciosMenu">Servicios ▼</a>
                    <div class="collapse submenu" id="serviciosMenu">
                        <a href="#">Gestión</a>
                        <a href="#">Ajustes a servicio</a>
                        <a href="#">Servicios terminados</a>
                    </div>
                </div>
                <a href="#">Clientes</a>
                <a href="#">Notificaciones</a>
            </div>
            


    <div class="container-fluid container">
        <div class="">
            <h4 align="center">Gestion de servicios </h4>
            <div class="container-fluid container" style="display: flex; margin-top: 50px;">
                <div class="container-fluid">
                    <label for="busqueda" class="" style="margin-right: 10px;" >Buscar por nombre: </label>
                    <input type="text" class="" id="busqueda" placeholder="Busqueda">
                    <button type="button" class="btn btn-success"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Agregar nuevo servicio </button> 

                </div>
                <div class="container-fluid">           
                    
                    <select class="form-select" id="filtrar gestion" style="margin-right:40%;">
                        <option value="categoria">Filtrar por categoria</option>
                        <option value="stock">stock</option>
                        <option value="precio">precio</option>
                        </select>
                </div>               
                </div> 
                
                <div class="container-fluid" style="margin-top: 150px;">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Veces proporcionado</th>
                            <th scope="col">descripcion</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">pantalla rota</th>
                            <td>hardware</td>
                            <td>1</td>
                            <td>cambio pantalla</td>
                            <td><button type="button" class="btn btn-success"style="--bs-btn-padding-y: .25rem;
                             --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Editar</button></td>
                          </tr>
                          <tr>
                            <th scope="row">desbloqueo</th>
                            <td>software</td>
                            <td>1</td>
                            <td>quitar cuenta</td>
                            <td><button type="button" class="btn btn-success"style="--bs-btn-padding-y: .25rem;
                             --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Editar</button></td>
                          </tr>                        
                        </tbody>
                    </table>

                </div>
            </div>            
         </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</html>