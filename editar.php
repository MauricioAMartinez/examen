<?php
//llamar datos a editar
$idBorrar = $_POST['id'];
$nombre=$_POST['nombre'];
$estado=$_POST['estado'];
$operacion='editado';
//llenar base 
require_once('conexion.php');
$pdo=getPdo();

//remplazar valores
$sql = "update tareas set nombre = ? , estado= ?,operacion=?  where id = ?";
$consulta = $pdo->prepare($sql);
$consulta->execute([$nombre,$estado,$operacion,$idBorrar]);
//redirigir
header('location:index.php');

?>