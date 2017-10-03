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
<div style="color:red">
   <?php echo validation_errors(); ?> 
</div>
<form  action="<?php echo base_url('master/branch_add/') ?>" method="post" class="form-horizontal">
  <div class="border">
    <h3 class="modal-header">Add Branch Form</h3>
  </div>
	                                                            
	<div class="form-group">
	  <label class="control-label col-md-3">Name:</label>
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
