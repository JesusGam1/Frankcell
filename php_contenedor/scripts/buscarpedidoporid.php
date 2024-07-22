<?php
session_start();

include '../class/conexionbd.php';

$conexion = new Database();
$conexion->conectarDB();

extract($_POST);

if (isset($_SESSION['usuario'])) {
    $id = $_POST['orden'];
    $usuario = $_SESSION['usuario'];

    try {
        $stmt = $conexion->prepare("CALL cli_actualizacion_orden(:id, :usuario)");

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

     

        $conexion ->desconectarDB();
        if ($resultado) {
            $_SESSION['resultado'] = $resultado;
        } else {
            $_SESSION['resultado'] = 'No se encontró el pedido';
        }


        $_SESSION['mostrar_modal'] = true;
    
        header("Location: ../../servici_tecnico.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID o usuario no definido.";
}
?>
