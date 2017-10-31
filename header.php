<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Grupo Jardim da Saudade</title>

	<!-- Tabulous -->
	<link href='assets/css/tabulous.css' rel='stylesheet' type='text/css'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<script src="assets/js/jquery-1.12.4.js"></script>
</head>
<body>
	<!-- identificar a página atual e inserir a classe em .container.custom-container -->
	<!-- exemplo: em cemitérios a classe principal do header seria: <div class="container custom-container page-cemiterios"> -->
	<?php 
		$homeCheck = basename($_SERVER['PHP_SELF']);
		if ($homeCheck == 'index.php') {
	?>
	<div class="container custom-container homepage">
	<?php }else{ ?>
	<div class="container custom-container pages">
	<?php } ?>
		<div class="top-banner">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="/jardim-da-saudade">
						<div class="img-box">
							<img src="assets/images/logo.png" alt="" />						
						</div>
						<div class="img-mob">
							<img src="assets/images/logo-mobile.png" alt="" />
						</div>						
					</a>
				</div>
				<div class="col-lg-8 col-md-8 col-xs-8">
					<div class="row">
						<div class="primary-menu col-lg-12 col-md-12 col-xs-12">
							<ul class="box-menu">
								<li><a href="novidades">Novidades</a></li> |
								<li><a href="faq">Perguntas Frequentes</a></li> |
								<li><a href="contato">Contato</a></li>
							</ul>		
						</div>
						<div class="divisor"></div>
						<div class="secondary-menu col-lg-12 col-md-12 col-xs-12">
							<ul class="box-menu">
								<li><a href="cemiterios">Cemitérios</a></li>
								<li><a href="plano-funeral">Plano Funeral</a></li>
								<li><a href="funeraria">Funerária</a></li>
								<li><a href="plano-funeral">Orçamento</a></li>
							</ul>		
						</div>				
					</div>
					<div class="row">
						<div class="mobile-menu">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>			
					</div>											
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<!-- breadcrumbs -->
				<p class="breadcrumbs">Home / Cemitérios / Paciência</p>
				<!-- end breadcrumbs -->
			</div>
			<div class="col-lg-5 col-md-12 col-xs-12">
				<ul class="info-menu">
					<li class="info-funeraria">
						<span>Funerária</span>
						<p>0800 224 225</p>
					</li>
					<li class="info-central">
						<span>Central de vendas</span>
						<p>2595 5151</p>
					</li>
					<li class="info-pause"></li>
				</ul>				
			</div>
		</div>	
	<!-- End .custom-container -->
	</div>
