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
    margin-top: -170px;
  }
  .modal_image
  {
    border: 3px solid #ccc;
    box-shadow: 10px 10px 5px #888888;
    width: 150px;
    height: 150px;
    float: right;
    margin-right: -150px;
    margin-top: -350px;
  }
</style>

<div class="row">
  <div class="col-lg-12">
      <h2 class="page-header">Loan Processing </h2>
  </div>
</div>

<?php if($this->session->flashdata('added_client')) : ?>
  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('added_client'); ?></p>
<?php endif; ?>

  <!-- TABLE OF ClIENT -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="search">
        <?php echo form_open('master/client_index'); ?>
          <div class="input-group col-lg-5">
            <input type="text" class="form-control" placeholder="Search" name = "keyword">
            <div class="input-group-btn">
              <button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
            </div>  
          </div>
        <?php echo form_close(); ?>
      </div>  
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
	              	<thead>
	                  <tr>
	                      <th>Name</th>
	                      <th>Pension Amount No.</th>
	                      <th>Action</th>
	                  </tr>
	               	</thead>
 
	                <?php if(isset($clients2)) : ?>
	                    <?php foreach($clients2 as $client) : ?>
		                    <tr>
		                        <td><?php echo $client->fullname; ?></td>
		                        <td><?php echo $client->bank_branch; ?></td>

		                        <td>
		                            <a class="btn btn-xs btn-info" href="<?php echo base_url(); ?>sales/loan_application_form/<?php echo $client->id; ?>">Loan</a>
                                <a class="btn btn-xs btn-info" href="#">View</a>
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


<script>


</script>                         
