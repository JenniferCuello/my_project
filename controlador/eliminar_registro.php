<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("delete from labores where id = $id");
    
    if ($sql == 1) {
        echo '<div>registro eliminada correctamente</div>';
    } else {
        echo '<div>Error al eliminar</div>';
    }
}
?>
