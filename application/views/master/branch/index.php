<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Xavi</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

       

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
           
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                   <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    
                   <li>
                        <a href="<?php echo base_url(); ?>user/index" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>master/branch_index" ><i class="fa fa-sitemap fa-fw"></i> Branches</a>
                    </li>
               
                     <li>
                        <a href="<?php echo base_url();?>master/account_index"><i class="fa fa-users fa-fw"></i> Accounts</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Branches</h2>
                        </div>
                    </div>

                    <?php if($this->session->flashdata('branch_added')) : ?>
                          <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('branch_added'); ?></p>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('branch_updated')) : ?>
                         <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('branch_updated'); ?></p>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('branch_deleted')) : ?>
                          <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('branch_deleted'); ?></p>
                    <?php endif; ?>  
                    <!-- TABLE OF BRANCHES -->
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>master/branch_add">Add</a>
                                       
                                    </div>
                                
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Branch</th>
                                                    <th>Company</th>
                                                    <th>Officer In Charge</th>
                                                    <th>Telephone No.</th>
                                                    <th>Action</th>
                                                </tr>
                                             </thead>

                                                <?php if(isset($branches)) : ?>
                                                    <?php foreach($branches as $branch) : ?>
                                                    <tr>
                                                       
                                                        <td><?php echo $branch->name; ?></td>
                                                        <td><?php echo $branch->company; ?></td>
                                                        <td><?php echo $branch->office_in_charge; ?></td>
                                                        <td><?php echo $branch->telephone_no; ?></td>
                                                        
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>master/dashboard">Activate</a>
                                                            <a class="btn btn-info" href="<?php echo base_url(); ?>master/branch_edit/<?php echo $branch->id; ?>">Edit</a>
                                                            <a class="btn btn-danger btn-sm delete-btn" href="<?php echo base_url(); ?>master/branch_delete/<?php echo $branch->id; ?>">Delete</a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </table>
                                            <div class="margin3">
                                                <?php echo $this->pagination->create_links(); ?>
                                            </div>     
                                        </div>
                                    </div>      
                                </div>


                        </div>
                    </div>

    </div>
</div>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/startmin.js"></script>
