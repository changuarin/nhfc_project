
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
                        <a href="<?php echo base_url(); ?>dashboard/index" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>branches/index" class="active"><i class="fa fa-sitemap fa-fw"></i> Branches</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>login/get_users"><i class="fa fa-users fa-fw"></i> Accounts</a>
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
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>branches/add_branch">Add</a>
                                       
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
                                                            <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>user_branches/module_dashboard">Activate</a>
                                                            <a class="btn btn-info" href="<?php echo base_url(); ?>branches/edit/<?php echo $branch->id; ?>">Edit</a>
                                                            <a class="btn btn-danger btn-sm delete-btn" href="<?php echo base_url(); ?>branches/delete/<?php echo $branch->id; ?>">Delete</a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </table>
                                            
                                            <?php echo $this->pagination->create_links(); ?>
                                                 
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
<script >
function showModal(modalId) {
    var modal = document.getElementById(modalId);
    
    modal.style.display = 'block';
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if(event.target == modal) {
    modal.style.display = "none";
    }
}

</script>
