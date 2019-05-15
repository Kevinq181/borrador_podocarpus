<?php
include("../../security/security.php");



if (!$miconexion) {
    die('No se ha podido conectar a la base de datos');
}else{
    echo $_POST['nombre'];

    echo $_POST['nombre_cientifico'];
    
    echo $_POST['descripcion'];
    
    echo $_POST['habitat'];
}

$result = mysqli_query("insert into aves(nombre, nombre_c, descripcion,habitat) values ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]')", $miconexion);

?>