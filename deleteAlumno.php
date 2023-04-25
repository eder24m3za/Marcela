<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");
 
    $Database = new Database;
 
    $conexion = $Database -> conexion() ;

    $id = $_GET['id'];

    $sql = "UPDATE FROM consola WHERE id='$id'";

    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>