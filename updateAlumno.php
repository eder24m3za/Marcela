<?php
include("conexion.php");
$con = conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$curso_id = $_POST['curso'];

$sql = "UPDATE alumnos SET nombre='$nombre', telefono='$telefono', curso_id='$curso_id' WHERE id='$id'";

$query = mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
}
?>