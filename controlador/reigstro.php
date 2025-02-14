<div class="container mt-3">
<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["labor"]) and !empty($_POST["fecha"]) and !empty($_POST["cantidad"]) and !empty($_POST["tarifa"]) and !empty($_POST["empleado"]) and !empty($_POST["lote"]))  { 
     
        $labor = $_POST["labor"];
        $fecha = $_POST["fecha"];
        $cantidad = $_POST["cantidad"];
        $tarifa = $_POST["tarifa"];
        $empleado = $_POST["empleado"];
        $lote = $_POST["lote"];

        $sql = $conexion->query("INSERT INTO labores ( labor, fecha, cantidad, tarifa, empleado, lote) 
                                 VALUES ('$labor', '$fecha', '$cantidad', '$tarifa', '$empleado', '$lote')");

    }if ($sql) {
             echo '<div class="alert alert-success">✅ Datos guardados correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">❌ Error al registrar: ' . $conexion->error . '</div>';
        }   
    } else {
        echo '<div class="alert alert-warning">⚠️ Por favor, llene todos los campos</div>';
    }
?>
</div>
