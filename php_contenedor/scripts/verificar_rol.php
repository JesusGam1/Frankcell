<?php


    try {
             // Crear conexión
        include '../class/conexionbd.php';
        $conexion = new Database();
        $conexion ->conectarDB();

        // Obtener datos del formulario
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        // rol del usuario prueba
        $stmt = $conexion->prepare("CALL buscar_roles(:usuario)");

        // Preparar consulta para llamar al procedimiento almacenado

        // Vincular parámetros
        $stmt->bindParam(':usuario', $usuario);

        // Ejecutar consulta
        $stmt->execute();

        // Verificar resultado
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado && $resultado['resultado'] == 'Cliente')
         {
            session_start();
            $_SESSION["usuario"]=$usuario;
            $_SESSION["rol"] =$rol_usuario;
            header("Location: ../../index.php");
           


            
        } else {
            echo "Usuario o contraseña incorrectos";
        }


    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }

    // Cerrar conexión
    $conexion = null;
?>
