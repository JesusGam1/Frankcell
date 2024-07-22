<?php
class Database 
{
    public $PDOLocal;
    private $user = "root";
    private $password = "";
    private $server = "mysql:host=127.0.0.1;port=3307;dbname=frankarcel_final2";
    function conectarDB()
    {
        try 
        {
            $this->PDOLocal = new PDO($this->server, $this->user, $this->password);
            $this->PDOLocal->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function prepare($sql) {
        return $this->PDOLocal->prepare($sql);
    }

    function seleccionar($consulta)
    {
    try{
    $resultado = $this->PDOLocal->query($consulta);
    $fila = $resultado->fetchAll(PDO::FETCH_OBJ);
    
    return $fila;
    }
    catch(PDOException $e)
{
    echo $e->getMessage();

}
    }

    /* visto en clase , posiblemente lo use*/
    function verificar($usuario, $contra)
    {
        try {
            $pase = false;
            $query = "select * from usuario where nombre_usuario = '$usuario'";
            $resultado = $this->PDOLocal->query($query);

            while ($renglon = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($contra, $renglon['contrasena'])) {
                    $pase = true;   
                }
            }
            if ($pase) {
                session_start();
                $_SESSION["usuario"] = $usuario;
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'> BIENVENIDO " . $_SESSION["usuario"] . "</h2>";
                echo "</div>";
                header("refresh:2; ../index.php");
            } else {
                echo "<div class='alert alert-danger'>";
                echo "<h2 align='center'> USUARIO O PASSWORD INCORRECTO </h2>";
                echo "</div>";
                header("refresh:2; ../views/iniciarSesion.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function desconectarDB()
    {
        $this->PDOLocal = null;
    }

		

    }

?>