<?php
include("conexion.php");
$con = conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$sql = "UPDATE cursos SET nombre='$nombre' WHERE id='$id'";

$query = mysqli_query($con,$sql);

if($query){
    Header("Location: curso.php");
}
?>