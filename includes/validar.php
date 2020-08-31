<?php
    session_start();
    require_once("../conexion/conexion.php");
  
    $documento = $_POST["documento"];
    $clave = $_POST["password"];
    $consulta = "SELECT usuario.*,tipo_usuario.nom_tip_usu FROM usuario,tipo_usuario where documento = $documento and password = '$clave' and usuario.id_tip_usu = tipo_usuario.id_tip_usu";
    $usuario = mysqli_query($baseDeDatos,$consulta);
    $arreglo = mysqli_fetch_assoc($usuario);
    if ($usuario){
        $_SESSION["tipo"] = $arreglo["id_tip_usu"];
        $_SESSION["nombre"] = $arreglo["nombre"];
        $_SESSION["tipo-usuario"]= $arreglo["nom_tip_usu"];
        if($_SESSION["tipo"]== 1 ){
            header("location: ../administrador/administrador.php");
        }elseif($_SESSION["tipo"] == 2 ){
            header("location: ../gerenteUno/gerente.php");
        }else{
            header("location: ../gerenteDos/gerente.php");
        }
    }

?>