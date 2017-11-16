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
		  <div class="search">
	  		<?php echo form_open('master/branch_index'); ?>
         	<div class="input-group col-lg-5">
        		<input type="text" class="form-control" placeholder="Search" name = "keyword"size="10px; ">
	        	<div class="input-group-btn">
	          	<button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
	          </div>  
      		</div>
	      <?php echo form_close(); ?>
    	</div>	
      <div class="panel-heading">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>master/branch_add">Add</a>
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
			                      <a class="btn btn-xs btn-info" href="<?php echo base_url(); ?>master/branch_edit/<?php echo $branch->id; ?>">Edit</a>
			                      <a class="btn btn-danger btn-xs delete-btn" onclick="return confirm('Do you want to delete?');" href="<?php echo base_url(); ?>master/branch_delete/<?php echo $branch->id; ?>">Delete</a>
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
