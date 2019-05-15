<?php
	include('../adm_header.php');
?>
<main>
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="adm_birds_css/estilos.css">
    <link rel="stylesheet" href="adm_birds_css/fontello.css">
    <div class="birds_principal">
        <img src="adm_birds_img/" alt="">
        <h2 class="titulo_home">BIENVENIDO AL "ADMINISTRADOR DE AVES"</h2>
        <div class="botones_home">
            <div class="ingresar"><a class="icon-insertar" href="adm_birds_internas/insert.php"> | Insertar</a></div>
            <div class="mod"><a class="icon-mod" href="adm_birds_internas/update.php"> | Modificar</a></div>
            <div class="eli"><a class="icon-eli" href="adm_birds_internas/delete.php"> | Eliminar</a></div>
        </div>

    </div>

</main>
<?php
	include('../adm_footer.php');
?>
