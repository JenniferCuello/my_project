<?php

include "modelo/conexiondb.php";

$id_consulta=$_GET["id"];
$sql=$conexion->query("select * from labores where id=$id_consulta");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">

<h3 class="text-center text-secondary">Modificar registro</h3>

<!-- Campo oculto para enviar el ID -->
<input type="hidden" name="id" value="<?= $_GET["id"] ?>">

<?php
include "controlador/modificardb_registro.php";

while ($datos = $sql->fetch_object()) { ?>
    
    <div class="col-md-12">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" value="<?= $datos->id ?>" readonly>
        <input type="hidden" name="id" value="<?= $datos->id ?>"> <!-- ID oculto -->
    </div>

    <div class="col-md-12">
        <label for="labor" class="form-label">LABOR</label>
        <input type="text" class="form-control" name="labor" value="<?= $datos->labor ?>" required>
    </div>

    <div class="col-md-12">
        <label for="fecha" class="form-label">FECHA</label>
        <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>" required>
    </div>

    <div class="col-md-12">
        <label for="cantidad" class="form-label">CANTIDAD</label>
        <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>" required>
    </div>

    <div class="col-md-12">
        <label for="tarifa" class="form-label">TARIFA</label>
        <input type="text" class="form-control" name="tarifa" value="<?= $datos->tarifa ?>" required>
    </div>

    <div class="col-md-12">
        <label for="empleado" class="form-label">EMPLEADO</label>
        <input type="text" class="form-control" name="empleado" value="<?= $datos->empleado ?>" required>
    </div>

    <div class="col-md-12">
        <label for="lote" class="form-label">LOTE</label>
        <input type="text" class="form-control" name="lote" value="<?= $datos->lote ?>" required>
    </div>

<?php } ?>

<div class="col-md-12">
    <button class="btn btn-primary" name="btnmodificar" type="submit" value="ok">Modificar</button>
</div>

</form>

    </body>
</html>