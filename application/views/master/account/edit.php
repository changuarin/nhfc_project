<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Accounts</h2>
	</div>
</div>
<div style="color:red">
   <?php echo validation_errors(); ?> 
</div>
<form action="<?php echo base_url('master/account_edit/' . $user->id); ?>" method="post" class="form-horizontal">
  <div class="border">
     <h3 class="modal-header">Edit User Form</h3>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3">First Name:</label>
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
