<?php

include('../../adm_header.php');


$miconexion->conectar("localhost", "root", "", "podocarpusdb");

if (isset($_FILES['img'])) {
    $nombreImg = $_FILES['img']['name'];
    $ruta = $_FILES['img']['tmp_name'];
    $destino = "imagenes/" . $nombreImg;
    if (copy($ruta, $destino)) {
        //$sql="INSERT INTO `tbimg`(nombre,ruta) VALUES ('$nombreImg','$destino')";
        $miconexion->consulta("INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')");
        //$res = mysqli_query($cn, mysqli_query($con, "INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')"););
        if ($miconexion) {
            echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../adm_birds_internas/insert.php";</script>';
        } else {
            echo '<script type="text/javascript"> alert("Fallido"); window.location="../adm_birds_internas/insert.php";</script>';
            die("Error" . mysqli_error($miconexion));
        }
    }
}


/*
error_reporting(E_ALL ^ E_NOTICE);
$miconexion->conectar("localhost", "root", "", "podocarpusdb");
if ($miconexion->consulta("INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]',1)") == 1) {
    echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../adm_birds__internas/insert.php";</script>';
} else {
    echo '<script>alert("Fallido");</script>';
}
$miconexion = new clase_mysqli();
$miconexion->conectar("localhost", "root", "","podocarpusdb");

if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
error_reporting(E_ALL ^ E_NOTICE);
/*$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
$miconexion->consulta("INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','das')");
//mysqli_query($con, "INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')");
//echo '<script>
    alert("Registrado con exito");
</script>';
//echo '<script>
    location.href = "../adm_birds_internas/insert.php"
</script>';
require_once 'conexion.php';
$sql= mysql_query("select * from aves");
while($res= mysql_fetch_array($sql)){
echo '<img src="'.$res[" imagen"].'" width="100" heigth="100"><br>';

}
//header("Location: ../adm_birds_internas/insert.php");
//mysqli_close($miconexion);
//echo '<script>
    location.href = "insertardatos.php"
</script>';
}*/

?>
