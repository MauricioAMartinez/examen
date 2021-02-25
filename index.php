<?php
//Generar conexion a la base 
require_once('conexion.php');
$pdo=getPdo();
//Llamar la base 
$sql = "SELECT * FROM tareas ";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$usuarios=$consulta->fetchALL(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apptareas</title>
    <style>
    table,
        th,
        td {
            border: #333333 solid 2px;
            border-collapse: collapse;
        }
  </style>
</head>
<body>


<div>
<table class="default">
<tr>
 <td>ID</td>
 <td>Nombre</td>
 <td>Estado</td>
 <td>operacion</td>
</tr>
<?php
foreach ($usuarios as $usuario) { ?>
<tr>
    <td><?php echo $usuario['id']; ?></td>
    <td><?php echo $usuario['nombre'] ?></td>
    <td><?php echo $usuario['estado'] ?></td>
    <td><?php echo $usuario['operacion'] ?></td>
</tr>
<?php } ?>
</table>
</div>

<div>
<a href="crear.html"><p>Crear</p></a>
<a href="editar.html"><p>Editar</p></a>
<a href="borrar.html"><p>Eliminar</p></a>
</div>

</body>
</html>

