<?php
//llamar base 
require_once('conexion.php');
$pdo=getPdo();
//id o tarea a borrar
$idBorrar = $_POST['id'];
//borrar
$sql = "delete from tareas where id = ?";
$consulta = $pdo->prepare($sql);
$consulta->execute([$idBorrar]);
//redirecionar
header('location:index.php');
?>