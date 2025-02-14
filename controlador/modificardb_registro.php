<?php

if (!empty($_POST["btnmodificar"])) {


    if( !empty($_POST["labor"]) and
        !empty($_POST["fecha"]) and
        !empty($_POST["cantidad"]) and
        !empty($_POST["tarifa"]) and
        !empty($_POST["empleado"]) and
        !empty($_POST["lote"])){

            $id=$_POST["id"];
            $labor=$_POST["labor"];
            $fecha=$_POST["fecha"];
            $cantidad=$_POST["cantidad"];
            $tarifa=$_POST["tarifa"];
            $empleado=$_POST["empleado"];
            $lote=$_POST["lote"];

            $stmt = $conexion->prepare("UPDATE labores SET labor=?, fecha=?, cantidad=?, tarifa=?, empleado=?, lote=? WHERE id=?");
            $stmt->bind_param("ssddssi", $labor, $fecha, $cantidad, $tarifa, $empleado, $lote, $id);
            $stmt->execute();
            
            if ($sql==1) {
                header("location:index.php");
            }else {
                echo "<div> class='alert alert-danger'error al modificar el registro</div>>";
            }

    }else {
        echo "<div> class='alert alert-warning'campos vacios</div>>";
    }
}

?>