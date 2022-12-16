<?php
$servidor="db";
$usuario="root";
$clave= "pestillo";
$bd="concesionario";
try {
    //Mysql es el gestor de base de datos
    $conn = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);
    //Establece los atributos de los reportes de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión satisfactoria";
 } catch(PDOException $e) { 
    echo ( "Error de conexión: " . $e->getMessage()); 
}
?>