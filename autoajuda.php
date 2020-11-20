<?php 

// Include config file
require_once 'include/database.php';
session_start();

// Include header
include "include/header.php";

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
	$data = $_SESSION['data'];
?>
	

				
				
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap clearfix">

			<div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="media-gallery-two28" style="margin:0px auto;background-color:#333333;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
	            <div id="rev_slider_28_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
				 <ul>	<!-- SLIDE  -->
	
<?php $result = shell_exec("ls /var/www/html/remote/Ideias-Negocio/*.mp4"); ?>
<?php							
$lines = explode("\n", $result); // or use PHP PHP_EOL constant
if ( !empty($lines) ) {

  foreach ( $lines as $line ) { ?>  
           
						<li data-index="<?php echo trim($line, '/var/www/html/remote/Ideias-Negocio/'); ?>" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="<?php echo trim($line, '/var/www/html/remote/Ideias-Negocio/'); ?>" data-param1="Filmes Lancamento" data-description="">
							<!-- MAIN IMAGE -->
							<img src=""  alt=""  data-lazyload="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption   tp-resizeme fullscreenvideo tp-videolayer"
								 id="slide-106-layer-7"
								 data-x="0"
								 data-y="0"
								 data-width="['auto']"
								 data-height="['auto']"
								 data-transform_idle="o:1;"
								 data-style_hover="cursor:pointer;"
								 data-transform_in="s:1000;e:Power1.easeInOut;"
								 data-transform_out="s:1000;s:1000;"
								 data-start="1000"
								 data-responsive_offset="on"
                                 data-allowfullscreenvideo="true"
								 data-videocontrols="controls" data-videowidth="100%" data-videoheight="100%" data-videoposter="" data-videomp4="<?php echo "http://149.56.97.233/r". trim($line, '/var/www/html/'); ?>" data-posterOnMObile="off" data-videopreload="auto" data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="off"
								 data-nextslideatend="true"
					             data-forcerewind="on"
								style="z-index: 5;">
							</div>
						</li> 

         <?php } ?>

     <?php } ?>
	               </ul>
                   <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                   </div>
			       </div><!-- END REVOLUTION SLIDER -->
	               </section>
				   
						<!-- END ###### Termina de mostrar os Filmes -->			
		
<?php } header("location: index.php"); ?>

   
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
