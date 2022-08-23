<?php
require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/autoload.php");
use App\Controllers\DistribuidorController;

if(isset($_GET['borrar'])){
    $id = $_GET['borrar'];
    $consulta = new DistribuidorController();
    $mostrarTodos = $consulta->eliminar("UPDATE usuarios SET estado=0 WHERE id=$id");
    header("location: ../../index.php");
}

?>
