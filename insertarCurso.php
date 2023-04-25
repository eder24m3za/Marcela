<?php
include("conexion.php");
$con = conectar();

$nombre = $_POST['nombre'];

$sql = "INSERT INTO cursos (nombre) VALUES('$nombre')";

$query = mysqli_query($con,$sql);

if($query){
    Header("Location: curso.php");
}
?>