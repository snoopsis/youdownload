	<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div id="copyrights">
				<div class="container center clearfix">
					Copyrights © 2018 baixedoyoutube.website
				</div>
			</div>

		</footer><!-- #footer end -->
		
			<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>

	<script>

		var tpj=jQuery;
		var revapi28;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_28_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_28_1");
			}else{
				revapi28 = tpj("#rev_slider_28_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						tabs: {
							style:"hesperiden",
							enable:true,
							width:250,
							height:80,
							min_width:250,
							wrapper_padding:20,
							wrapper_color:"#ffffff",
							wrapper_opacity:"1",
							tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
							visibleAmount: 5,
							hide_onmobile: false,
							hide_onleave:false,
							hide_delay:200,
							direction:"horizontal",
							span:false,
							position:"outer-bottom",
							space:0,
							h_align:"left",
							v_align:"bottom",
							h_offset:0,
							v_offset:0
						}
					},
					gridwidth:1230,
					gridheight:692,
					lazyType:"smart",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/
	</script>