<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaly gasy | Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->		<!-- Favicon -->   
	<link href="<?php echo base_url("assets/img/favicon.ico");?>" rel="shortcut icon"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css");?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animate/animate.css");?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css");?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animsition/css/animsition.min.css");?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css");?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.css");?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/util.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css");?>">
<!--===============================================================================================-->


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Connexion
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="S'il vous plait, entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Nom d'utilisateur">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "S'il vous plait, entrez votre mot de passe">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> <a href="<?php echo base_url("index.php/welcome/admin");?>">Se connecter</a>
						</button>
					
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
					
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/bootstrap/js/popper.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/select2/select2.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/js/mains.js");?>"></script>

</body>
</html>