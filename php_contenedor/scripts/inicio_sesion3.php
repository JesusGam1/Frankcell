<?php
            include '../class/database.php';
            $db = new database();
            $db->conectarDB();

            extract($_POST);

            $db->verificar("$usuario", "$contrasena");

            $db->desconectarDB();

            header("Location: ../../index.php");
        ?>