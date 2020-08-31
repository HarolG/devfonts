<?php
require_once("../conexion/conexion.php");

if (isset($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["password"],$_POST["tipo"])){

    $documento = $_POST["documento"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $clave = $_POST["password"];
    $tipo = $_POST["tipo"];

    $inserta = "INSERT INTO usuario (documento,nombre,apellido,correo,password,id_tip_usu) VALUES ($documento,'$nombre','$apellido','$correo','$clave',$tipo)";

    $sql = mysqli_query($baseDeDatos, $inserta);
    if ($sql) {
        header("location: ../login.html");
    }else {
        echo "Problemas con la conexion de la base de datos ";
    }
}
?>