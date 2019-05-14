<?php
	include('../adm_header.php');
?>
<main>
	<?php
		$miconexion->consulta("select * from usuarios");
		$miconexion->verconsulta();
	?>
</main>
<?php
	include('../adm_footer.php');
?>