<?php

// Include config file
require_once 'database.php';
session_start();

?>

<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145133618-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145133618-3');
</script>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Website que permite baixar ou fazer download de Videos do Youtube em formato de Video Mp4 ou Audio Mp3">
    <meta name="keywords" content="Baixar do Youtube, Download do Youtube, conversor online, converte e baixa do youtube, Youtube Offline">
    <meta name="author" content="baixedoyoutube.website">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<a hreflang="pt"></a>

	<!-- Facebook Image
	============================================= -->
	<meta property="og:image" content="images/fbimage.jpg">


	<!-- Document Title
	============================================= -->
	<title>Baixe e tenha Videos do Youtube no seu Computador ou Aparelho Movel - Aplicativo Online Beta para Downloads do Youtube</title>

	<style>



		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">

	<!-- Header
		============================================= -->
		<header id="header" class="full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="main.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo4.png" alt="Baixe do Youtube Logo"></a>
						<a href="main.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo4.png" alt="Baixe do Youtube Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="main.php"><div><?php echo $_SESSION['username']; ?></div></a>
							</li>
							<?php if(!empty($_SESSION["username"])){?>

							<li class="current"><a href="video.php"><div>Video</div></a>

							</li>
							<li class="mega-menu"><a href="audio.php"><div>Audio</div></a>

<!-- Se for Admin Vai ver Esse Menu!!!	-->
<?php

$logado = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '{$logado}' AND type = 'admin'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>

							</li>
							<li class="mega-menu"><a href="filmes.php"><div>Filmes</div></a>

							</li>
							<li class="mega-menu"><a href="series.php"><div>Series</div></a>

							</li>
							<li class="mega-menu"><a href="autoajuda.php"><div>Auto-Ajuda</div></a>

							</li>

							<li class="mega-menu"><a href="buzios/index.php"><div>Vessel-Manager</div></a>

							</li>

							</li>
							<li class="mega-menu"><a href="../admin/admin.php" target="_blank"><div>Admin</div></a>

							</li>

<?php }  } ?>

                            <li class="mega-menu"><a href="include/logout.php"><div>Sair</div></a>
				            <?php } ?>
							</li>

						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
