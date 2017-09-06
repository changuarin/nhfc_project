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
                    <i class="fa fa-user fa-fw"></i> <?php echo 'User'; ?> <b class="caret"></b>
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
                        <a href="<?php echo base_url(); ?>dashboard/landingpage" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>branches/all_branch" ><i class="fa fa-sitemap fa-fw"></i> Branches</a>
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
                    <h1 class="page-header">Dashboard Xavi Overview</h1>

                        <?php if($this->session->flashdata('login_success')) : ?>
                            <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
                        <?php endif; ?>   
                        <?php if($this->session->flashdata('login_successs')) : ?>
                           <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_successs'); ?></p>
                        <?php endif; ?>         
                </div>
            </div>

              <div class="row">
                    <div class="col-sm-7">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Company Details</h3>
                            </div>
                            <div class="panel-body">
                                <b>NHFC</b> -NEW HORIZON FINANCE CORP.
                                <br>
                                <b>GTLIC</b> -GOLDEN TREASURE LENDING INVESTOR CORP.  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>
                 </div> 

                 <div class="row">
                    <div class="col-sm-7">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bank and Cash accounts</h3>
                            </div>
                            <div class="panel-body">
                               <b> 1035-Cash in Bank </b>- PNB  Cr 8,056,193.56
                               <br>
                               <b> 1036-Cash in Bank </b> - BPI   Cr 7,667,030.29
                               <br>
                               <b> 1037-Cash in Bank </b> - BDO-CA   Dr 9,247,856.21
 
                            </div>
                        </div>
                    </div>
                 </div>


            <!-- ... Your content goes here ... -->

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