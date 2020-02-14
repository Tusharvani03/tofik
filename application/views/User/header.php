 
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Charity Press - Home Two</title>
		<meta name="description" content>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="css/css.css" rel="stylesheet">

		<link rel="icon" type="<?php echo base_url();?>assetss/image/png" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="<?php echo base_url();?>assetss/images/apple-touch-icon.png">

		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/xsIcon.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/isotope.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/animate.css">
		

		<!--For Plugins external css-->
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/plugins.css">

		<!--Theme custom css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/style.css">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="<?php echo base_url();?>assetss/css/responsive.css">
		
		<link rel="stylesheet alternate" title="color-1" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-1.css">
		<link rel="stylesheet alternate" title="color-2" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-2.css">
		<link rel="stylesheet alternate" title="color-3" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-3.css">
		<link rel="stylesheet alternate" title="color-4" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-4.css">
		<link rel="stylesheet alternate" title="color-5" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-5.css">
		<link rel="stylesheet alternate" title="color-6" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-6.css">
        <link rel="stylesheet alternate" title="color-7" type="text/css" href="<?php echo base_url();?>assetss/assets/css/colors/color-7.css">

        <style type="text/css">
			.xs-header.xs-box .xs-navs-button {
			padding: 8px 20px 12px 0;
			}

			.xs-header.xs-box [class*="col-"]:not(.xs-logo-wraper) {
			background-color: #2ac0c4;
			}
			.header-transparent {
			position: fixed;
		 

			}

			@media(max-width: 750px){
			.xs-box .xs-top-bar {
   
    display: none;
}}
        </style>
	</head>
	<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div><!-- #preloader -->

	<!-- demo color panel switch -->
<!-- 	<div class="colors">
		<a href="#" class="btn btn-primary panel_opener"><i class="fa fa-gear"></i></a>
		<div class="colors_panel">
			<h5>Colors</h5>
			<a class="color-1" data-val="color-1" href="#"></a>
			<a class="color-2" data-val="color-2" href="#"></a>
			<a class="color-3" data-val="color-3" href="#"></a>
			<a class="color-4" data-val="color-4" href="#"></a>
			<a class="color-5" data-val="color-5" href="#"></a>
			<a class="color-6" data-val="color-6" href="#"></a>
			<a class="color-7" data-val="color-7" href="#"></a>
		</div>
	</div> -->
<!-- header section -->
<header class="xs-header header-transparent xs-box">
	<div class="container">
		<nav class="xs-menus">
			<div class="xs-top-bar clearfix">
				<ul class="xs-top-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					 <li><a href="#"><i class="fa fa-envelope"></i></a></li>
					 
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<a href="mailto:australia@charity.com" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i>australia@charity.com</a>
			</div>
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a href="<?php echo base_url();?>" class="xs-nav-logo">
					<img src="<?php echo base_url();?>assetss/images/logo.png" alt>
				</a>
			</div><!-- .nav-header END -->
			<div class="nav-menus-wrapper row">
				<div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
					<a class="nav-brand" href="<?php echo base_url();?>">
						<img src="<?php echo base_url();?>assetss/images/logo.png" alt>
					</a>
				</div><!-- .xs-logo-wraper END -->
				<div class="col-lg-10 col-xl-7">
					<ul class="nav-menu">
						<!-- <li><a href="<?php echo base_url(); ?>">Home</a>
							<ul class="nav-dropdown">
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-v2.html">Home 2</a></li>
								<li><a href="index-v3.html">Home 3</a></li>
							</ul>
						</li> -->
					 
						<?php  
							$uri = $this->uri->segment(1);

							if ($uri == '' ||  $uri == 'index' ) {
								 
						 

							 ?>
						<li><a style="color: #fff;"  href="<?php echo base_url(); ?>index" >Home</a>
						 <?php } else{ ?>
						<li><a  href="<?php echo base_url(); ?>index" >Home</a>
						<?php } ?>
						</li>
							<?php  
							$uri = $this->uri->segment(1);

							if ($uri == 'project') {
								 
						 

							 ?>
						<li><a  style="color:#fff;" href="<?php echo base_url(); ?>project">Project</a></li>
					<?php } else{ ?>
						<li><a href="<?php echo base_url(); ?>project">Project</a></li>
					<?php } ?>

					<?php  
							$uri1 = $this->uri->segment(1);

							if ($uri1 == 'aboutUs') {
								 
						 

							 ?>
						<li><a style="color:#fff;" href="<?php  echo base_url(); ?>aboutUs">about</a></li>
					<?php } else{ ?>
						<li><a  href="<?php echo base_url(); ?>aboutUs">about</a></li>
						 <?php } ?>


						 <?php  
							$uri1 = $this->uri->segment(1);

							if ($uri1 == 'contactUs') {
								 
						 

							 ?>
							 <li><a style="color:#fff;"  href="<?php echo base_url(); ?>contactUs">Contact</a></li>
							<?php } else{ ?>
						<li><a  href="<?php echo base_url(); ?>contactUs">Contact</a></li>
					<?php }  ?>
					</ul><!-- .nav-menu END -->
				</div>
				<div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
					<a href="#" class="btn btn-primary">
						<span class="badge"><i class="fa fa-heart"></i></span> Donate Now
					</a>
				</div><!-- .xs-navs-button END -->
			</div><!-- .nav-menus-wrapper .row END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div><!-- .container end -->
</header><!-- End header section -->





