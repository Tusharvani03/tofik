<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
  Admin || Login
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
 
  <!--  Social tags      -->
   
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>newassetsAdmin/css/css.css">
  <link rel="stylesheet" href="<?php echo base_url();?>newassetsAdmin/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>newassetsAdmin/css/material-dashboard.min.css" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url();?>newassetsAdmin/css/demo.css" rel="stylesheet">
  <!-- Google Tag Manager -->
  <style type="text/css">
    .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer;
    display: none;

    

}
  </style>
  <!-- End Google Tag Manager -->
</head>

<body class="off-canvas-sidebar">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="ns.html" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
    <!--     <a class="navbar-brand" href="#pablo"><strong style="font-size: 32px; font-family: cursive;">International Exporter</strong></a> -->
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
           
         
          <li class="nav-item  active ">
            <!-- <a href="<?php echo base_url();?>Admin/index" class="nav-link">
              <i class="material-icons">fingerprint</i> Login
            </a> -->
          </li>
       
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo base_url();?>newassetsAdmin/images/card-2.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <!-- <form class="form" method="POST" action="<?php echo base_url(); ?>App/verify_user"> -->
                 <form  id="loginValidation" action="JavaScript:Void(0);">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center" style="background: linear-gradient(60deg,#269fff,#314554);">
                  <h4 class="card-title">User Login</h4>
                 
                </div>
                <span class="text-center text-warning text-bold"><strong><div id="response"></div></strong></span>
                <div class="card-body "> 
             
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" name="User_id" placeholder="User Name...">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="Password...">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center" >
                  <button  class="btn btn-rose   btn-lg" id="submit" type="submit" style="background: linear-gradient(60deg,#269fff,#314554);">Lets Go</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer" style="display: none;">
        <div class="container">
           
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>,  Design & Devloped By :  <a href="http://www.oneweblink.com/" target="_blank">OneWebLink
            </a>  .
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>newassetsAdmin/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>newassetsAdmin/js/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url();?>newassetsAdmin/js/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/js.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="<?php echo base_url();?>newassetsAdmin/js/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/material-dashboard.min.js" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url();?>newassetsAdmin/js/demo.js"></script>
   
  <!-- Sharrre libray -->
  <script src="js/jquery.sharrre.js"></script>
   
  <noscript>
    <img height="1" width="1" style="display:none" src="tr">
  </noscript>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
   <script>  
                
 
      $('#submit').click(function(){
        
        $.ajax({  
                     url:"<?php echo base_url(); ?>App/verify_user",  
                     method:"POST",  
                     data:$('#loginValidation').serialize(),  
                      
                     success:function(data){ 
              
                


                         $('#response').html(data);
                         

                          

                          $('form').trigger("reset");
                           

 

                     }  
                });  
      
           });
    
 
  
 </script>

 


</body>

</html>