<?php
include 'includes/querys.php';
$dni = $_GET['dni'];
if($dni == "" or $dni == null){
    ?>
    <script>
        alert("El paramentro dni esta vacio ...redirigiendo");
        window.location.href = "index.php";
    </script>

    <?php
}
if (isset($_GET['update'])){
    $id = $_GET['update'];
    $dni = $_GET['dni'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $carrera = $_GET['carrera'];
    $instance = new querys();
    if($instance->update($id, $dni, $nombre, $apellido, $carrera)){
        header("Location:index.php");
    }else{
        ?>
        <script>
            alert("ha ocurrido un error al actualizar");
        </script>

<?php
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
    <title>Actualizar  registro</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title text-center text-white">Eliminar Registro</h3>
                </div>
                <div class="card-body">
                    <form  class="form-group" method="get">
                        <?php
                        $instance = new querys();
                        $result = $instance->get_data($dni);
                        if($result){
                            ?>
                            <input type="hidden" name="update" value="<?php echo $dni; ?>">
                            <input onKeyDown="if(this.value.length==8 && event.keyCode!=8) return false;" type="number" class="form-control mb-3" name="dni" placeholder="DNI.." required value="<?php echo $result[0]; ?>">
                            <input maxlength="30" minlength="2" type="text" class="form-control mb-3" name="nombre" required placeholder="Nombre.."  value="<?php echo $result[1] ?>">
                            <input type="text" maxlength="30" minlength="2" class="form-control mb-3" name="apellido" required placeholder="Apellido.." value="<?php echo $result[2]; ?>">
                            <input type="text" maxlength="30" class="form-control mb-3" name="carrera" required placeholder="Carrera..."  value="<?php echo $result[3] ?>">
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                            <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <?php

                        }else
                        {
                            ?>
                            <div class="alert alert-danger">No se han encotrado registros con el DNI <strong> <?php  echo $dni; ?></strong> </div>

                        <?php
                        }

                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.js"></script>
</body>
</html>