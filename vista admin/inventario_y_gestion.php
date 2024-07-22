<?php
session_start();
if ($_SESSION["rol"] !== "Administrador"){
    header("Location: ../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/admin-styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/admin-styles.css">
</head>
<body style="display: flex;">
    <div class="sidebar">
        <h1>Dashboard</h1>
        <a href="#">Estadísticas</a>
        <div>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#productosMenu" aria-expanded="false" aria-controls="productosMenu">Productos ▼</a>
            <div class="collapse submenu" id="productosMenu">
                <a href="inventario_y_gestion.html">Inventario y gestion</a>
                <a href="#">Registrar venta</a>
            </div>
        </div>
        <div>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#serviciosMenu" aria-expanded="false" aria-controls="serviciosMenu">Servicios ▼</a>
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
        <h2 align ="center">Inventario y gestion de Productos</h2>
        <div class="filtro">
          <h4>Filtrar por:</h4>
          <div class="row">
              <div class="col-md-4">
                  <label for="categoria">Categoría:</label>
                  <select class="form-select" id="categoria">
                      <option value="categoria">categoria</option>
                      <option value="stock">stock</option>
                      <option value="precio">precio</option>
                  </select>
              </div>

              <button type="button" data-bs-toggle="modal" data-bs-target="#agregarModal"  class="btn btn-success btn-sm" style="margin-top: 30px;margin-left: 45% ; width: 180px;">Agregar nuevo producto</button>
  
     <!-- Modal para agregar productos uwu -->
     <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Agregar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../php_contenedor/scripts/imprimir_productos_admin.php" method="POST">
                    <div class="mb-3">
                        <label for="Marca" class="form-label">Marca</label>
                        <select name="Marca" id="Marca" class="form-control" required>
                            <option value="51RISC">51RISC</option>
                            <option value="Dell">Dell</option>
                            <option value="HP">HP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Categoria" class="form-label">Categoría</label>
                        <select name="Categoria" id="Categoria" class="form-control" required>
                            <option value="Accesorios">Accesorios</option>
                            <option value="Computadoras">Computadoras</option>
                            <option value="Electrónica">Electrónica</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre del Producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="Color" class="form-label">Color</label>
                        <input type="text" name="Color" id="Color" class="form-control" placeholder="Color" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tamaño" class="form-label">Tamaño</label>
                        <input type="text" name="Tamaño" id="Tamaño" class="form-control" placeholder="Tamaño" required>
                    </div>
                    <div class="mb-3">
                        <label for="RAM" class="form-label">RAM</label>
                        <input type="text" name="RAM" id="RAM" class="form-control" placeholder="RAM" required>
                    </div>
                    <div class="mb-3">
                        <label for="Almacenamiento" class="form-label">Almacenamiento</label>
                        <input type="text" name="Almacenamiento" id="Almacenamiento" class="form-control" placeholder="Almacenamiento" required>
                    </div>
                    <div class="mb-3">
                        <label for="Material" class="form-label">Material</label>
                        <input type="text" name="Material" id="Material" class="form-control" placeholder="Material" required>
                    </div>
                    <div class="mb-3">
                        <label for="Precio" class="form-label">Precio</label>
                        <input type="text" name="Precio" id="Precio" class="form-control" placeholder="Precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo" required>
                    </div>
                    <div class="mb-3">
                        <label for="Stock" class="form-label">Stock</label>
                        <input type="text" name="Stock" id="Stock" class="form-control" placeholder="Stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="Descripción" class="form-label">Descripción Breve</label>
                        <textarea name="Descripción" id="Descripción" class="form-control" placeholder="Descripción Breve" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Agregar Producto</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

              <?php
     include '../php_contenedor/class/conexionbd.php';
     $conexion = new Database();
     $conexion ->conectarDB();

    $consulta="SELECT 
    marcas.marca AS marca,
    categoria_producto.categoria AS categoria,
    productos.nombre_producto,
    productos.color,
    productos.tamano,
    productos.ram,
    productos.almacenamiento,
    productos.material,
    productos.precio,
    productos.tipo,
    productos.stock,
    productos.descripcion_breve
      FROM 
          productos
      INNER JOIN 
          marcas ON marcas.id_marca = productos.marca
      INNER JOIN 
          categoria_producto ON categoria_producto.id_categoria = productos.categoria;";
    $tabla = $conexion ->seleccionar($consulta);

 
echo "<table class='table table-hover mt-3'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th>Marca</th>";
echo "<th>Categoría</th>";
echo "<th>Nombre</th>";
echo "<th>Color</th>";
echo "<th>Tamaño</th>";
echo "<th>RAM</th>";
echo "<th>Almacenamiento</th>";
echo "<th>Material</th>";
echo "<th>Precio</th>";
echo "<th>Tipo</th>";
echo "<th>Stock</th>";
echo "<th>Descripción</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($tabla as $reg) {
    echo "<tr>";
    echo "<td>$reg->marca</td>";
    echo "<td>$reg->categoria</td>";
    echo "<td>$reg->nombre_producto</td>";
    echo "<td>$reg->color</td>";
    echo "<td>$reg->tamano</td>";
    echo "<td>$reg->ram</td>";
    echo "<td>$reg->almacenamiento</td>";
    echo "<td>$reg->material</td>";
    echo "<td>$reg->precio</td>";
    echo "<td>$reg->tipo</td>";
    echo "<td>$reg->stock</td>";
    echo "<td>$reg->descripcion_breve</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
    $conexion ->desconectardb();

    ?>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>