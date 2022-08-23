<?php
require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/autoload.php");
use App\Controllers\DistribuidorController;
$consulta = new DistribuidorController();

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $usuario = $consulta->editar("SELECT * FROM usuarios WHERE id=$id");
    $id = $usuario['id'];
    $codigo = $usuario['codigo'];
    $nombre = $usuario['nombre'];
    $apellido = $usuario['apellido'];
    $pais = $usuario['pais'];
    $nivelEquipo = $usuario['nivel_de_equipo'];
    $correo = $usuario['correo'];
}


if(isset($_POST['guardar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $codigo = $_POST['codigo'];
    $pais = $_POST['pais'];
    $nivelEquipo = $_POST['nivel_equipo'];
    $correo = $_POST['correo'];
    
    $usuario = $consulta->index("UPDATE `usuarios` SET `codigo`= '$codigo', `nombre` = '$nombre', `pais` = '$apellido', `pais`= '$pais', `nivel_de_equipo`= '$nivelEquipo', `correo` = '$correo' WHERE `id` = $id; ");
    header("location:./index.php");
}
?>

