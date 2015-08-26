	    	    <div class="col-md-3 no-padding hidden-md hidden-sm hidden-xs">
	    		    
	    		    <div id="main-sidebar-right" >
	    		    	<div class="container-bg">
	    				<div class="rightmenu">
	    		        	<ul>
	    		            		<li class="app"><a href="#post_25" class="hvr-float">Apps Development</a></li>
	    		                    <li class="web"><a href="#post_23" class="hvr-float">Web Development</a></li>
	    		                    <li class="big"><a href="#post_21" class="hvr-float">Data Analytic</a></li>
	    		                    <li class="cloud"><a href="#post_1" class="hvr-float">Cloud Computing</a></li>
	    		            </ul>
	    		        </div>
	    		        <div class="contact-details">
	    		                <h2>Contact Us</h2>
	    		                <p>2475 152nd Ave NE<br>
	    		                Redmond, WA 98052, USA<br>
	    		                Phone: 425 818 0242<br>
	    		                Fax: 425 996 0200<br>
	    		                Email:<a href="mailto:info@seattleapplab.com" >info@seattleapplab.com</a> 
	    		        		</p>
	    		            <h2>Follows Us</h2>
	    		     		 <div class="component">
	    		        <a href="#" class="icon icon-mono facebook">facebook</a>
	    		        <a href="#" class="icon icon-mono twitter">twitter</a>
	    		        <a href="#" class="icon icon-mono googleplus">google+</a>
	    		      </div>
	    		        </div>
	    		        </div>

	    			</div>
	    	    
	    		</div>
	    	    


	    </div>
	    <div class="container-fluid no-padding">
			<div class="site-footer">
				
				<div class="bottom-footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<p class="copyright">Copyright © 2015 <a href="#">Seattle App Lab</a>
	                            </p>
							</div> <!-- /.col-md-6 -->
							<div class="col-md-6 credits">
								<p><!-- Design: <a href="http://www.templatemo.com">templatemo</a> --></p>
							</div> <!-- /.col-md-6 -->
						</div> <!-- /.row -->
					</div> <!-- /.container-fluid -->
				</div> <!-- /.bottom-footer -->
			</div> <!-- /.site-footer -->
	        
	    </div>
	<!-- JavaScripts -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>  
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.singlePageNav.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/custom.js"></script>
	<script>
			$(document).ready(function(){
				$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
			});

	        function initialize() {
	          var mapOptions = {
	            zoom: 13,
	            center: new google.maps.LatLng(40.7809919,-73.9665273)
	          };

	          var map = new google.maps.Map(document.getElementById('map-canvas'),
	              mapOptions);
	        }

	        function loadScript() {
	          var script = document.createElement('script');
	          script.type = 'text/javascript';
	          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
	              'callback=initialize';
	          document.body.appendChild(script);
	        }

	        window.onload = loadScript;
			
			 
	<!--Scroll top-->
	$(function(){
	 
		$(document).on( 'scroll', function(){
	 
			if ($(window).scrollTop() > 100) {
				$('.scroll-top-wrapper').addClass('show');
			} else {
				$('.scroll-top-wrapper').removeClass('show');
			}
		});
	 
		$('.scroll-top-wrapper').on('click', scrollToTop);
	});
	 
	$(function(){
	 
		$(document).on( 'scroll', function(){
	 
			if ($(window).scrollTop() > 100) {
				$('.scroll-top-wrapper').addClass('show');
			} else {
				$('.scroll-top-wrapper').removeClass('show');
			}
		});
	 
		$('.scroll-top-wrapper').on('click', scrollToTop);
	});
	 
	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}
	    </script>
	    <?php wp_footer(); ?>
	<!-- Seattile app lab -->
	</body>
	</html>
	