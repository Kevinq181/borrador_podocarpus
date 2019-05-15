<?php
include("../../security/security.php");

$con = mysqli_connect ("localhost", "root", "", "podocarpusdb");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    //mysqli_query($con, "SELECT * FROM aves");
    $nombre = $_POST[nombre];
    mysqli_query($con, "INSERT INTO aves (nombre,nombre_c,descripcion,habitat) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]')");
    mysqli_close($con);

    echo '<script>alert("Registrado con exito");</script>';
    echo '';
}


?>