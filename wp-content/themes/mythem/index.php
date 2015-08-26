<?php 
get_header();
get_sidebar();
?>

    <div class="col-md-7">
	<div id="main-content">
		<div class="container-fluid">
		<div id="home">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
                    
						<li>
							
							<img src="<?php bloginfo('template_directory') ?>/images/slide1.jpg" alt="Slide 1" class="img-responsive">
						</li>
                        
						<li>
							
							<img src="<?php bloginfo('template_directory') ?>/images/slide2.jpg" alt="Slide 2" class="img-responsive">
						</li>
                        
                        <li>
							<img src="<?php bloginfo('template_directory') ?>/images/slide3.jpg" alt="Slide 1" class="img-responsive">
						</li>
                        
					</ul>
				</div>
			</div>
			
				<div class="row no-padding">
					<div class="col-md-12 no-padding">
						<div class="welcome-text">
							<h2>BRING YOUR PRODUCT</h2>
                            <h1>TO MARKET WITH CONFIDENCE</h1>	
							<p>We lend you our considerable industry expertiseand leave you with finished product with happycustomers and sustainable profitability.We are the catalyst to guide your technology initiatives to meet business objectivesWe are the catalyst to guide your technology initiatives to meet business objectives.We are the catalyst to guide your technology initiatives to meet business objectives.We are the catalyst to guide your technology initiatives to meet business objectives</p>
						</div>
					</div>
				</div>
                
                <div class="row no-padding">
					<div class="col-md-12 no-padding">
						<div class="client-test">
							 <h1>WHAT CLIENT SAYS</h1>	
                             <?php  echo testimonials(); // Testimonials listing with paging ?>
                <div class="col-md-12 no-padding">   
                          
                <!-- <div class="col-md-1  quote "><i class="fa fa-quote-left fa-4x"></i></div> -->
				<div class="col-md-10 col-xs-offset-1 carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <!-- <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
				  </ol> -->
				  <!-- Carousel items -->
				  <div class="carousel-inner row">
                  	
				    <!-- <div class="item">
                        <div class="profile-circle col-md-2 " style="background-color: rgba(0,0,0,.2);">
                          <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com
                          
                          </span>
                        
                        </div>
                      
				    	<blockquote class="col-md-9">
				    		<p>SeattleAppLab helped us greatly with our overall product road map and execution, including helping us optimize our IT budget for the next few years. We are fully independent now, thanks to SeattleAppLab helping us get started and helping to put together a team for continued success.</p>
				    	</blockquote>	
				    </div>
				    <div class="item">
                        <div class="profile-circle col-md-2" style="background-color: rgba(77,5,51,.2);">
                         <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com                         
                          </span>
                        
                        </div>
				    	<blockquote class="col-md-9">
				    		<p>SeattleAppLab helped us greatly with our overall product road map and execution, including helping us optimize our IT budget for the next few years. We are fully independent now, thanks to SeattleAppLab helping us get started and helping to put together a team for continued success.</p>
				    	</blockquote>
				    </div> -->
				    <!-- <div class="active item">
                        <div class="profile-circle col-md-2" style="background-color: rgba(145,169,216,.2);">
                        <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com                         
                          </span>
                        
                        
                        </div>
				    	<blockquote class="col-md-9">
				    		<p>SeattleAppLab helped us greatly with our overall product road map and execution, including helping us optimize our IT budget for the next few years. We are fully independent now, thanks to SeattleAppLab helping us get started and helping to put together a team for continued success.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle col-md-2" style="background-color: rgba(77,5,51,.2);">
                        <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com
                          </span>
                        
                        </div>
    			    	<blockquote class="col-md-9">
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle col-md-2" style="background-color: rgba(77,5,51,.2);">
                          <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com
                          </span>
                        
                        </div>
    			    	<blockquote class="col-md-9">
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle col-md-2" style="background-color: rgba(77,5,51,.2);">
                         <span class="title1"><strong>Faraz Rouhani</strong>
                          	CEO,Aresbuilder.com
                          </span>
                        
                        </div>
    			    	<blockquote class="col-md-9">
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div> -->
				  </div>
				</div>
                
                </div>
						</div>
					</div>
				</div>
                				

		<div class="row no-padding">
			<div class="col-md-12 no-padding ">
             
			</div>							
		</div>


		
		</div> <!-- /#Home -->
		</div>
		<div class="container-fluid">

			<!-- /#about -->
			
			
			 <!-- /#services -->

			 
			<!-- /#portfolio -->

			<?php 
			$pages = get_pages();
			foreach ($pages as $page) {
				?>


			<div id="page_<?php echo $page->ID; ?>" class="section-content services">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><?php echo $page->post_title; ?></h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				
				<div class="row our-skills">
					<div class="col-md-12">
						<!-- <h3>Our Skills</h3> -->
						<?php
							$content = apply_filters('the_content', $page->post_content); 
						 echo $content; 
						 ?>
					</div>
				</div>
			</div>
				<?php
			}
			?> 

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas">
                    		</div>
						</div> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row contact-form">
					<div class="col-md-4">
						<label for="name-id" class="required">Name:</label>
						<input name="name-id" type="text" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="email-id" class="required">Email:</label>
						<input name="email-id" type="text" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="subject-id">Subject:</label>
						<input name="subject-id" type="text" id="subject-id" maxlength="60">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-12">
						<label for="message-id" class="required">Message:</label>
						<textarea name="message-id" id="message-id" rows="6"></textarea>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12">
						<div class="submit-btn">
							<a href="#" class="largeButton contactBgColor">Send Message</a>
						</div> <!-- /.submit-btn -->
					</div> <!-- /.col-md-12 -->
				</div>
			</div> <!-- /#contact -->
            
            
			<!-- <div id="app-development" class="section-content services">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>App Development</h2>
						</div> 
					</div> 
				</div> 
				
				<div class="row our-skills">
					<div class="col-md-12">
						<h3>Web Development</h3>
						Integer hendrerit erat sed tellus pretium, eu sodales eros dignissim. Duis augue eros, mollis ac velit at, rutrum tincidunt ipsum. Morbi semper dui id fringilla semper. Etiam vulputate sagittis vestibulum. Vivamus ac ante cursus, feugiat ipsum et, aliquet justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, minima soluta numquam perferendis illum alias omnis commodi error veritatis a esse nostrum asperiores recusandae.
					</div>
					
				</div>
			</div> --> 
			<!-- /#app development -->
			<?php 



				while (have_posts()) : the_post();
					

						?>
					<div id="post_<?php the_ID(); ?>" class="section-content services">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2><?php the_title() ?></h2>
								</div> <!-- /.section-title -->
							</div> <!-- /.col-md-12 -->
						</div> <!-- /.row -->
						
						<div class="row our-skills">
							<div class="col-md-12">
							<?php the_content(); ?>
							</div>
							
						</div>
					</div>	
						<?php


				endwhile;




			$pages = get_posts();
			foreach ($pages as $page) {
			}
			?> 


		</div> <!-- /.container-fluid -->


	</div> <!-- /#main-content -->
    
    </div>


<?php
get_footer();
?>