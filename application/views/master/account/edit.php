<style type="text/css">
    .border
    {
        margin-left:300px;

    }
</style>
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
                                  <form action="<?php echo base_url('master/account_edit/' . $user->id); ?>" method="post" class="form-horizontal">
                                                           <div class="border">
                                                               <h3 class="modal-header">Edit User Form</h3>
                                                           </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First Name:
                                                                    </label>
                                                                        <div class="col-md-6">
                                                                            <input class="form-control" type="text" name="first_name" value="<?php echo $user->first_name; ?>" > 
                                                                        </div>
                                                                </div>
                                                            
                                                               
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3" >Middle Name:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="middle_name" class="form-control"  value="<?php echo $user->middle_name; ?>" >
                                                                        </div>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3" >Last Name:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                                                                        </div>
                                                                </div>  
                                                           
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Username:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="username" class="form-control"  value="<?php echo $user->username; ?>" >
                                                                        </div>
                                                                </div>  
                                                             
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Password:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>" >
                                                                        </div>
                                                                </div> 

                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-3">TYPE:</label>
                                                                       <select class="form-control"  name="access">
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="Accounting">Accounting</option>
                                                                             <option value="Collection">Collection</option>
                                                                              <option value="Sales">Sales</option>
                                                                        </select>
                                                                  </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Status:</label>
                                                                       <select class="form-control"  name="status">
                                                                            <option value="active">Active</option>
                                                                            <option value="inactive">Inactive</option>
                                                                        </select>
                                                                </div>

                                                                <div class="btn-size">
                                                                    <button type="submit" class="btn btn-default">Submit</button>
                                                                </div>        
                                         </form>                                       
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
 