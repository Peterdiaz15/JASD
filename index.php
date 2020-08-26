<!DOCTYPE html>
<html>
<head>
	<title>JASD</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">	
</head>
<body>
<div class="container-fluid">
<?php 
	include 'php/menu.php';
 ?>
 <div class="row" id="banner">
 	<div class="col-12">
 		<img src="img/banner1.png" width="100%">
 	</div>
 </div>
 <div class="row">
 	<div class="col-12 display-flex" id="texto-productos">
 		<h2 class="margin-auto espacio titulo">Productos</h2>
 	</div>
 </div>
 <div class="row display-flex" id="productos">
 	<div class="margin-auto row">
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-1.png" class="margin-auto" id="img-producto" data-toggle="modal" data-target="#modalNoRealizado">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Stickers para bicis</h4>
 			</div>
 		</div>
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-2.png" class="margin-auto" id="img-producto">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Sublimado</h4>
 			</div>
 		</div>
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-3.png" class="margin-auto" id="img-producto">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Diseño de vinil para motos</h4>
 			</div>
 		</div>
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-4.png" class="margin-auto" id="img-producto">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Rotulado de autos</h4>
 			</div>
 		</div>
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-5.png" class="margin-auto" id="img-producto">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Diseño de playeras</h4>
 			</div>
 		</div>
 		<div class="col-6 col-md-4 row">
 			<div class="col-12 display-flex padding-cont">
 				<img src="img/imagen-6.png" class="margin-auto" id="img-producto">
 			</div>
 			<div class="col-12 display-flex padding-cont">
 				<h4 class="margin-auto" id="texto-pr">Diseño de tarjetas y lonas</h4>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="row" id="ubicacion">
 	<div class="col-12 display-flex">
 		<h2 class="titulo margin-auto espacio">Ubicación</h2>
 	</div>
 	<div class="col-12">
 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d936.4455532137032!2d-101.18207757077153!3d20.143131558231804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cfabefff9b5bf%3A0x8d402e65397625a2!2sSebasti%C3%A1n%20Lerdo%20de%20Tejada%2033%2C%20Zona%20Centro%2C%2038980%20Uriangato%2C%20Gto.!5e0!3m2!1ses!2smx!4v1598129195716!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 	</div>
 	<div class="col-12 display-flex">
 		<h5 class="margin-auto espacio titulo">Lerdo de Tejada #17 C Col. Centro Uriangato Gto Tel: <a href="tel:4451119595" class="numero">445 111 9595</a></h5>
 	</div>
 </div>
 <div class="row" id="contacto">
 	<div class="col-12 display-flex">
 		<h2 class="titulo margin-auto espacio">Contacto</h2>
 	</div>
 	<div class="col-12 display-flex" id="formulario">
 		<form class="margin-auto">
 			<div class="form-group">
 				<label for="exampleInputEmail1">Nombre :</label>
 				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 			</div>
 			<div class="form-group">
 				<label for="exampleInputPassword1">Correo Eléctronico :</label>
 				<input type="password" class="form-control" id="exampleInputPassword1">
 			</div>
 			<div class="form-group">
 				<label for="exampleInputPassword1">Comentario :</label>
 				 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 			</div>
 			<div class="form-group display-flex">
 				<button type="submit" class="btn btn-primary margin-auto">ENVIAR</button>
 			</div>
 			
 		</form>
 	</div>
 	<div class="col-12 display-flex">
 		<h3 class="titulo margin-auto espacio">O contactanos por Whatsapp  <span><a href="https://wa.link/gvh1r1" target="blank"><img src="img/whatsapp.png" height="40px"></a></span></h3>
 	</div>
 </div>
 <?php
 	include 'php/modal-sticker.php'; 
 	include 'php/footer.php';
  ?>
</div>
<a class="back-to-top" style="color: white; text-decoration: none; border-radius: 5px;">Volver arriba</a>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>