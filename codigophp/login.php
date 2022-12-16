<?php
    //almacena los output en el buffer
    ob_start();
    //conecta con la BD
    require_once "includes/conexionBD.php";
    
        $username = $_POST["usuario"];
        $password = $_POST["clave"];
        $sql = "select nombreusu, clave from usuario where nombreusu = '$username'";
        $consulta = $conn->query($sql);
        $resultado = $consulta->fetchObject();
        $veri = password_verify($password, $resultado->clave);
    
        if($veri) {
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            session_write_close();
            header("Location: listarCoches.php");
        } else {
            header("Location: index.php?error=Usuario y/o clave incorrectos");
        }
    
    $conn = null;