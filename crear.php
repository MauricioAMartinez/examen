<?php
//llamar los nombres 
$nombre=$_POST['nombre'];
$estado=$_POST['estado'];
$operacion='creado';
//conectar base
require_once('conexion.php');
$pdo=getPdo();
//insertar datos
$sql = "INSERT INTO `tareas` ( `nombre`, `estado`, `operacion`) VALUES ( ?, ?, ?);";
$consulta = $pdo->prepare($sql);
$consulta->execute([$nombre,$estado,$operacion]);
//Redirigir
header('location:index.php');
?>
