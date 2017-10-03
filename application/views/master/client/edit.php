<form  action="<?php echo base_url('master/client_edit/' . $client->id) ?>" method="post" class="form-horizontal">
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
                        <input class="form-control input-sm"  type="text" name="first_name" value="<?php echo $client->first_name;  ?>" >    
                    </div>                             
              </div> 

              <div class="form-group" >
                <label class="control-label col-md-2">Middle Name: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="middle_name" value="<?php echo $client->middle_name;  ?>" >    
                    </div>                             
              </div> 

              <div class="form-group" >
                <label class="control-label col-md-2">Last Name: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="last_name"  value="<?php echo $client->last_name;  ?>" >    
                    </div>                             
              </div> 

              <div class="form-group" >
                <label class="control-label col-md-2">BirthDate: </label>
                  <div class="col-md-1">
                      <input class="form-control input-sm datepicker"   type="text" name="birthdate" placeholder="MM/DD/YYYY" value="<?php echo $client->birthdate;  ?>" >    
                  </div>                             
              </div>

              <div class="row2">

                <div class="form-group">
                  <label class="control-label col-md-2">Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <select class="form-control input-sm" class="qw"  name="gender">
                        <option value="0" >-SELECT-</option>
                        <option value="male" <?php echo $client->gender=='Male' ? 'selected' : ''; ?> >Male</option>
                        <option value="female" <?php echo $client->gender=='Female' ? 'selected' : ''; ?>>Female</option>
                    </select>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2">Civil Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <select class="form-control input-sm" class="qw"  name="civil_status">
                        <option value="0">-SELECT-</option>
                        <option value="Single" <?php echo $client->civil_status=='Single' ? 'selected' : ''; ?> >Single</option>
                        <option value="Married" <?php echo $client->civil_status=='Married' ? 'selected' : ''; ?> >Married</option>
                        <option value="Separated" <?php echo $client->civil_status=='Separated' ? 'selected' : ''; ?>>Separated</option>
                        <option value="Widow" <?php echo $client->civil_status=='Widow' ? 'selected' : ''; ?>>Widow</option>
                    </select>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-2">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <textarea class="form-control" rows="2" name="address"><?php echo $client->address ?></textarea>
                </div>

              </div>

                <div class="form-group" >
                  <label class="control-label col-md-2">Telephone No: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="telephone_no" value="<?php echo $client->telephone_no;  ?>" >    
                    </div>                             
                </div>

                <div class="form-group" >
                  <label class="control-label col-md-2">Cellphone No: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="mobile_no" value="<?php echo $client->mobile_no;  ?>" >    
                    </div>                             
                </div>

                <div class="form-group" >
                  <label class="control-label col-md-2">Res.Cert No: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="res_cert_no" value="<?php echo $client->res_cert_no;  ?>">    
                    </div>                             
                </div>

                <div class="form-group" >
                  <label class="control-label col-md-2">Bank Branch: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="bank_branch" value="<?php echo $client->bank_branch;  ?>">    
                    </div>                             
                </div>

                <div class="form-group" >
                  <label class="control-label col-md-2">Amount: </label>
                    <div class="col-md-1">
                        <input class="form-control input-sm"  type="text" name="pension_amount" value="<?php echo $client->pension_amount;  ?>">    
                    </div>                             
                </div>

              <div class="margin">

                <div class="form-group" >
                  <label class="control-label col-md-2">Withdrawal Day: </label>
                    <select class="form-control input-sm"  name="withdrawal_day">
                        <option value="0">-SELECT-</option>
                        <option value="1" <?php echo $client->withdrawal_day=='1' ? 'selected' : ''; ?> >1</option>
                        <option value="2" <?php echo $client->withdrawal_day=='2' ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?php echo $client->withdrawal_day=='3' ? 'selected' : ''; ?>>3</option>
                        <option value="4" <?php echo $client->withdrawal_day=='4' ? 'selected' : ''; ?>>4</option>
                        <option value="5" <?php echo $client->withdrawal_day=='5' ? 'selected' : ''; ?>>5</option>
                        <option value="6" <?php echo $client->withdrawal_day=='6' ? 'selected' : ''; ?>>6</option>
                        <option value="7" <?php echo $client->withdrawal_day=='7' ? 'selected' : ''; ?>>7</option>
                        <option value="8" <?php echo $client->withdrawal_day=='8' ? 'selected' : ''; ?>>8</option>
                        <option value="9" <?php echo $client->withdrawal_day=='9' ? 'selected' : ''; ?>>9</option>
                        <option value="10" <?php echo $client->withdrawal_day=='10' ? 'selected' : ''; ?>>10</option>
                        <option value="11" <?php echo $client->withdrawal_day=='11' ? 'selected' : ''; ?>>11</option>
                        <option value="12" <?php echo $client->withdrawal_day=='12' ? 'selected' : ''; ?>>12</option>
                        <option value="13" <?php echo $client->withdrawal_day=='13' ? 'selected' : ''; ?>>13</option>
                        <option value="14" <?php echo $client->withdrawal_day=='14' ? 'selected' : ''; ?>>14</option>
                        <option value="15" <?php echo $client->withdrawal_day=='15' ? 'selected' : ''; ?>>15</option>
                        <option value="16" <?php echo $client->withdrawal_day=='16' ? 'selected' : ''; ?>>16</option>
                        <option value="17" <?php echo $client->withdrawal_day=='17' ? 'selected' : ''; ?>>17</option>
                        <option value="18" <?php echo $client->withdrawal_day=='18' ? 'selected' : ''; ?>>18</option>
                        <option value="19" <?php echo $client->withdrawal_day=='19' ? 'selected' : ''; ?>>19</option>
                        <option value="20" <?php echo $client->withdrawal_day=='20' ? 'selected' : ''; ?>>20</option>
                        <option value="21" <?php echo $client->withdrawal_day=='21' ? 'selected' : ''; ?>>21</option>
                        <option value="22" <?php echo $client->withdrawal_day=='22' ? 'selected' : ''; ?>>22</option>
                        <option value="23" <?php echo $client->withdrawal_day=='23' ? 'selected' : ''; ?>>23</option>
                        <option value="24" <?php echo $client->withdrawal_day=='24' ? 'selected' : ''; ?>>24</option>
                        <option value="25" <?php echo $client->withdrawal_day=='25' ? 'selected' : ''; ?>>25</option>
                        <option value="26" <?php echo $client->withdrawal_day=='26' ? 'selected' : ''; ?>>26</option>
                        <option value="27" <?php echo $client->withdrawal_day=='27' ? 'selected' : ''; ?>>27</option>
                        <option value="28" <?php echo $client->withdrawal_day=='28' ? 'selected' : ''; ?>>28</option>
                        <option value="29" <?php echo $client->withdrawal_day=='29' ? 'selected' : ''; ?>>29</option>
                        <option value="30" <?php echo $client->withdrawal_day=='30' ? 'selected' : ''; ?>>30</option>
                        <option value="31" <?php echo $client->withdrawal_day=='31' ? 'selected' : ''; ?>>31</option>
                    </select>                         
                </div>
                      

                <div class="form-group" >
                  <label class="control-label col-md-2">Payment Type: </label>
                    <select class="form-control input-sm"  name="payment_type">
                      <option value="0">-SELECT-</option>
                      <option value="1"<?php echo $client->payment_type_name=='ATM' ? 'selected' : ''; ?> >ATM</option>
                      <option value="2" <?php echo $client->payment_type_name=='PB' ? 'selected' : ''; ?> >PB</option>
                      <option value="3" <?php echo $client->payment_type_name=='CASH' ? 'selected' : ''; ?>>CASH</option>
                      <option value="4" <?php echo $client->payment_type_name=='CHECK' ? 'selected' : ''; ?> >CHECK</option>
                      <option value="5" <?php echo $client->payment_type_name=='SALARY DEDUCTION' ? 'selected' : ''; ?> >SALARY DEDUCTION</option>
                    </select>                                                      
                </div>

              </div>

              <div class="image_location"> 

                <div class="form-group" >
                  <div class="upload_img">
                     <style type="text/css">
                       img
                       {
                        width: 150px;
                        height: 150px;
                       }
                     </style>
                    <?php //echo img('assets/upload/'.$client->picture); ?>
                    <!-- <img src="<?php //echo img('assets/upload/'.$client->picture); ?>" width="150px;" height="150px;">  -->
                  </div><br>
                 
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
                                <option value="<?php echo $payment->id; ?> " <?php echo $client->payment_source_id == $payment->id ? 'selected' : ''; ?>><?php echo $payment->name; ?></option>
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
                                <option value="<?php echo $pension->id; ?>" <?php echo $client->pension_type_id == $pension->id ? 'selected' : ''; ?>><?php echo $pension->name; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                     
              </div>

              <div class="right_row2">            

                <div class="form-group">
                  <label class="control-label col-md-2">Status:</label>
                    <select class="form-control input-sm"  name="is_active">
                        <option value="0" >-SELECT-</option>
                        <option value="1" <?php echo $client->is_active=='Active' ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo $client->is_active=='Inactive' ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
                     
              </div>

              <div class="right_row3">            

                <div class="form-group">
                  <label class="control-label col-md-2">Group:</label>
                    <select class="form-control input-sm"  name="group">
                        <option value="0">-SELECT-</option>
                        <option value="new" <?php echo $client->group == 'new' ? 'selected' : ''; ?>>New</option>
                        <option value="old" <?php echo $client->group == 'old' ? 'selected' : ''; ?>>Old</option>
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
                                <option value="<?php echo $branch->id; ?>" <?php echo $client->branches_id == $branch->id ? 'selected' : ''; ?> ><?php echo $branch->name; ?></option>
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