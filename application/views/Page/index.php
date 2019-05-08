<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kaly Gasy | Acceuil</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pulse Restaurant HTML Template">
	<meta name="keywords" content="pulse, restaurant, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?php echo base_url("assets/img/favicon.ico");?>" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/flaticon.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css");?>">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="site-logo">
				<h2>KALY Gasy<span>.</span></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="<?php echo base_url("index.php/welcome/index");?>" class="active">Acceuil</a></li>
				<li><a href="<?php echo base_url("index.php/welcome/menu");?>">Nos menus</a></li>
				<li><a href="<?php echo base_url("index.php/welcome/apropos");?>">A propos de nous</a></li>
				          
			</ul>
			<div class="header-right">
			<p><span>Reservations</span> <i class="fa fa-phone"></i> +261 34 20 447 45</p>	
			<p><i class="fa fa-user"></i><a href="<?php echo base_url("index.php/welcome/connexion");?>">  Se connecter</a></p>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets/img/slider/slider-4c.jpg");?>">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Ramanonaka<span>.</span></h2>
						<p>Par Selesy</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets/img/slider/slider-7.jpg");?>">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Koba<span>.</span></h2>
						<p>Par Raleva</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets/img/slider/slider-6.jpg");?>">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Ravitoto<span>.</span></h2>
						<p>Par Naly</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->



	





	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="section-title">
				<i class="flaticon-022-tray"></i>
				<h2>Nos Services</h2>
				<p>de qualités et sur mesure toute l’année</p>
			</div>
			<div class="row services">
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-005-coffee-1"></i>
					<h3>Kaly maraina</h3>
					<p>Il est servi tous les jours de 6h00 à 10h00, c’est un buffet à volonté de type petit-déjeuner malgache.</p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-031-burrito"></i>
					<h3>Tsakitsaky</h3>
					<p>Découvrez nos goûters, saveurs et plaisirs gourmands. Il y en aura pour tous les goûts.</p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-007-spaguetti"></i>
					<h3>Kaly atoandro</h3>
					<p>Plat + dessert | Formule Midi du lundi au Samedi hors jours fériés.</p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-008-soup"></i>
					<h3>Kaly hariva</h3>
					<p>Le menu est différent chaque jour et comprend un potage, un dîner chaud complet et un dessert.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->



	<!-- Menu section -->
	<section class="menu-section spad set-bg" data-setbg="<?php echo base_url("assets/img/menu-bg.jpg");?>">
		<div class="container">
			<div class="section-title text-white">
				<i class="flaticon-022-tray"></i>
				<h2>Nos Menus</h2>
			</div>
			<!-- menu tab nav -->
			<ul class="menu-tab-nav nav nav-tabs" role="tablist">
			<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Kaly maraina</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Tsakitsaky</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Kaly atoandro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Kaly hariva</a>
				</li>
		
			</ul>
			<div class="tab-content menu-tab-content">
				<!-- single tab content -->
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Vary sosoa sy kitoza</h5>
								<div class="mi-meta">
									<p>Riz salé avec sauce tomate</p>
									<div class="menu-price">2.500 Ar</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Mofogasy sy dite</h5>
								<div class="mi-meta">
									<p>Déjeuner special malgache</p>
									<div class="menu-price">500 Ar</div>
								</div>
							</div>
							
							<!-- menu item -->
							<div class="menu-item">
								<h5>Menakely</h5>
								<div class="mi-meta">
									<p>Donut malgache</p>
									<div class="menu-price">700 Ar</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Ovy frity</h5>
								<div class="mi-meta">
									<p>Pomme frite</p>
									<div class="menu-price">1.500 Ar</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Pakopako</h5>
								<div class="mi-meta">
									<p>d'origine Mayotte</p>
									<div class="menu-price">600 Ar</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Ravitoto sy henankisoa</h5>
								<div class="mi-meta">
									<p>Feuille de manioc au porc</p>
									<div class="menu-price">4.000 Ar</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Akoho gasy rony</h5>
								<div class="mi-meta">
									<p>Bouillon de poulet</p>
									<div class="menu-price">3.500 Ar</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Lasopy tongotr'omby</h5>
								<div class="mi-meta">
									<p>Soupe au pied de boeuf</p>
									<div class="menu-price">3.000 Ar</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Vary amin'anana sy henabaolina</h5>
								<div class="mi-meta">
									<p>Riz avec bread et boulette de viande</p>
									<div class="menu-price">3.000 Ar</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Menu section end -->

	

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- map -->
		<div class="map-warp" id="map-canvas"></div>
		<div class="footer-bg-area set-bg" data-setbg="<?php echo base_url("assets/img/footer-bg.jpg");?>">
			<div class="contact-form-area">
				<div class="container">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form-warp">
							<div class="section-title">
								<i class="flaticon-026-chicken-1"></i>
								<h2>Contactez-nous</h2>
							</div>
							<!-- contact form -->
							<form class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Nom">
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="Adresse e-mail">
									</div>
									<div class="col-md-12">
										<textarea placeholder="Tapez votre message"></textarea>
										<div class="text-center">
											<button class="site-btn">Envoyer</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> - Haja Faniry | All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
	<script src="<?php echo base_url("assets/js/owl.carousel.min.js");?>"></script>
	<script src="<?php echo base_url("assets/js/circle-progress.min.js");?>"></script>
	<script src="<?php echo base_url("assets/js/main.js");?>"></script>


	<!-- load for map -->
	<script src="<?php echo base_url("assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo");?>"></script>
	<script src="<?php echo base_url("assets/js/map.js");?>"></script>

    </body>
</html>