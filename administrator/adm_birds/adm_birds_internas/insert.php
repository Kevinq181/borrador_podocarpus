<?php
include('../../adm_header.php');
?>
<main>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
	<link href='../adm_birds_css/insert.css' rel='stylesheet' type='text/css' />
	
	
	<form class='form' method="post" action="../adm_birds_dll/insertardatos.php">
		<h2>ESPECIE</h2>
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
					<input class="form_input form_upload" type="file" id="file" name="file" multiple>
					<label class="form_label">ELEGIR IMAGEN</label>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="form_item col-11">
					<textarea class="form_textarea" id="textarea" name="descripcion" rows="3" cols="444" required></textarea>
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