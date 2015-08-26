<!DOCTYPE html>
<html>
	<head>
	    <title>Home | Seattle App Lab</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1">
	    
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css"  type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css"  type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/custom.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/misc.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<body>

			<!-- This one in here is responsive menu for tablet and mobiles -->
		    <div class="responsive-navigation visible-sm visible-xs">
		        <a href="#" class="menu-toggle-btn">
		            <i class="fa fa-bars fa-2x"></i>
		        </a>
		        <div class="navigation responsive-menu">
		            <ul>
		                <li class="home shadow"><a href="#templatemo">Home</a></li>
			            <!-- <li class="about"><a href="#about">About Us</a></li>
			            <li class="services"><a href="#services">Services</a></li>
			            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
			            <li class="contact"><a href="#contact">Contact</a></li> -->
			            <?php 
			            $pages = get_pages();
			            foreach ($pages as $page) {
			            	?>
			             <li class="contact"><a href="#page_<?php echo  $page->ID; ?>"><?php echo  $page->post_title; ?></a></li>	
			            	<?php
			            }
			            ?> 
		                <li class="contact"><a href="#contact">Contact</a></li>
		                 
		            </ul> <!-- /.main_menu -->
		        </div> <!-- /.responsive_menu -->
		    </div> <!-- /responsive_navigation -->
		    <div class="container-fluid no-padding">
		        
		       
		       

		    	