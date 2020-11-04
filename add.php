<?php
if(isset($_POST['dni'])){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];
    require 'includes/querys.php';
    $query = new querys();
    if ($query->create($dni, $nombre, $apellido, $carrera)){
        header('Location:index.php');
    }
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Agregar registro</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title text-white text-center">Agregar Alumno</h3>
                </div>

                <div class="card-body">
                    <form action="" class="form-group" method="post">
                        <input onKeyDown="if(this.value.length==8 && event.keyCode!=8) return false;" type="number" class="form-control mb-3" name="dni" placeholder="DNI.." required>
                        <input maxlength="30" minlength="2" type="text" class="form-control mb-3" name="nombre" required placeholder="Nombre..">
                        <input type="text" maxlength="30" minlength="2" class="form-control mb-3" name="apellido" required placeholder="Apellido..">
                        <input type="text"  maxlength="30" minlength="2" class="form-control mb-3" name="carrera" required placeholder="Carrera...">
                        <button class="btn btn-primary" type="submit">Guardar Registro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.js"></script>
</body>
</html>