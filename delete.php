<?php
$dni = $_GET['dni'];

if (isset($_GET['delete'])){
    include 'includes/querys.php';
    $instance = new querys();
    $instance->delete($_GET['delete']);
    header("Location:index.php");
}

if($dni == "" or $dni == null){
    ?>
    <script>
        alert("El paramentro dni esta vacio ...redirigiendo");
        window.location.href = "index.php";
    </script>
<?php
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
    <title>Eliminar registro</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title text-center text-white">Eliminar Registro</h3>
                </div>
                <div class="card-body">
                    <form  class="form-group" method="get">
                        <input type="hidden" name="delete" value="<?php echo $dni; ?>">
                        <div class="alert alert-danger">Desea elimiar el registro con DNI <strong><?php  echo $dni;  ?></strong> </div>
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                        <a href="index.php" class="btn btn-primary">Cancelar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.js"></script>
</body>
</html>