<style type="text/css">
	.modal-content
	{
	    width: 800px;
	    margin-left: 290px;
	    margin-top: 50px;
	}
	.modal-title
	{
	    padding-bottom: 50px;
	}
	.form-group
	{
	    font-weight: 2em;

	}
	.modal
	{
	    overflow-y: scroll;
	}

  img
  {
    width: 150px;
    height: 150px;
  }
  .modal_left
  {
    margin-left: 10px;
    margin-top: -20px;
  }
   .modal_right
  {
    float: right;
    margin-right: 120px;
    margin-top: -220px;
  }
  .modal_image
  {
    border: 3px solid #ccc;
    box-shadow: 10px 10px 5px #888888;
    width: 150px;
    height: 150px;
    float: right;
    margin-right: -150px;
    margin-top: -400px;
  }
</style>

<div class="row">
  <div class="col-lg-12">
      <h2 class="page-header">Client </h2>
  </div>
</div>

<?php if($this->session->flashdata('client_added')) : ?>
  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('client_added'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('client_updated')) : ?>
 <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('client_updated'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('client_deleted')) : ?>
  <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('client_deleted'); ?></p>
<?php endif; ?>  

  <!-- TABLE OF BRANCHES -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>master/client_add">Add</a>
      </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
	              	<thead>
	                  <tr>
	                      <th>First Name</th>
	                      <th>Middle Name</th>
	                      <th>Last Name</th>
	                      <th>Pension Amount No.</th>
	                      <th>Action</th>
	                  </tr>
	               	</thead>

	                <?php if(isset($clients)) : ?>
	                    <?php foreach($clients as $client) : ?>
		                    <tr>
		                        <td><?php echo $client->first_name; ?></td>
		                        <td><?php echo $client->middle_name; ?></td>
		                        <td><?php echo $client->last_name; ?></td>
		                        <td><?php echo $client->bank_branch; ?></td>

		                        <td>
		                         <input onclick="showModal('myModal<?php echo $client->id; ?>')" class="btn btn-info" type="button" value="View">
		                            <a class="btn btn-info" href="<?php echo base_url(); ?>master/client_edit/<?php echo $client->id; ?>">Edit</a>
		                            <a class="btn btn-danger btn-sm delete-btn"  onclick="return confirm('Do you want to delete?');" href="<?php echo base_url(); ?>master/client_delete/<?php echo $client->id; ?>">Delete</a>
		                        </td>
		                    </tr>
	                    <?php endforeach; ?>
	                <?php endif; ?>
                </table>
                <div class="margin3">
                    <?php echo $this->pagination->create_links(); ?>
                </div>     
            </div>
        </div>      
    </div>
  </div>
</div>

<?php if(isset($clients2)) : ?>
    <?php foreach($clients2 as $client) : ?>

        <div id="myModal<?php echo $client->id; ?>" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                         <span onclick="closeModal('myModal<?php echo $client->id; ?>')" class="close">&times;</span>
                        <h3 class="modal-title">Client Information</h3>
                        <div class="form-group">
                          <div class="modal_left">
                            <p> <label>First Name: </label> <?php echo $client->first_name; ?> </p>
                            <p> <label>Middle Name:</label> <?php echo $client->middle_name; ?> </p>
                            <p> <label>Last Name: </label> <?php echo $client->last_name; ?> </p>
                            <p> <label>Birth Date: </label>   <?php echo $client->birthdate; ?> </p>
                            <p> <label>Gender: </label>   <?php echo $client->gender; ?> </p>
                            <p> <label>Civil Status: </label>   <?php echo $client->civil_status; ?> </p>
                            <p> <label>Mobile No: </label>   <?php echo $client->mobile_no; ?> </p>
                            <p> <label>Address: </label>   <?php echo $client->address; ?> </p>
                            <p> <label>Res_cert_no: </label>   <?php echo $client->res_cert_no; ?> </p>
                            <p> <label>Pension Amount: </label>   <?php echo $client->pension_amount; ?> </p>
                          </div>  
                          <div class="modal_right">
                            <p> <label>Withdrawal Day: </label>   <?php echo $client->withdrawal_day; ?> </p>
                            <p> <label>Payment Type: </label>   <?php echo $client->payment_type_name; ?> </p>
                            <p> <label>Branch:</label> <?php echo $client->branch_name; ?> </p>
                            <p> <label>Payment Source: </label> <?php echo $client->payment_source_name; ?> </p>
                            <p> <label>Pension Type: </label>   <?php echo $client->pension_type_name; ?> </p>
                             <p> <label>Group: </label>   <?php echo $client->group; ?> </p>
                              <p> <label>Status: </label>   <?php echo $client->is_active; ?> </p>
                          </div>  
                         
                          <div class="modal_image">  
                            <?php echo img('assets/upload/'.$client->picture); ?>
                          </div>    
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>  
<?php endif; ?>

<script>
function showModal(modalId) {
    var modal = document.getElementById(modalId);

    modal.style.display = 'block';
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);

    modal.style.display = 'none';
}

/*
window.onclick = function(event) {
    if(event.target == modal) {
        modal.style.display = "none";
    }
}
*/

</script>                         
