<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
    <style type="text/css">
 
    select { 
        margin-left: 0px;
        margin-top: 10px;
        
    }
    select.selectList { width: 150px; }
    .form-control
    {
        width: 350px;
    }
    .btn-size
    {
        margin-left: 300px;
    }
    .modal-body {
       max-height: 100%;
        overflow-y: auto;
    
}
    .margin3
    {
        margin-left: 680px;
    }
     .margin4
    {
        margin-left: 750px;
    }

    .row1
    {
        margin-left: -60px;
        margin-top: 10px;
    }

     .row2
    {
        margin-left: 20px;
    }

     .right_row
    {
        float: right;
        margin-right: 29px;
        margin-top: -350px;
       
    }

    .right_row1
    {
        float: right;
        margin-right: 56px;
        margin-top: -305px;
       
    }

    .right_row2
    {
        float: right;
        margin-right: 85px;
        margin-top: -260px;
       
    }

    .right_row3
    {
        float: right;
        margin-right: 85px;
        margin-top: -220px;
       
    }

     .right_row4
    {
        float: right;
        margin-right: 80px;
        margin-top: -180px;
       
    }

      .right_row5
    {
        float: right;
        margin-right: 77px;
        margin-top: -125px;
       
    }

      .right_row6
    {
        float: right;
        margin-right: 52px;
        margin-top: -80px;
       
    }

     .image_location
    {
        float: right;
        margin-right: 100px;
        margin-top: -690px;
         
    }

     .upload_img
    {
        border: 3px solid #ccc;
        box-shadow: 10px 10px 5px #888888;
        width: 150px;
        height: 150px;
    } 

    form
    {
        margin-top: 50px;
    }

    .btn-size1
    {
        margin-left: 500px;
        padding-bottom: 70px;
        
    }
     .border
    {
        margin-left:300px;

    }
    option
     {
        margin-left: 10px;
     }
    .margin
    {
        margin-left: 20px;
    } 
    .search
    {
        margin-top: -70px;
    }

    </style>

</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>user/account">Xavi</a>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>a
        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <?php if($this->session->userdata('branch') !== NULL) : ?>
                    <a href=" <?php echo base_url(); ?>user/account">Change Account</a>
                <?php endif; ?>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo 'User' ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url();?>user/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                 <ul class="nav" id="side-menu">
                    <!-- DASHBOARD ACCOUNT -->
                    <?php //print_r($this->session->all_userdata()); ?>
                    <?php if($this->session->userdata('access') == 'admin' ) : ?>
                        <li>
                            <a href="<?php echo base_url(); ?>master/branch_index" ><i class="fa fa-sitemap fa-fw"></i> Branches</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>master/account_index"><i class="fa fa-users fa-fw"></i> Accounts</a>
                        </li>
                    <?php endif; ?>
                    <!-- DASHBOARD OF BRANCHES -->
                    <?php if($this->session->userdata('branch') !== NULL) : ?>
                        <li>
                            <a href="#" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>master/client_index">Client</a>
                                </li>
                                <li>
                                    <a href="#">Verification</a>
                                </li>
                                <li>
                                    <a href="#">Co-Maker</a>
                                </li>
                                <li>
                                    <a href="#">Agent</a>
                                </li>
                                <li>
                                    <a href="#">Agent Ref. No.</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Request</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Approval</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Sales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>sales/client_index"">Loan Application</a>
                                </li>
                                <li>
                                    <a href="#">Loan Processing</a>
                                </li>
                                <li>
                                    <a href="#">Check Voucher</a>
                                </li>
                                <li>
                                    <a href="#">Refund Que</a>
                                </li>
                                <li>
                                    <a href="#">Refund Approval</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                <li>
                                    <a href="#">RPCF Refund</a>
                                </li>
                                <li>
                                    <a href="#">RPCF Expense</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Collection<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Client</a>
                                </li>
                                <li>
                                    <a href="#">Verification</a>
                                </li>
                                <li>
                                    <a href="#">Co-Maker</a>
                                </li>
                                 <li>
                                    <a href="#">Agent</a>
                                </li>
                                <li>
                                    <a href="#">Agent Ref. No.</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Request</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Approval</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Client</a>
                                </li>
                                <li>
                                    <a href="#">Verification</a>
                                </li>
                                <li>
                                    <a href="#">Co-Maker</a>
                                </li>
                                 <li>
                                    <a href="#">Agent</a>
                                </li>
                                <li>
                                    <a href="#">Agent Ref. No.</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Request</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Approval</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Entries<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Client</a>
                                </li>
                                <li>
                                    <a href="#">Verification</a>
                                </li>
                                <li>
                                    <a href="#">Co-Maker</a>
                                </li>
                                <li>
                                    <a href="#">Agent</a>
                                </li>
                                <li>
                                    <a href="#">Agent Ref. No.</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                 <li>
                                    <a href="#">Fund Transfer Request</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Approval</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-folder fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Client</a>
                                </li>
                                <li>
                                    <a href="#">Verification</a>
                                </li>
                                <li>
                                    <a href="#">Co-Maker</a>
                                </li>
                                <li>
                                    <a href="#">Agent</a>
                                </li>
                                <li>
                                    <a href="#">Agent Ref. No.</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Request</a>
                                </li>
                                <li>
                                    <a href="#">Fund Transfer Approval</a>
                                </li>
                                <li>
                                    <a href="#">Commission</a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php $this->load->view($main_content); ?>     
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

<script src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>


</body>
</html>