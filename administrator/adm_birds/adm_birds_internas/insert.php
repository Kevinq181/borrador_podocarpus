<?php
include('../../adm_header.php');
?>
<main>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
	<link href='../adm_birds_css/estiloI.css' rel='stylesheet' type='text/css' />


	<form class='form' method="post" action="../adm_birds_dll/insertardatos.php" enctype="multipart/form-data">
		<h2>REGISTRAR ESPECIE</h2>
		<div class="">
			<div class="form_item col-12 col-lg-5">
				<input type="nombre" name="nombre" id="nombre" class="form_input" required>
				<label for="nombre" class="form_label">NOMBRE DE ESPECIE</label>
			</div>
			<div class="form_item col-12 col-lg-5">
				<input type="nombre_cientifico" name="nombre_cientifico" id="nombre_cientifico" class="form_input" required>
				<label for="nombre_cientifico" class="form_label">NOMBRE CIENTIFICO</label>
			</div>
		</div>
		<div class="form_item col-12 col-lg-5">
			<input type="habitat" name="habitat" id="habitat" class="form_input" required>
			<label for="habitat" class="form_label">HABITAT</label>
		</div>

		<div class="row justify-content-center">
			<div class="form_item col-11">
				<input class="form_input form_upload" type="file" name="img" id="foto" required>
				<label class="form_label">ELEGIR IMAGEN</label>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="form_item col-11">
				<textarea class="form_textarea" id="textarea" name="descripcion" rows="3" cols="444" required ></textarea>
				<label for="textarea" class="form_label">DESCRIPCIÓN</label>
			</div>
		</div>

		<div class="row justify-content-center">
			<button class="submit" type="submit">REGISTRAR</button>
		</div>
	</form>

	
</main>

<?php
include('../../adm_footer.php');
?>

<!--?php
error_reporting(E_ALL ^ E_NOTICE);
$miconexion->conectar("localhost", "root", "", "podocarpusdb");
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino = "imagenes/" . $foto;
copy($ruta, $destino);

if($miconexion->consulta("INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')")==1){
	include('../adm_birds_dll/insertardatos.php');
}else{
	echo '<script>location.href="../adm_birds_internas/insert.php"</script>';
}



//mysqli_query($con, "INSERT INTO aves (nombre,nombre_c,descripcion,habitat, imagen) VALUES ('$_POST[nombre]', '$_POST[nombre_cientifico]', '$_POST[descripcion]', '$_POST[habitat]','$destino')");
//echo '<script>alert("Registrado con exito");</script>';
//header("Location: ../adm_birds_internas/insert.php");
//echo '<script>location.href="../adm_birds_internas/insert.php"</script>';
//mysqli_close($miconexion);
?>

