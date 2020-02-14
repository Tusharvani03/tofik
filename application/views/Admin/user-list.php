 
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->


 
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                        <div class="d-flex mt-2 justify-content-end">
                            <div class="d-flex mr-3 ml-2">
                                <div class="chart-text mr-2">
                                    <h6 class="mb-0"><small>THIS MONTH</small></h6>
                                    <h4 class="mt-0 text-info">$58,356</h4>
                                </div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex mr-3 ml-2">
                                <div class="chart-text mr-2">
                                    <h6 class="mb-0"><small>LAST MONTH</small></h6>
                                    <h4 class="mt-0 text-primary">$48,356</h4>
                                </div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class>
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right ml-2"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                      
                        <!-- Column -->
                        
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Users Details</h4>
                                <!-- <h6 class="card-subtitle">Create your table with Accordion Footable</h6> -->
                                <!-- Accordian -->
                                <div class="accordion" id="accordionTable">
                                    <div class="card mb-1">
                                        <div class="card-header" id="heading1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#col1" aria-expanded="true" aria-controls="col1">
                                                   All USer List
                                                </button>
                                                &nbsp;&nbsp;&nbsp;
                                                <button class="btn   btn-outline-info" type="button" data-toggle="collapse" data-target="#col2" aria-expanded="false" aria-controls="col2">
                                                   Acive User
                                                </button>
                                                &nbsp;&nbsp;&nbsp;
                                                 <button class="btn   btn-outline-info" type="button" data-toggle="collapse" data-target="#col3" aria-expanded="false" aria-controls="col3">
                                                  Panding User
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="col1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionTable">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="demo-foo-accordion" class="table table-bordered mb-0 toggle-arrow-tiny no-wrap" data-filtering="true" data-paging="true" data-sorting="true" data-paging-size="7">
                                                        <thead style="background: linear-gradient(60deg,#269fff,#314554); color: white;">
                                                            <tr class="footable-filtering">
                                                                <th data-toggle="true"> S. No. </th>
                                                                <th data-toggle="true">  Name </th>
                                                                <th> Email </th>
                                                                <th data-hide="phone"> Contact </th>
                                                                <th data-hide="all"> City </th>
                                                                <th data-hide="all"> User Details </th>
                                                                <th data-hide="all"> Status </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $i=1;
                                                            if(isset($list_user)){
                                                            foreach($list_user as $value){
                                                            $name    = $value['name'];
                                                            $user_id    = $value['user_id'];
                                                            $email    = $value['email'];
                                                            $user_name    = $value['user_name'];
                                                            $contact    = $value['contact'];
                                                            $password    = $value['password'];
                                                            $city    = $value['city'];
                                                            $active_status    = $value['active_status'];

                                                        

                                                       
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $name; ?></td>
                                                                <td><?php echo $email; ?></td>
                                                                <td><?php echo $contact; ?></td>
                                                                <td><?php echo $city; ?></td>
  <td>  
                                     <span class="mytooltip tooltip-effect-1">
                            <span class="tooltip-item2">Hover Me</span>
                            <span class="tooltip-content4 clearfix">
                            <span class="tooltip-text2">
                            <strong>User Name : <span style="color: #000;"><b><?php echo $user_name; ?></b></span></strong><br>
                            <strong>User Pwd : <span style="color: #000;"><b><?php echo $password; ?></b></span></strong><br>
                            <strong>User Url :<span style="color: #000;"> <b>https://localhost/austrelia/app</b></span></strong>
                      
                      
  </td>
                                                                <td><?php  if($active_status=='active'){ 


                                                                    ?>
     <form action="<?php echo base_url(); ?>Admin/updateUserStatus" method="POST">
                                                                             <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                                                        <input type="hidden" name="check_status"  value="panding">
                                 <button type="submit"  class="btn btn-success btn-rounded"  onclick="return confirm('Are you sure you want to Deactivate This Account?');"><i class="fa fa-check"></i> Active</button>
                                                                </form>
                                                                    <?php } else{ ?>

     <form action="<?php echo base_url(); ?>Admin/updateUserStatus" method="POST">
                                                                             <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                                                        <input type="hidden" name="check_status"  value="active">
                                                                    <button type="submit" class="btn btn-danger btn-rounded"  onclick="return confirm('Are you sure you want to Activate This Account?');"><i class="fa fa-clock"></i> Panding</button>
                                                                </form>
                                                                    <?php } ?>

                                                                </td>
                                                                
                                                            </tr>
                                                            <?php
                                                            $i++; }  }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#col2" aria-expanded="false" aria-controls="col2">
                                                    Collapsible Group Item #2
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="col2" class="collapse" aria-labelledby="heading2" data-parent="#accordionTable">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                      <table id="demo-foo-accordion" class="table table-bordered mb-0 toggle-arrow-tiny no-wrap" data-filtering="true" data-paging="true" data-sorting="true" data-paging-size="7">
                                                        <thead style="background: linear-gradient(60deg,#269fff,#314554); color: white">
                                                            <tr class="footable-filtering">
                                                                <th data-toggle="true"> S. No. </th>
                                                                <th data-toggle="true">  Name</th>
                                                                <th> Email </th>
                                                                <th data-hide="phone"> Contact </th>
                                                                <th data-hide="all"> City </th>
                                                                 <th data-hide="all"> User Details </th>
                                                                <th data-hide="all"> Status </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $i=1;
                                                            if(isset($list_active_user)){
                                                            foreach($list_active_user as $value){
                                                            $name    = $value['name'];
                                                            $email    = $value['email'];
                                                            $contact    = $value['contact'];
                                                            $password    = $value['password'];
                                                               $user_name    = $value['user_name'];
                                                            $city    = $value['city'];
                                                            $active_status    = $value['active_status'];

                                                        

                                                       
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $name; ?></td>
                                                                <td><?php echo $email; ?></td>
                                                                <td><?php echo $contact; ?></td>
                                                                <td><?php echo $city; ?></td>
                                                                <td>  
                                     <span class="mytooltip tooltip-effect-1">
                            <span class="tooltip-item2">Hover Me</span>
                            <span class="tooltip-content4 clearfix">
                            <span class="tooltip-text2">
                            <strong>User Name : <span style="color: #000;"><b><?php echo $user_name; ?></b></span></strong><br>
                            <strong>User Pwd : <span style="color: #000;"><b><?php echo $password; ?></b></span></strong><br>
                            <strong>User Url :<span style="color: #000;"> <b><?php echo base_url(); ?>app</b></span></strong>
                      
                      
  </td>
                                                                <td><?php echo $active_status; ?></td>
                                                                
                                                            </tr>
                                                            <?php
                                                            $i++; }  }?>
                                                        </tbody>
                                                    </table>
                                </div>
                            </div>
                        </div>


                           <div id="col3" class="collapse" aria-labelledby="heading2" data-parent="#accordionTable">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                      <table id="demo-foo-accordion" class="table table-bordered mb-0 toggle-arrow-tiny no-wrap" data-filtering="true" data-paging="true" data-sorting="true" data-paging-size="7">
                                                        <thead style="background: linear-gradient(60deg,#269fff,#314554); color: white">
                                                            <tr class="footable-filtering">
                                                                <th data-toggle="true"> S. No. </th>
                                                                <th data-toggle="true">  Name </th>
                                                                <th> Email </th>
                                                                <th data-hide="phone"> Contact </th>
                                                                <th data-hide="all"> City </th>
                                                                <th data-hide="all"> Status </th>
                                                                <th data-hide="all"> Update </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $i=1;
                                                            if(isset($list_panding_user)){
                                                            foreach($list_panding_user as $value){
                                                            $name    = $value['name'];
                                                            $email    = $value['email'];
                                                            $contact    = $value['contact'];
                                                            $password    = $value['password'];
                                                            $city    = $value['city'];
                                                            $active_status    = $value['active_status'];

                                                        

                                                       
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $name; ?></td>
                                                                <td><?php echo $email; ?></td>
                                                                <td><?php echo $contact; ?></td>
                                                                <td><?php echo $city; ?></td>
                                                                <td><?php echo $active_status; ?></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $i++; }  }?>
                                                        </tbody>
                                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card" style="display: none;">
                            <div class="card-body">
                                <h4 class="card-title">Add & Remove Rows</h4>
                                <h6 class="card-subtitle">You can add or remove rows with Footable</h6>
                                <div class="table-responsive">
                                    <table id="footable-addrow" class="table" data-paging="true" data-filtering="true" data-sorting="true" data-editing="true" data-state="true"></table>
                                </div>
                                <!-- Start Popup Model -->
                                <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
                                    <div class="modal-dialog" role="document">
                                        <form class="modal-content form-horizontal" id="editor">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="editor-title">Add Row</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group required row">
                                                    <label for="firstName" class="col-sm-3 control-label">First
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group required row">
                                                    <label for="lastName" class="col-sm-3 control-label">Last
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="jobTitle" class="col-sm-3 control-label">Job
                                                        Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="dob" class="col-sm-3 control-label">Date of
                                                        Birth</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="status" class="col-sm-3 control-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="status" name="status" placeholder="Status Here" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Popup Model -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
   <br>
   <br>
   <br>
   <br>
   <br>
            <style type="text/css">
                                    #stbutton {
                                    background: #000;
                                    width: 100px;
                                    height: 100px;
                                    cursor: pointer;
                                    }
            </style>
  

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
   <script type="text/javascript">
       $(document).ready(function(){

   
  
  
   $("#btn").on("click", function(){
     alert('ok');
   }); 
  
  

});

   </script>