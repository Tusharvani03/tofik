<style type="text/css">
	  .xs-volunteer-form-wraper.volunteer-version-3 input:not([type="submit"]), .xs-volunteer-form-wraper.volunteer-version-3 select, .xs-volunteer-form-wraper.volunteer-version-3 textarea, .xs-volunteer-form-wraper.volunteer-version-3 .xs-fileContainer {
    border-color: #e9e9e9;  height: 35px;}
</style>

<section class="parallax-window xs-become-a-volunteer xs-section-padding" style="background-image: url('<?php echo base_url();?>assetss/images/volunteer-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-7">
				<div class="xs-volunteer-form-wraper volunteer-version-3">
					<i class="icon-support icon-watermark"></i>
					<h2>Register For Project</h2>
					<div id="response"></div>
					 <form  id="RegisterValidation"  action="JavaScript:Void(0);" role="form"  class="xs-volunteer-form">
					<!-- <form action="<?php echo base_url(); ?>User/saveuser" method="POST" id="volunteer-form" class="xs-volunteer-form"> -->
						<div class="row">
							<div class="col-lg-6">
								<label style="color: #041d57">User name</label>
								<input type="text" name="user_name" id="user_name" class="form-control" placeholder="User Name">  
								<div id="user_name_error" ></div>
							</div>
							<div class="col-lg-6">
								<label style="color: #041d57">Full Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
							</div>
							<div class="col-lg-12">
								<label style="color: #041d57">Select Project</label>
								 <select name="project_name" class="form-control" id="volunteer_brach">
									<option value="Sadkah">Sadkah</option>	
									<option value="Zakat">Zakat</option>
									<option value="Qubani">Qubani</option>
									<option value="Fitra">Fitra</option>
								</select>
							</div>
							<div class="col-lg-6">
								<label style="color: #041d57">Email</label>
								<input type="email" name="email"   id="email" class="form-control" placeholder="Your Email">
								<div id="email_error" ></div>
								<div id="user_name_email" ></div>

							</div>
							<div class="col-lg-6">
								<label style="color: #041d57">Contact</label>
								<input type="tel" name="contact" id="contact" class="form-control" placeholder="Your email">
							</div>


								<div class="col-lg-6">
								<label style="color: #041d57">City</label>
								<input type="text" name="city" id="city" class="form-control" placeholder="Your City">
							</div>
							<div class="col-lg-6">
								<label style="color: #041d57">State</label>
								<input type="text" name="state" id="volunteer_email" class="form-control" placeholder="Your state">
							</div>


								<div class="col-lg-6">
								<label style="color: #041d57">Address</label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Your Address">
							</div>
							<div class="col-lg-6">
								<label style="color: #041d57">Profile Pic</label>
								<div class="xs-fileContainer">

									<input type="file" id="volunteer_cv" class="form-control" name="file">
									<label for="volunteer_cv">Upload Your image</label>
								</div>
							</div>
						 
						
						</div><!-- .row end -->
						 
						<button type="submit" id="submit" class="btn btn-primary bg-green">apply now</button><div id="error"></div>
					</form><!-- #volunteer-form .xs-volunteer-form END -->
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- End become a volunteer section -->
<h1>I am to tofik sheikh worlink on git</h1>
<br><br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


 <script>  
                
 $(document).ready(function(){  
 
      $('#submit').click(function(){
 

        var name = $('#name').val();  
        var user_name = $('#user_name').val();
        var project_name = $('#project_name').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var address = $('#address').val();  
        
var checkMail = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		  	
	  
if((name == '') || (user_name == '') || (project_name == '') || (email == '') || (contact == '') || (city == '') || (state == '') || (address == '') )  
     {  
 $('#error').html('<span class="text-danger">Please Fill All Fields  ....*</span>');  
  }  

   if (!checkMail.test(email)) {
        $('#email_error').text('Please enter valid email.');
    }
else{
        $.ajax({  
                    url:"<?php echo base_url(); ?>user/saveUser",  
                     method:"POST",  
                     data:$('#RegisterValidation').serialize(),  
               
                     success:function(data){ 
               
                          $('form').trigger("reset");  
                       
                          $('#response').html(data);  
                          
                               setTimeout(function(){  
                          
                               $('#response').fadeOut("slow");  
                          }, 2000);  

                     }  
                });  
    }
             
      });  
 });  
 </script>

  <script>  
                
 $(document).ready(function(){  
 
      $('#user_name').keyup(function(){

        $.ajax({   
                    url:"<?php echo base_url(); ?>user/checkUserName",  
                     method:"POST",  
                     data:$('#RegisterValidation').serialize(),  
               
                     success:function(data){ 
               
                 
                       
                          $('#user_name_error').html(data);  
                          
                     

                     }  
                });  
             
      });  
 });  
 </script>


  <script>  
                
 $(document).ready(function(){  
 
      $('#email').keyup(function(){

        $.ajax({   
                    url:"<?php echo base_url(); ?>user/checkEmail",  
                     method:"POST",  
                     data:$('#RegisterValidation').serialize(),  
               
                     success:function(data){ 
               
                 
                       
                          $('#user_name_email').html(data);  
                          
                     

                     }  
                });  
             
      });  
 });  
 </script>