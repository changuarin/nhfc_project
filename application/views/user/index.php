<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Dashboard Overview</h1>      
  </div>
</div>
<?php if($this->session->flashdata('branch_name')) : ?>
  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('branch_name'); ?></p>
<?php endif; ?>
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
