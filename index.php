<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros labores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
  

</head>
<body>
        <nav class="navbar" style="background-color: #FFEED8;">
        <div class="container-fluid">
            <a class="navbar-brand">
            <img src="https://e7.pngegg.com/pngimages/678/741/png-clipart-skill-organization-uttar-pradesh-sales-marketing-registration-acts-text-logo-thumbnail.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">    
            REGISTRO DE LABORES </a>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </nav>


  <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary"> Registro</h3>
        <?php
        include  "modelo/conexiondb.php";
        include "controlador/eliminar_Registro.php";
        ?>
        <?php 
        include  "controlador/reigstro.php";
        $sql = $conexion->query("SELECT MAX(id) AS ultimo_id FROM labores");
        $ultimo_id = $sql->fetch_assoc()["ultimo_id"] ?? 0; 
        $proximo_id = $ultimo_id + 1; 
        ?>
            <div class="col-md-12">
                <label for="labor" class="form-label">ID</label>
                <input type="number" class="form-control" name="id" value="<?= $proximo_id; ?>" required disabled >
            </div>

            <div class="col-md-12">
                <label for="labor" class="form-label">LABOR</label>
                <input type="text" class="form-control" name="labor" required>
            </div>

            <div class="col-md-12">
                <label for="fecha" class="form-label">FECHA</label>
                <input type="date" class="form-control" name="fecha" required>
            </div>

            <div class="col-md-12">
                <label for="cantidad" class="form-label">CANTIDAD</label>
                <input type="number" class="form-control" name="cantidad" required>
            </div>

            <div class="col-md-12">
                <label for="tarifa" class="form-label">TARIFA</label>
                <input type="number" class="form-control" name="tarifa" required>
            </div>

            <div class="col-md-12">
                <label for="empleado" class="form-label">EMPLEADO</label>
                <input type="text" class="form-control" name="empleado" required>
            </div>

            <div class="col-md-12">
                <label for="lote" class="form-label">LOTE</label>
                <input type="text" class="form-control" name="lote" required>
            </div>
    
            <div class="col-md-12">
                <button class="btn btn-primary" name="btnregistrar" type="submit" value="ok">Registrar</button>
            </div>
        </form>
    
        <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Labor</th>
                    <th scope="col">fecha</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Lote</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexiondb.php";
                    $sql = $conexion->query(" select * from labores");
                    while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->labor ?></td>
                        <td><?= $datos->fecha ?></td>
                        <td><?= $datos->cantidad ?></td>
                        <td><?= $datos->tarifa ?></td>
                        <td><?= $datos->empleado ?></td>
                        <td><?= $datos->lote?></td>
                        <td> 
                            <a href="modificar_registro.php? id=<?=$datos->id?>" class="btn btn small btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="index.php? id=<?=$datos->id?>" class="btn btn small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
