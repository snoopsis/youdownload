<?php
// Include databse and login scripts file
require_once 'include/database.php';
session_start();

// Include header
include "include/header.php";
include "include/register.php";

?>

	<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

                	<div class="tabs divcenter nobottommargin clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" style="max-width: 500px;">

						<div class="tab-container">

								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<h3>Registar uma Conta</h3>

										<form id="register-form" name="register-form" class="nobottommargin" action="" method="post">

											<div class="col_full">
												<label for="register-form-name">Nome:</label>
												<input type="text" id="name" name="name" value="" class="form-control">
											</div>

											<div class="col_full">
												<label for="register-form-email">Email:</label>
												<input type="text" id="email" name="email" value="" class="form-control">
											</div>

											<div class="col_full <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
												<label for="register-form-username">Escolha um Usuario:</label>
												<input type="text" id="username" name="username" value="" class="form-control">
												<span class="help-block"><?php echo $username_err; ?></span>
											</div>

											<div class="col_full">
												<label for="register-form-password">Escolha Senha:</label>
												<input type="password" id="password" name="password" value="" class="form-control">
												<span class="help-block"><?php echo $password_err; ?></span>
											</div>

											<div class="col_full">
												<label for="register-form-repassword">Confirme a Senha:</label>
												<input type="password" id="confirm_password" name="confirm_password" value="" class="form-control">
												<span class="help-block"><?php echo $confirm_password_err; ?></span>
											</div>

											<div class="col_full nobottommargin">
												<input class="button button-3d button-black nomargin" type="submit" value="Registe-se Agora">
											</div>

										</form>
									</div>
							</div>

						</div>

					</div>
				

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
<!-- Footer -->
<?php include "include/footer.php"; ?>

</html>
