<?php
include('../../adm_header.php');
?>
<main>

	<section>
		<form method="post" name="fomulario1" action="">
			<div class="datos">
				<label for="nombre_especie">Nombre de especie: </label>
				<input type="text" name="nombre_especie" placeholder="Nombre de especie" required="" />
			</div>
			<div class="datos">
				<br>
				<label for="nombre_cientifico">Nombre científico: </label>
				<input type="text" name="nombre_cientifico" placeholder="Nombre cientifico" required="" />
			</div>
			<div class="datos">
				<br>
				<label for="decripcion">Descripción: </label>
				<textarea name="textarea" rows="5" cols="85"></textarea>
			</div>
			<div class="datos">
				<label for="habitat">Habitat: </label>
				<input type="text" name="habitat" placeholder="Habitat" required="" />
			</div>
			<input type="submit" class="boton" name="guardar" value="   Guardar   " />
		</form>
	</section>

</main>
<?php
include('../../adm_footer.php');
?>