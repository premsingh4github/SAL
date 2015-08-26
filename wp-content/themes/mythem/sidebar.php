 			    <div class="col-md-2 no-padding main-sidebar">
 				<div id="main-sidebar" class="hidden-xs hidden-sm">
 					<div class="logo">
 						<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"   alt="logo" class="img-responsive"/></a>
 						
 					</div> <!-- /.logo -->
 					
 					 
 					 
 					<div class="navigation">
 				        <ul class="main-menu">
 				            <li class="home"><a href="#home">Home</a></li>
 				            <!-- <li class="about"><a href="#about">About Us</a></li> -->
 				            <!-- <li class="services"><a href="#services">Services</a></li> -->
 				            <!-- <li class="portfolio"><a href="#portfolio">Portfolio</a></li> -->
 				            
 				            <?php 
 				            $pages = get_pages();
 				            foreach ($pages as $page) {
 				            	?>
 				             <li class="contact"><a href="#page_<?php echo  $page->ID; ?>"><?php echo  $page->post_title; ?></a></li>	
 				            	<?php
 				            }
 				            ?> 
 			               	<li class="contact"><a href="#contact">Contact</a></li>
 				        </ul>
 					</div> <!-- /.navigation -->

 				</div> <!-- /#main-sidebar -->
 				</div>





 			<div class="col-md-3 no-padding  visible-md visible-sm visible-xs">
		        
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