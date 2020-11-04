<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Listar registros</title>
</head>
<body>
<div class="row">
    <div class="col-12 col-md-8 mx-auto">
        <div class="card-header bg-success">
            <h3 class="card-title text-white text-center ">Listado de Alumnos</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Carrera</th>
                        <th>Opciones</th>
                    </tr>
                    <?php
                    include 'includes/querys.php';
                    $data = new querys();
                    $result = $data->read();
                    foreach ($result as $r) {
                        echo "<tr>";
                        echo "<td>" . $r[0] . "</td>";
                        echo "<td>" . $r[1] . "</td>";
                        echo "<td>" . $r[2] . "</td>";
                        echo "<td>" . $r[3] . "</td>";
                        echo "<td><a class='btn btn-danger btn-sm' href='delete.php?dni=$r[0]'>Eliminar</a> <a class='btn btn-primary btn-sm' href='update.php?dni=$r[0]'>Actualizar</a>";
                    }
                    ?>
                </table>
                <div class="float-right">
                    <a href="add.php" class="btn btn-primary ">Agregar</a>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>