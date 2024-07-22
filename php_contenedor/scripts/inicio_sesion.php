<?php
session_start(); // Iniciar sesión


    try {
        // Crear conexión
        include '../class/conexionbd.php';
        $conexion = new Database();
        $conexion ->conectarDB();

        // Obtener datos del formulario
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        // Preparar consulta para llamar al procedimiento almacenado
        $stmt = $conexion->prepare("CALL verificar_usuario(:usuario, :contrasena)");




        // Vincular parámetros
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':contrasena', $contrasena);
        


        // Ejecutar consulta
        $stmt->execute();

        // Verificar resultado
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        if ($resultado && $resultado['resultado'] == 'Usuario encontrado') {
                
            $stmt_rol =  $conexion->prepare("CALL buscar_roles(:usuario)");
            $stmt_rol->bindParam(':usuario', $usuario);
            $stmt_rol->execute();
            $resultado_rol = $stmt_rol->fetch(PDO::FETCH_ASSOC);
            $stmt_rol->closeCursor();

            $info_usuario = $conexion->prepare("SELECT * FROM persona 
                INNER JOIN usuario ON persona.usuario = usuario.id_usuario
                WHERE usuario.nombre_usuario = :usuario");
            $info_usuario->bindParam(':usuario', $usuario);
            $info_usuario->execute();
            $res_info_usuario = $info_usuario->fetch(PDO::FETCH_ASSOC);
            $info_usuario->closeCursor();



            session_start();

            $_SESSION['nombre'] = $res_info_usuario['nombre'];
            $_SESSION['apellido_paterno'] = $res_info_usuario['apellido_paterno'];
            $_SESSION['apellido_materno'] = $res_info_usuario['apellido_materno'];
            $_SESSION['genero'] = $res_info_usuario['genero'];
            $_SESSION['fecha_nacimiento'] = $res_info_usuario['fecha_nacimiento'];
            $_SESSION['telefono'] = $res_info_usuario['telefono'];
            $_SESSION['correo'] = $res_info_usuario['correo'];




            $_SESSION["usuario"] = $usuario;
            $_SESSION["rol"] = $resultado_rol['rol'];

            
            $conexion ->desconectarDB();
            header("Location: ../../index.php");

            exit();

            
        } else {
            $_SESSION['error_message'] = 'Usuario o contraseña incorrectos';

            $conexion ->desconectarDB();
            header("Location: ../../index.php");
            exit();

        }

            

        

    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }

    // Cerrar conexión
    $conexion = null;
?>
