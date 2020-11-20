<?php
// Include databse and login scripts file
require_once 'include/database.php';
session_start();

// Include header
include "include/header.php";
include "include/login.php";
include "include/register.php";

?>

	<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix" style="min-height:300px">
				    <div class="row">
					  <div class="col-lg-8 bottommargin">
					     <div class="col_full bottommargin-lg">
				
				        <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
						  <div class="acctitle acctitlec"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Entre na sua Conta</div>
						    <div class="acc_content clearfix" style="">
                       	
										<form id="login-form" name="login-form" class="nobottommargin" action="" method="post">

											<div class="col_full <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
												<label for="login-form-username">Usuario:</label>
												<input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control">
												<span class="help-block"><?php echo $username_err; ?></span>
											</div>

											<div class="col_full">
												<label for="login-form-password">Senha:</label>
												<input type="password" name="password" class="form-control">
												<span class="help-block"><?php echo $password_err; ?></span>
											</div>
											
											<div class="col_full nobottommargin">
												<input type="submit" class="button button-3d button-black nomargin" value="Entrar">
											</div>
											
										</form>
									</div>  
                                 
                                   <h3>
								   <i class="acc-closed icon-user4"></i>
								   <a href="registo.php">Novo Usuario? Registe-se Agora</a>
								  </h3>
								 
                          </div>							 
										
				   </div>
				 </div>
				 
				 <div class="col-lg-4">

							<div class="sidebar-widgets-wrap clearfix">

								<div class="widget clearfix">
									<img class="aligncenter" src="images/fbimage.jpg" alt="">
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
