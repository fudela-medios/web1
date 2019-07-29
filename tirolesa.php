<!DOCTYPE HTML>
<html>
	<head>
		<title>FOTOGRAFÍAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="assets/css/matriz.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shotcut icon" href="assets/css/images/logo4.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/galeria.css">
	</head>
	<body >
		<div id="page-wrapper">

			<!-- Header -->
				<?php 
				    require 'menu.php';
				?>
			<!-- Highlights -->
			<div style="display: none;" class="modal">
				<div class="modal_boton_d">&#60;</div>
				<img class="modal_img" src="" >
				<div class="modal_boton">X</div>
				<div class="modal_boton_i">&#62;</div>		
			</div>
				<div class="barra-regreso">
					<div class="contenedor-barra">
						<div class="elementos-barra">
							<a class="lugar" href="index.php">
								<span class="lugar-barra">Inicio/</span>
							</a>
							<a class="lugar" id="lugar-galeria" href="galeria.php">
								<span class="lugar-barra">Galer&iacute;a/</span>
							</a>
							<a class="lugar" href="tirolesa.php">
								<span class="lugar-barra">Tirolesa</span>
							</a>
						</div>
						<div class="elementos-barra">
							<div class="item-barra">
								<button class="boton-regresar" onclick="redireccionar();">Regresar</button>	
							</div>
						</div>					
					</div>
				</div>
			<div>
				<!-- -------------------- Tirolesa --------------------- -->
				<h2 align="center">Tirolesa</h2>
				<div class="galeria">
					<div class="contenedor_imagen">
						<div class="galeria_item">
							<img class="galeria_img" src="assets/css/images/catalogo/tirolesa/1.jpg">
						</div>
					</div>
					<div class="contenedor_imagen">
						<div class="galeria_item">
							<img class="galeria_img" src="assets/css/images/catalogo/tirolesa/2.jpg">
						</div>
					</div>
					<div class="contenedor_imagen">
						<div class="galeria_item">
							<img class="galeria_img" src="assets/css/images/catalogo/tirolesa/3.jpg">
						</div>
					</div>
					<div class="contenedor_imagen">
						<div class="galeria_item">
							<img class="galeria_img" src="assets/css/images/catalogo/tirolesa/4.jpg">
						</div>
					</div>
					<div class="contenedor_imagen">
						<div class="galeria_item">
							<img class="galeria_img" src="assets/css/images/catalogo/tirolesa/5.jpg">
						</div>
					</div>
				</div>
			</div>
			<div class="espacio-menu"></div>
			</div>
			<?php
    			require 'copy.php'; 
    		?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="assets/js-mobile/jquery.mobile-1.4.5.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script type="text/javascript">
			    document.oncontextmenu = function(){return false}
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
			</script>
				<script src="assets/js/modal14.js"></script>
		</div>
	</body>
</html>