<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario uwu</title>
</head>
<body>
    <h1>Perfil</h1>
    
<?php
echo '<h2>' . htmlspecialchars($_SESSION["usuario"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["nombre"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["apellido_paterno"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["apellido_materno"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["genero"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["fecha_nacimiento"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["telefono"]) . '</h2>';
echo '<h2>' . htmlspecialchars($_SESSION["correo"]) . '</h2>';


?>
<p></p>    



</body>
</html>