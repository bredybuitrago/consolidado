<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Consolidado Paisa</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?= base_url(); ?>temp/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Consolidado Paisa</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#team" class="smoothScroll">BIENVENIDO <strong><?php echo strtoupper ($this->session->userdata('name')) ?></strong></a></li>
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="<?= base_url(); ?>Reservas" class="smoothScroll">RESERVAS</a></li>
				<li><a href="<?= base_url(); ?>Pedidos">PEDIDOS</a></li>
				<li><a href="<?= base_url(); ?>Welcome" class="smoothScroll">LOG OUT</a></li>
			</ul>
		</div>
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>CONSOLIDADO PAISA</h1>
				<h2>RESTAURANTE &amp; BAR</h2>
				<!-- <a href="#gallery" class="smoothScroll btn btn-default">VER MAS</a> -->
			</div>
		</div>
	</div>		
</section>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">GALERIA DE COMIDA</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="<?= base_url(); ?>temp/images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?= base_url(); ?>temp/images/gallery-img1.jpg" alt="gallery img"></a>
				<div>
					<h3>Gamba de limón y romero</h3>
					<span>Mariscos / Camarón / Limón</span>
				</div>
				<a href="<?= base_url(); ?>i<?= base_url(); ?>.jpg" alt="gallery img"></a>
				<div>
					<h3>Limón - Verduras de Romero</h3>
					<span>Tomate / Romero / Limón</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="<?= base_url(); ?>temp/images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?= base_url(); ?>temp/images/gallery-img3.jpg" alt="gallery img"></a>
				<div>
					<h3>Limón - Rosemary Bakery</h3>
					<span>Pan / Romero / Naranja</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="<?= base_url(); ?>temp/images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?= base_url(); ?>temp/images/gallery-img4.jpg" alt="gallery img"></a>
				<div>
					<h3>Ensalada de limón y romero</h3>
					<span>Pollo / Romero / Verde</span>
				</div>
				<a href="<?= base_url(); ?>temp/images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?= base_url(); ?>temp/images/gallery-img5.jpg" alt="gallery img"></a>
				<div>
					<h3>Limón - Romero Pizza</h3>
					<span>Pasta / Romero / Verde</span>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- menu section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Special Menu</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Vegetable ................ <span>$20.50</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Meat ........................... <span>$30.50</span></h4>
				<h5>Meat / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Pork ........................ <span>$40.75</span></h4>
				<h5>Pork / Tooplate / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Orange-Rosemary Salad .......................... <span>$55.00</span></h4>
				<h5>Salad / Rosemary / Orange</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Squid ...................... <span>$65.00</span></h4>
				<h5>Squid / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Orange-Rosemary Shrimp ........................ <span>$70.50</span></h4>
				<h5>Shrimp / Rosemary / Orange</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Prawn ................... <span>$110.75</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Seafood ..................... <span>$220.50</span></h4>
				<h5>Seafood / Rosemary / Lemon</h5>
			</div>
		</div>
	</div>
</section>		


<!-- team section -->
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Chefs del Consolidado Paisa</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<img src="<?= base_url(); ?>temp/images/team1.jpg" class="img-responsive center-block" alt="team img">
				<h4>Paola</h4>
				<h3>Chef menú principal</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<img src="<?= base_url(); ?>temp/images/team2.jpg" class="img-responsive center-block" alt="team img">
				<h4>Linda</h4>
				<h3>Especialista en Pizza</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<img src="<?= base_url(); ?>temp/images/team3.jpg" class="img-responsive center-block" alt="team img">
				<h4>Jenny Ko</h4>
				<h3>Comida Extrangera</h3>
			</div>
		</div>
	</div>
</section>


<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Contactanos</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Mensaje"></textarea>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Evalua Nuestro Servivio">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>


<!-- footer section -->
<footer class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Informacion de Contacto</h2>
				<div class="ph">
					<p><i class="fa fa-phone"></i> Telefono</p>
					<h4>9263758</h4>
				</div>
				<div class="address">
					<p><i class="fa fa-map-marker"></i> Nuestra Localización</p>
					<h4>Calle 98 14 54, Bogotá Chicó</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Horarios</h2>
					<p>Domingos <span>10:30 AM - 10:00 PM</span></p>
					<p>Lun-Vier <span>9:00 AM - 8:00 PM</span></p>
					<p>Sabados <span>11:30 AM - 10:00 PM</span></p>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Siguenos</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>CONSOLIDADO PAISA</h3>
				<p>Copyright © Consolidado Paisa Restaurante & Bar 
                
                | Diseño: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Robinson Marin</a></p>
			</div>
		</div>
	</div>
</section>

<!-- JAVASCRIPT JS FILES -->	
<script src="<?= base_url(); ?>temp/js/jquery.js"></script>
<script src="<?= base_url(); ?>temp/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>temp/js/jquery.parallax.js"></script>
<script src="<?= base_url(); ?>temp/js/smoothscroll.js"></script>
<script src="<?= base_url(); ?>temp/js/nivo-lightbox.min.js"></script>
<script src="<?= base_url(); ?>temp/js/wow.min.js"></script>
<script src="<?= base_url(); ?>temp/js/custom.js"></script>

</body>
</html>