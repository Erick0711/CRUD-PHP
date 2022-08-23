<?php
require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/autoload.php");
use App\Controllers\DistribuidorController;
$consulta = new DistribuidorController();

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['codigo'];
    $codigo = $_POST['codigo'];
    $pais = $_POST['pais'];
    $nivelEquipo = $_POST['nivel_equipo'];
    $correo = $_POST['correo'];
    
    $usuario = $consulta->index("INSERT INTO `usuarios` (`id`, `codigo`, `nombre`, `apellido`, `pais`, `nivel_de_equipo`, `correo`, `estado`) VALUES (NULL, '$codigo', '$nombre', '$apellido', '$pais', '$nivelEquipo', '$correo', '1'); ");
    header("location:./index.php");
}

?>
