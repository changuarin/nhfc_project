<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Dashboard Xavi Overview</h1>
      <?php if($this->session->flashdata('login_success')) : ?>
          <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
      <?php endif; ?>   
      <?php if($this->session->flashdata('login_successs')) : ?>
             <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_successs'); ?></p>
      <?php endif; ?>         
  </div>
</div>

<div class="row5">
  <?php echo form_open('user/index') ?>
    <h3>Select Branch</h3>
      <select class="form-control input-lg" name="branch">
	      <?php if(isset($branches)) : ?>
	          <?php foreach($branches as $branch) : ?>  
	              <option value="<?php echo $branch->id; ?>" <?php echo $branch->id == $this->session->userdata('branch') ? 'selected' : ''; ?>><?php echo $branch->name; ?></option>
	          <?php endforeach; ?>
	      <?php endif; ?>
      </select>   
      <br>
        <input type="submit" value="Activate" name="active" class="btn btn-md btn-primary "> 
  <?php echo form_close();  ?>
</div>    
