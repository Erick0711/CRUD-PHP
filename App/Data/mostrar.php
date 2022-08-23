<?php
require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/autoload.php");
use App\Controllers\DistribuidorController;

$consulta = new DistribuidorController();
$mostrarTodos = $consulta->index("SELECT * FROM usuarios");
?>