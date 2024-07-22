<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">a
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3" style="width: 30%; box-shadow: 0px 0px 5px #000; border-radius: 10px; padding: 15px;">
        <h1>Iniciar sesión</h1>
        <form action="../scripts/inicio_sesion.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="mb-3">
                <input type="submit" name="login" id="login" class="form-control" value="Iniciar sesión">
            </div>
        </form>
        <div class="container">
            <p>Aun no tienes cuenta? <a href="registro.php">Crea una</a> </p>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>