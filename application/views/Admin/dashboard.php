    <div class="row page-header">
                <div class="col-lg-6 align-self-center ">
                  <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
             <!--    <div class="col-lg-6 align-self-center text-right">
                    <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a>
                </div> -->
        </div>
        
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
            
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">All users</h2>
                                <p class="text-muted">Total Product</p>
                                <?php 
                                if (isset($list_user)) {
                                $all_user =count($list_user);
                                
                                ?>
                                <span class="float-right text-primary widget-r-m"><?php echo $all_user; ?></span>
                            <?php  } else{  ?>
                                <span class="float-right text-primary widget-r-m">0</span>
                            <?php  } ?>

                            </div>
                            <div class="progress margin-b-10  progress-mini">
                                <div style="width:50%;" class="progress-bar bg-primary"></div>
                            </div>
                            <p class="text-muted float-left margin-b-0">Change</p>
                            <p class="text-muted float-right margin-b-0">50%</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">Sales</h2>
                                <p class="text-muted">Total Sales</p>
                                  <?php 
                                if (isset($list_active_user)) {
                                $all_active_user =count($list_active_user);
                                
                                ?>
                                <span class="float-right text-indigo widget-r-m"><?php ?></span>
                            </div>
                            <div class="progress margin-b-10 progress-mini">
                                <div style="width:45%;" class="progress-bar bg-indigo"></div>
                            </div>
                            <p class="text-muted float-left margin-b-0">Change</p>
                            <p class="text-muted float-right margin-b-0">450%</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">Orders</h2>
                                <p class="text-muted">Total Orders</p>
                                <span class="float-right text-success widget-r-m">1385</span>
                            </div>
                            <div class="progress margin-b-10 progress-mini">
                                <div style="width:85%;" class="progress-bar bg-success"></div>
                            </div>
                            <p class="text-muted float-left margin-b-0">Change</p>
                            <p class="text-muted float-right margin-b-0">85%</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">Visitors</h2>
                                <p class="text-muted">Total Visitors</p>
                                <span class="float-right text-warning widget-r-m">98421</span>
                            </div>
                            <div class="progress margin-b-10 progress-mini">
                                <div style="width:38%;" class="progress-bar bg-warning"></div>
                            </div>
                            <p class="text-muted float-left margin-b-0">Change</p>
                            <p class="text-muted float-right margin-b-0">38%</p>
                        </div>
                    </div>
                </div>
            </div>
            

</section>