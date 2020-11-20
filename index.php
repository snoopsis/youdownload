<?php
// Include databse and login scripts file
require_once 'include/database.php';
session_start();

include "include/login.php";
include "include/register.php";

?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="one-page/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="one-page/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<title>Baixe do Youtube Videos e Musicas Online</title>
	<meta name="description" content="Baixe do Youtube tudo que precisar seja em Formato de Video MP4 ou Audio MP3, Online, Gratuito e sem Instalacao." />

</head>

<body class="stretched" data-loader="11" data-loader-color="#543456">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">
					
					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo"><img src="one-page/images/canvasone.png" alt="Baixe do Youtube Logo"></a>
						<a href="index.php" class="retina-logo"><img src="one-page/images/canvasone.png" alt="Baixe do Youtube Logo"></a>
					</div><!-- #logo end -->
    
				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen">

			<div class="slider-parallax-inner">

				<div class="full-screen dark section nopadding nomargin noborder ohidden" style="background-image: url('one-page/images/page/4.jpg'); background-size: cover; background-position: center center;">

					<div class="row nomargin" style="position: relative; z-index: 2;">
						<div class="offset-lg-7 col-lg-5 full-screen" style="background-color: rgba(0,0,0,0.45);">
							<div class="vertical-middle col-padding">
								<div class="heading-block nobottomborder bottommargin-sm">
									<h1 style="font-size: 22px;">Cadastro e Uso Gratuito</h1>
									<span style="font-size: 16px;" class="t300 capitalize ls1 notopmargin">Comece agora a baixar seus videos ou musicas.</span>
								</div>
								<form action="" class="clearfix" name="login-form" id="login-form" style="max-width: 300px;" method="post">
									<div class="col_full <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
										<label for="login-form-username" class="capitalize t600">Usuario</label>
										<input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control not-dark" />
										<span class="help-block"><?php echo $username_err; ?></span>
									</div>
									<div class="col_full">
										<label for="login-form-password" class="capitalize t600">Senha</label>
										<input type="password" name="password" class="form-control not-dark" />
										<span class="help-block"><?php echo $password_err; ?></span>
									</div>
									<div class="col_full">
										<button type="submit" class="t400 capitalize button button-border button-light button-circle nomargin" value="submit">Entrar</button>
									</div>
								</form>
								<div class="col_full">
										<a href="regnew.php" class="t400 capitalize button button-border button-light button-circle nomargin">Cadastro Rapido</a>
									</div>
							</div>
							<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
						</div>
					</div>

					<div class="video-wrap" style="z-index:1;">
						<div class="video-overlay" style="background: rgba(0,0,0,0.2);"></div>
					</div>

				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		
		
		<!-- #content end -->

	<?php include "include/footer.php"; ?>