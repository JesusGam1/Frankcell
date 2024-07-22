<?php
session_start(); // Iniciar sesión

include '../class/conexionbd.php';
$conexion = new Database();
$conexion ->conectarDB();

try{
    $marca = $_POST['Marca'];

    $stmt = $conexion->prepare("SELECT id_marca FROM marcas WHERE marca = :marca");
    $stmt->bindParam(':marca', $marca);
    $stmt->execute();
    $marcaId = $stmt->fetchColumn();
    $stmt ->closeCursor();

    $cat = $_POST['Categoria'];
    echo "Marca seleccionada: " . $cat . "<br>"; // Depuración

    $stmt2 = $conexion->prepare("SELECT id_categoria FROM categoria_producto WHERE categoria = :categoria");
    $stmt2->bindParam(':categoria', $cat);
    $stmt2->execute();
    $catid = $stmt2->fetchColumn();
    $stmt2 ->closeCursor();


    $consulta = $conexion->prepare("INSERT INTO PRODUCTOS (marca, categoria, nombre_producto, color, tamano, ram, almacenamiento, material, precio, tipo, stock, descripcion_breve) VALUES (:marca, :categoria, :nombre, :color, :tamano, :ram, :almacenamiento, :material, :precio, :tipo, :stock, :descripcion)");
    $consulta->bindParam(':marca', $marcaId);
    $consulta->bindParam(':categoria', $catid);
    $consulta->bindParam(':nombre', $_POST['Nombre']);
    $consulta->bindParam(':color', $_POST['Color']);
    $consulta->bindParam(':tamano', $_POST['Tamaño']);
    $consulta->bindParam(':ram', $_POST['RAM']);
    $consulta->bindParam(':almacenamiento', $_POST['Almacenamiento']);
    $consulta->bindParam(':material', $_POST['Material']);
    $consulta->bindParam(':precio', $_POST['Precio']);
    $consulta->bindParam(':tipo', $_POST['tipo']);
    $consulta->bindParam(':stock', $_POST['Stock']);
    $consulta->bindParam(':descripcion', $_POST['Descripción']);

    $consulta->execute();
  
  $conexion ->desconectarDB();
  header("Location: ../vista admin/inventario_y_gestion.php");
  exit();
        

    
}
catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}


?>