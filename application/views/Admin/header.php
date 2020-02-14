 

<?php 
$data  = $this->session->userdata('logged_marriagee_user');
$user_id    =   $data['user_id'];
$first_name    =   $data['first_name'];
$last_name    =   $data['last_name'];
$email    =   $data['email'];
$profile_pic    =   $data['profile_pic'];
$contact    =   $data['contact'];
$about    =   $data['about'];
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Best Wedding Planner | </title>
        <link href="<?php echo base_url(); ?>webAssetss/images/favicon.png" rel="favicon icon">


        <!-- Google-Font -->
        <link href="https://fonts.googleapis.com/css?family=Handlee|Libre+Baskerville:400,700|Varela+Round" rel="stylesheet">
        
 <link href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">        

        <!-- Bootstrap-css-Version-3.3.7 -->
        <link href="<?php echo base_url(); ?>webAssetss/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- FontAwesome-Version-4.7.0 -->
        <link href="<?php echo base_url(); ?>webAssetss/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Owl-Carousel -->
        <link href="<?php echo base_url(); ?>webAssetss/owl.carousel/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>webAssetss/owl.carousel/owl.theme.css" rel="stylesheet" type="text/css">

        <!-- Slick-slider -->
        <link href="<?php echo base_url(); ?>webAssetss/slick-slider/slick.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>webAssetss/slick-slider/slick-theme.css" rel="stylesheet" type="text/css">

        <!-- Pretty photo -->
        <link href="<?php echo base_url(); ?>webAssetss/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">

        <!-- Animated -->
        <link href="<?php echo base_url(); ?>webAssetss/css/animate.css" rel="stylesheet" type="text/css">

        <!-- Revulation Slider CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>webAssetss/rs-plugin/css/settings.css" media="screen">

        <!-- OffCanvas-Menu -->
        <link href="<?php echo base_url(); ?>webAssetss/css/offcanvas.css" rel="stylesheet" type="text/css">

        <!-- Style-Css -->
        <link type="text/css" href="<?php echo base_url(); ?>webAssetss/css/style.css" rel="stylesheet">
        <!-- vander page css -->
            
    <link href="<?php  echo base_url(); ?>vanderAssets/css/style.css" rel="stylesheet">


    </head>
    
    <style>
    .header-section .navbar .navbar-nav li .dropdown {
    position: absolute;
    width: 250px;
    background: #D10C30;;
 
    padding: 25px 10px;
    transform: translateY(20px);
    visibility: hidden;
    opacity: 0;
    -webkit-transition: 0.3s;
    -khtml-transition: 0.3s;
    -moz-transition: 0.3s;
    -ms-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    color: #000 !important;
}

.header-section .navbar .navbar-nav li .dropdown li a {
font-size: 16px;
border: 1px solid #fff;
}


.second-header .navbar .navbar-nav li .dropdown li {
    line-height: 20px;
    }
    
    
    
    .reservation-section .reserve-form-two .form-two-wrapper .form-content h2{
        font-size: 47px;
        
            color: #000;}
                     @media only screen and (max-width: 600px) {
  #drp {
    display:none;
  }
}
    </style>
    
    <body class="white-bg">
        <!-- Preloader -->
         
        <!-- Preloader -->


        <div class="full-wrapper">

            <header id="page-top" class="header-section second-header">
                <div class="overlay"></div>
                <nav class="navbar navbar-inverse main-nav navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div><a class="navbar-brand page-scroll" href="#page-top">
                                <div class="second-logo"><img src="<?php echo base_url(); ?>webAssetss/images/second-logo.png" alt="image"></div>
                            </a></div>
                        </div>

                        <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li class="active"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Home <span><i class="fa fa-angle-down"></i></span></a>-->
                                <!--    <ul class="dropdown">-->
                                <!--        <li><a href>Home-1</a></li>-->
                                <!--        <li><a href="index2.html">Home-2</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->

                                <!--<li><a class="page-scroll" href="#couple">Couple</a></li>-->
                                <!--<li><a class="page-scroll" href="#story">Our story</a></li>-->
                                <!--<li><a class="page-scroll" href="#event">Event</a></li>-->
                                <!--<li><a class="page-scroll" href="#blog">Blog</a></li>-->
                                <!--<li><a class="page-scroll" href="#gallery">Gallery</a></li>-->
                                <!--<li><a class="page-scroll" href="#contact">RSVP</a></li>-->
                                
                                <!--<li><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Pages <span><i class="fa fa-angle-down"></i></span></a>-->
                                <!--    <ul class="dropdown">-->
                                <!--        <li><a href="blog.html">Blog</a></li>-->
                                <!--        <li><a href="invitation.html">Invitation</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                
                                <li><a href="<?php echo base_url(); ?>User/index">Home</li>
                            
                                
                                <li><a href="#">About Us</a></li>
  <li><a href="" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">Vendor <span><i class="fa fa-angle-down" id="show"></i><i class="fa fa-angle-down" id="new" style="display:none;"></i></span></a>
                              
                                <ul class="dropdown" id="drp">
        
        <?php 
        
            if(isset($list_category)){
                foreach($list_category as $value){
                    $category_name =  $value['category_name'];
                    $category_id =  $value['category_id'];
                
        ?>
        
        
        
        
     <li><a href="<?php echo base_url(); ?>User/vander/<?php echo $category_id; ?>"><?php echo $category_name; ?></a></li>
     
     <?php  }  }?>
                                    </ul>
                              
    <li><a href="<?php echo base_url();?>">Contact Us</a></li>
                                 
                                 
                                 <button class="glow-on-hover" type="button"><a href="<?php echo base_url(); ?>User/signup">Signup</a></button>
                                 
                                 
                                    <button class="glow-on-hover" type="button"><a href="<?php echo base_url(); ?>User/login">Signin</a></button>
                                
                                
                            </ul>
                            
                            
                        </div>   <!--/.nav-collapse -->
                    </div>
                </nav>
            </header> <!-- header-section -->
        
       
         
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>webAssetss/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Bootstrap-js -->
        <script src="<?php echo base_url(); ?>webAssetss/bootstrap/js/bootstrap.min.js"></script>

        <!-- Owl-Carousel -->
        <script src="<?php echo base_url(); ?>webAssetss/owl.carousel/owl.carousel.min.js"></script>

        <!-- Slick-Slider -->
        <script src="<?php echo base_url(); ?>webAssetss/slick-slider/slick.min.js" type="text/javascript"></script>

        <!-- Google-Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZqmVgjIM4-tIJp3UNF5zZkUIYqg2TJI0&callback=initMap" async defer></script>

        <!-- Revulation Slider -->
        <script src="<?php echo base_url(); ?>webAssetss/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>webAssetss/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>


        <!-- Other-js -->
        <script src="<?php echo base_url(); ?>webAssetss/js/smoothscroll.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/coundown-timer.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/jquery.easyaudioeffects.1.0.0.min.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/staller.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/parallax.min.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/portfolio.js"></script>
        <script src="<?php echo base_url(); ?>webAssetss/js/pace.js"></script>

        <!-- prettyPhoto --> 
        <script src="<?php echo base_url(); ?>webAssetss/prettyPhoto/js/jquery.prettyPhoto.js"></script>

        <!-- Offcanvas-menu -->
        <script src="<?php echo base_url(); ?>webAssetss/js/offcanvas.js" type="text/javascript"></script> 

        <!-- Main-Js -->
       
    
       
    </body>
</html>