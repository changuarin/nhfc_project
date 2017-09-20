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

