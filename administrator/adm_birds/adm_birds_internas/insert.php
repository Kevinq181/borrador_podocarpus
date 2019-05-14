<?php
include('../../adm_header.php');
include('../adm_birds_dll/insertardatos.php');
?>
<main>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
	<link href='../adm_birds_css/insert.css' rel='stylesheet' type='text/css' />
	<form class='form' method="post" action="insertardatos.php">
		<h2>ESPECIE</h4>
			<div class="">
				<div class="form_item col-12 col-lg-5">
					<input type="name" id="nombre" class="form_input" required>
					<label for="name" class="form_label">NOMBRE DE ESPECIE</label>
				</div>
				<div class="form_item col-12 col-lg-5">
					<input type="name" id="nombre_cientifico" class="form_input" required>
					<label for="name" class="form_label">NOMBRE CIENTIFICO</label>
				</div>
			</div>
			<div class="form_item col-12 col-lg-5">
				<input type="name" id="habitat" class="form_input" required>
				<label for="name" class="form_label">HABITAT</label>
			</div>

			<div class="form_item col-12 col-lg-5">
				<select class="form_select" id="categoria" required>
					<option class="form_option" value="" disabled selected>SELECCIONAR CATEGORIA</option>
					<option class="form_option" value="">AVES</option>
				</select>
				<label class="form_label">CATEGORIA</label>
			</div>

			</div>

			<div class="row justify-content-center">
				<div class="form_item col-11">
					<input class="form_input form_upload" type="file" id="file" name="file" multiple required>
					<label class="form_label">ELEGIR IMAGEN</label>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="form_item col-11">
					<textarea class="form_textarea" id="textarea" name="textarea" rows="3" cols="444" required></textarea>
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