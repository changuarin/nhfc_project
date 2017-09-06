 <style type="text/css">
     .border
     {
         margin-left:300px;

     }
     option
     {
        margin-left: 10px;
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

        <?php if($this->session->flashdata('branch_added')) : ?>
              <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('branch_added'); ?></p>
        <?php endif; ?>
        <?php if($this->session->flashdata('branch_updated')) : ?>
             <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('branch_updated'); ?></p>
        <?php endif; ?>
        <?php if($this->session->flashdata('branch_deleted')) : ?>
              <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('branch_deleted'); ?></p>
        <?php endif; ?>  
         
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Branches</h2>
                        </div>
                    </div>
                                 <form  action="<?php echo base_url('branches/add_branch/') ?>" method="post" class="form-horizontal">
                                                           <div class="border">
                                                               <h3 class="modal-header">Add User Form</h3>
                                                           </div>
                                                            
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Name:
                                                                    </label>
                                                                        <div class="col-md-6">
                                                                            <input class="form-control" type="text" name="name" >
                                                                        </div>
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Company:</label>
                                                                       <select class="form-control"  name="company">
                                                                            <option value="NHFC">NHFC</option>
                                                                            <option value="GTLIC">GTLIC</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3" >Office In Charge:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="office_in_charge" class="form-control" >
                                                                        </div>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3" >Address:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="address" class="form-control" >
                                                                        </div>
                                                                </div>  
                                                           
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Mobile No:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="mobile_no" class="form-control" >
                                                                        </div>
                                                                </div>  
                                                             
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Telephone No:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="telephone_no" class="form-control" >
                                                                        </div>
                                                                </div>  
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-3">Fax No:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="fax_no" class="form-control" >
                                                                        </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Interest:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="interest" class="form-control" >
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Other Charges:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="other_charges" class="form-control" >
                                                                        </div>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-3">Processing Fee:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="processing_fee" class="form-control" >
                                                                        </div>
                                                                </div>  
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-3">Collection Fee:</label>
                                                                        <div class="col-md-6">
                                                                            <input type="text" name="collection_fee" class="form-control" >
                                                                        </div>
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