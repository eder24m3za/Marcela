<?php
include("conexion.php");

$con = conectar();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$curso_id = $_POST['curso'];

$sql = "INSERT INTO alumnos (nombre,telefono,curso_id) VALUES('$nombre','$telefono','$curso_id')";

$query = mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
}
?>