<form  action="<?php echo base_url('master/client_add/') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

<?php if($this->session->flashdata('added_client')) : ?>
  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('added_client'); ?></p>
<?php endif; ?>
<div class="row">    
    <div class="col-sm-17">
        <div class="panel panel-primary">
          <div class="panel-heading">
                      <h5 class="panel-title">Client Information Form</h5>
          </div>
            <div class="row1">
            	<div class="panel-body">
                    
                <div class="form-group" >
	                <label class="control-label col-md-2">First Name: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="first_name"  >    
                    </div>                             
                </div> 

                <div class="form-group" >
                  <label class="control-label col-md-2">Middle Name: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="middle_name"  >    
                    </div>                             
                </div> 

                <div class="form-group" >
                  <label class="control-label col-md-2">Last Name: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="last_name"  >    
                    </div>                             
                </div> 

                <div class="form-group" >
                  <label class="control-label col-md-2">BirthDate: </label>
                      <div class="col-md-1">
                          <input class="form-control input-sm datepicker"   type="text" name="birthdate" placeholder="MM/DD/YYYY"  >    
                      </div>                             
                </div>

                <div class="row2">

                    <div class="form-group">
                        <label class="control-label col-md-2">Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                          <select class="form-control input-sm" class="qw"  name="gender">
                            <option value="male">-SELECT-</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Civil Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <select class="form-control input-sm" class="qw"  name="civil_status">
                            <option value="male">-SELECT-</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="separated">Separated</option>
                            <option value="widon">Widow</option>
                        </select>
                    </div>


                    <div class="form-group">
                       <label class="control-label col-md-2">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                          <textarea class="form-control" rows="2" name="address"></textarea>
                    </div>

                </div>

                    <div class="form-group" >
                      <label class="control-label col-md-2">Telephone No: </label>
                        <div class="col-md-1">
                            <input class="form-control input-sm"  type="text" name="telephone_no"  >    
                        </div>                             
                    </div>

	                  <div class="form-group" >
                      <label class="control-label col-md-2">Cellphone No: </label>
                        <div class="col-md-1">
                            <input class="form-control input-sm"  type="text" name="mobile_no"  >    
                        </div>                             
	                  </div>

                    <div class="form-group" >
                      <label class="control-label col-md-2">Res.Cert No: </label>
                        <div class="col-md-1">
                            <input class="form-control input-sm"  type="text" name="res_cert_no">    
                        </div>                             
                  	</div>

                    <div class="form-group" >
                      <label class="control-label col-md-2">Bank Branch: </label>
                              <div class="col-md-1">
                                  <input class="form-control input-sm"  type="text" name="bank_branch">    
                              </div>                             
                 		</div>

                    <div class="form-group" >
                      <label class="control-label col-md-2">Amount: </label>
                        <div class="col-md-1">
                            <input class="form-control input-sm"  type="text" name="pension_amount">    
                        </div>                             
                    </div>

                    <div class="margin">    

                      <div class="form-group" >
                        <label class="control-label col-md-2">Withdrawal Day: </label>
                          <select class="form-control input-sm"  name="withdrawal_day">
                            <option value="0">-SELECT-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        	</select>                         
                    	</div>

		                  <div class="form-group" >
		                    <label class="control-label col-md-2">Payment Type: </label>
		                      <select class="form-control input-sm"  name="payment_type">
		                          <option value="0">-SELECT-</option>
		                          <option value="1">ATM</option>
		                          <option value="2">PB</option>
		                          <option value="3">CASH</option>
		                          <option value="4">CHECK</option>
		                          <option value="5">SALARY DEDUCTION</option>
		                      </select>                                                      
		                  </div>

                  	</div>

                    <div class="image_location">   

                      <div class="form-group" >
                        <div class="upload_img">
                            <img src="<?php echo base_url(); ?>assets/img/senior.png" width="150px;" height="150px;">
                        </div>
                              <br>
                        	<?php echo form_upload('file'); ?>
                      </div>                             
                    </div>

                      <div class="right_row">
                             
                        <div class="form-group">
                          <label class="control-label col-md-2">Payment Source:</label>
	                          <select class="form-control input-sm"   name="payment_source">
	                            <option value="0">-SELECT-</option> 
	                              <?php if(isset($payments)) : ?>
	                                  <?php foreach($payments as $payment) : ?>  
	                                      <option value="<?php echo $payment->id; ?>"><?php echo $payment->name; ?></option>
	                                  <?php endforeach; ?>
	                              <?php endif; ?>
	                          </select>
                        </div>

                      </div>

                      <div class="right_row1">            

                        <div class="form-group">
                          <label class="control-label col-md-2">Client Type:</label>
                            <select class="form-control input-sm"  name="pension_type">
                                <option value="0">-SELECT-</option> 
                                <?php if(isset($pensions)) : ?>
                                    <?php foreach($pensions as $pension) : ?>  
                                        <option value="<?php echo $pension->id; ?>"><?php echo $pension->name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                             
                      </div>

                      <div class="right_row2">            

                        <div class="form-group">
                          <label class="control-label col-md-2">Status:</label>
                            <select class="form-control input-sm"  name="is_active">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                   
                      </div>

                      <div class="right_row3">            

                        <div class="form-group">
                          <label class="control-label col-md-2">Group:</label>
                            <select class="form-control input-sm"  name="group">
                                <option value="male">-SELECT-</option>
                                <option value="new">New</option>
                                <option value="old">Old</option>
                            </select>
                        </div>
                   
                      </div>

                      <div class="right_row4">            

                        <div class="form-group">
                          <label class="control-label col-md-2">Branch:</label>
                            <select class="form-control input-sm"  name="branch_id">
                            	<option value="0">-SELECT-</option> 
					                      <?php if(isset($branches)) : ?>
					                          <?php foreach($branches as $branch) : ?>  
					                              <option value="<?php echo $branch->id; ?>"><?php echo $branch->name; ?></option>
					                          <?php endforeach; ?>
					                      <?php endif; ?>
                            </select>
                        </div>
                             
                      </div>

                      <div class="right_row5">            

                        <div class="form-group" >
                          <label class="control-label col-md-2">Agent: </label>
                            <div class="col-md-1">
                                <input class="form-control input-sm"  type="text" name="agent">    
                            </div>                             
                        </div>
                             
                      </div>

                      <div class="right_row6">            

                        <div class="form-group" >
                          <label class="control-label col-md-2">Sub-Agent: </label>
                            <div class="col-md-1">
                                <input class="form-control input-sm"  type="text" name="sub_agent">    
                            </div>                             
                        </div>
                             
                      </div>

                      <div class="btn-size1">
                          <button type="submit" class="btn btn-primary col-md-2">Submit</button>
                      </div> 

                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>     
<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/startmin.js"></script>




<script type="text/javascript">

    $(document).ready(function() {
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });

    });
</script>
