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
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
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
                            <h2 class="page-header">Accounts</h2>

                        </div>
                    </div>


                    <?php if($this->session->flashdata('user_added')) : ?>
                            <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('user_added'); ?></p>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('user_updated')) : ?>
                            <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('user_updated'); ?></p>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('user_deleted')) : ?>
                            <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('user_deleted'); ?></p>
                    <?php endif; ?>  
                    <!-- TABLE OF USERS -->
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>master/account_add">Add</a>
                                    </div>
                                
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <td>ID</td>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>TYPE</th>
                                                    <th>Content</th>
                                                </tr>
                                             </thead>

                                                <?php if(isset($users)) : ?>
                                                    <?php foreach($users as $user) : ?>
                                                    <tr>
                                                        <td><?php echo $user->id; ?></td>
                                                        <td><?php echo $user->first_name; ?></td>
                                                        <td><?php echo $user->middle_name; ?></td>
                                                        <td><?php echo $user->last_name; ?></td>
                                                        <td><?php echo $user->access; ?></td>
                                                       
                                                        
                                                        <td>
                                                            
                                                            <a class="btn btn-info" href="<?php echo base_url(); ?>master/account_edit/<?php echo $user->id; ?>">Edit</a>
                                                            <a class="btn btn-danger btn-sm delete-btn" href="<?php echo base_url(); ?>master/account_delete/<?php echo $user->id; ?>">Delete</a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </table>
                                            <div class="margin4">
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

