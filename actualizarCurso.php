<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql="SELECT * FROM cursos WHERE id='$id'";

$query=mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <title>Curso</title>
    <title>Document</title>
</head>
<body>
<div class="container"><br><br>
        <div class="row">
            <h1 class="text-center">EDITAR CURSO</h1>
            <div class="col-4"></div>
            <div class="col-4">
                
      <form action="updateCurso.php" method="post">
      <div class="form-row">
      <div class="input-group mb-3">
              <input type="hidden" name="id" value="<?php  echo $row['id'] ?>">
              </div>
           <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-wrench"></i></span>
              <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>" required >
              </div>
              <div class="modal-footer">
             <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">Guardar</button>
      </div>
           </div>
         </form>
            </div>
        </div>
    </div>
</body>
</html>