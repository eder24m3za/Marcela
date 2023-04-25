<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM cursos";

$query=mysqli_query($con,$sql);

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
      <title>Cursos</title>
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Cursos</h1><br>

        <div class="row">
          <div class="col-4 col-md-3">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Añadir Curso
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir Curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="insertarCurso.php" method="post">
                      <div class="form-row">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><i class="bi bi-wrench"></i></span>
                          <input type="text" class="form-control" name="nombre" placeholder="Nombre del curso" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-secondary">Guardar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-10 col-md-4">
            <br>

        <table class="table table-hover">
        <thead class="table-secondary">
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th></th>
        <th></th>
        </tr>

        </thead><tbody>
            <?php
            while($row=mysqli_fetch_array($query)){
            ?>

            <tr>
            <td> <?php echo $row['id']?></td>
            <td> <?php echo $row['nombre']?></td>
            <td><a href="actualizarCurso.php?id=<?php echo $row['id']?>" class="btn btn-primary">Editar</a></td>
            <td><a href="deleteCurso.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
            
            <?php
            }
            ?>

        </tbody></table>;
            
          </div>
          <div class="col-4"></div>

        </div>

      </div>

  </main>
  <br>
</body>
</html>