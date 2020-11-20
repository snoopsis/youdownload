<?php 

// Include config file
require_once 'include/database.php';
session_start();

// Include header
include "include/header.php";

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
	$data = $_SESSION['data'];
?>

			<!-- Content
		============================================= -->	
		<section id="content">

		
	<div class="content-wrap" style="min-height:400px">	

				<div class="container clearfix">

					<!-- Shop
					============================================= -->
					<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
			
<?php $result = shell_exec("ls /var/www/html/remote/Ideias-Negocio/*.mp4"); ?>
<?php							
$lines = explode("\n", $result); // or use PHP PHP_EOL constant
if ( !empty($lines) ) {

  foreach ( $lines as $line ) { ?>
  
                            <div class="product clearfix">
	  
	                        <a href="<?php echo "http://149.56.97.233/r". trim($line, '/var/www/html/'); ?>" data-lightbox="iframe" class="btn btn-secondary btn-lg"><?php echo trim($line, '/var/www/html/remote/Ideias-Negocio/'); ?></a>
	  
	                       
     <?php } ?>

<?php } ?>






			
		
<?php } header("location: index.php"); ?>

					</div><!-- #shop end -->

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
