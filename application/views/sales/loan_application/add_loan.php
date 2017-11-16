<style type="text/css">
	.client_id
	{
		margin-left: 50px;
		margin-top: 20px;
	}
	.name
	{
		margin-left: 50px;
	}
	.border
	{
		/*#3073ad*/
		border:1px solid #CCC;
		box-shadow: 1px 1px 5px 5px #ccc;
		margin-left: 30px;
		width: 93%;
		padding: 20px;
	}
	.t
	{
		margin-left: -20px;
	}
	.q
	{
		margin-left: -100px;
	}
	.available_amount
	{
		margin-left: 460px;
		margin-top: -260px;
	}
	.pension_amount
	{
		margin-left: -20px;
	}
	.loanable_amount
	{
		margin-left: -125px;
		margin-top: -5px;
	}
		.type
	{
		margin-left: -25px;
		margin-top: -15px;
	}
	.loan_date
	{
		margin-left: 460px;
		margin-top: -235px;
	}
	.start_date
	{
		margin-left: 460px;
		margin-top: -210px;
	}
	.end_date
	{
		margin-left: 460px;
		margin-top: -185px;
	}
	.with_date
	{
		margin-left: -60px;
		margin-top: -165px;
	}
	.with1
	{
		margin-left: 30px;
	}
	.with
	{
		margin-left: 125px;
	}
	.computeAmt
	{
		font-family: courier;
		font-size: 18px;
	}
	.viewInterest
	{
		font-family: courier;
		font-size: 18px;
	}
	.otherCharges
	{
		font-family: courier;
		font-size: 18px;
	}
	.total
	{
		margin-left: 580px;
		margin-top: -110px;
	}
	.total1
	{
		margin-left: 580px;
		margin-top: -105px;
	}
	.total2
	{
		margin-left: 580px;
		margin-top: -100px;
	}
	.total3
	{
		margin-left: 580px;
		margin-top: -95px;
	}
	.total4
	{
		margin-left: 580px;
		margin-top: -90px;
	}
	.total5
	{
		margin-left: 580px;
		margin-top: -85px;
	}
		.submit
	{
		margin-left: 700px;
		margin-top: -40px;
	}
	.loan_amount
	{
		margin-left: -125px;
		margin-top: 50px;
	}

	.monthly_amount
	{
		margin-left: -125px;
		margin-top: -100px;
	}
	.interest
	{
		margin-left: -125px;
		margin-top: -95px;
	}
	.other_charges
	{
		margin-left: -125px;
		margin-top: -90px;
	}
	.processing_fee
	{
		margin-left: -125px;
		margin-top: -85px;
	}
	.net_proceeds
	{
		margin-left: -125px;
		margin-top: -70px;
		font-size: 16px;
	}

</style>
<form  action="<?php echo base_url('sales/add_loan_application_form/') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

<?php if($this->session->flashdata('added_client')) : ?>
  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('added_client'); ?></p>
<?php endif; ?>
<div class="row">    
    <div class="col-sm-17">
        <div class="panel panel-primary">
          <div class="panel-heading">
                      <h5 class="panel-title">Client Loan Application</h5>
          </div>
            <div class="client_id">
             	<div class="form-group" >
                <label class="control-label col-md-2">Client ID</label>
                  <div class="col-md-5">
                      <input class="form-control input-lg t"  type="text" name="client_id" readonly="" value="<?php echo $client->id; ?>"  >    
                  </div>
                  <div class="name">
	                  <div class="col-md-5">
	                      <input class="form-control input-lg q"  type="text" name="client_name" readonly="" value="<?php echo $client->fullname; ?>" >    
	                  </div>  
                  </div>                          
            	</div> 
            </div>

            <div class="border">
             	<div class="form-group" >
             		<div class="pension_amount" >
	                <label class="control-label col-md-2	">Pension Amount</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t test"  type="text" name="pension_amount" readonly="" id="pensionAmt" value="<?php echo $client->pension_amount; ?>"  >    
	                  </div>
                </div>  
            	</div> 

            	<div class="form-group">
            		<div class="type" >
							    <label class="control-label col-md-2">Type</label>
								    <select class="form-control" id="type" name="loan_type">
								      <option value="sel">Select</option>
								      <option value="New">New Client</option>
								      <option value="Renewal">Renewal</option>
								      <option value="Additional">Additional</option>
								      <option value="Extension">Extension</option>
								    </select>
								</div>    
							</div>

							<div class="form-group">
            		<div class="type" >
							    <label class="control-label col-md-2">Terms</label>
								    <select class="form-control hid" id="terms" name="loan_terms">
								    	<option value="0">Select</option>
								      <option value="3">3</option>
								      <option value="6">6</option>
								      <option value="9">9</option>
								      <option value="12">12</option>
								      <option value="15">15</option>
								    </select>
								</div>    
							</div>

							<div class="form-group" >
            		<div class="loanable_amount" >
	                <label class="control-label col-md-3">Loanable Amount</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid loanAmt"  type="text" name="loan_amount">    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="loan_amount" >
	                <label class="control-label col-md-3">Principal Amount</label>
	                  	<div class="computeAmt"></div>
		            </div> 
		          </div>

            	<div class="form-group" >
            		<div class="available_amount" >
	                <label class="control-label col-md-3">Available Amount</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid availableAmt"  type="text" name="available_amount">    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="loan_date" >
	                <label class="control-label col-md-3">Loan Date</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid date"  type="text" name="loan_date" id="loan" value="<?php echo date('Y/m/d'); ?>">    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="start_date" >
	                <label class="control-label col-md-3">From</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid date"  type="text" name="loan_start_date" id="startDate" value="">    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="end_date" >
	                <label class="control-label col-md-3">To</label>
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid date"  type="text" name="loan_end_date" id="endDate" value="">    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="with_date" >
	                <label class="control-label col-md-2 with1">Withdrawal</label>
	                  <select class="form-control with hid">
		                  	<option value="0">Select</option>
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
		          </div>

		          <div class="form-group" >
            		<div class="total" >
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid" id="principalAmt"   type="text" name="principal_amount" >    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="monthly_amount" >
	                <label class="control-label col-md-3">Monthly Amount</label>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="total1" >
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid" id="monthlyAmt"  type="text" name="monthly_amount" >    
	                  </div>
		            </div> 
		          </div>

		         <div class="form-group" >
            		<div class="interest" >
	                <label class="control-label col-md-3">Interest</label>
	                  	<div class="viewInterest"></div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="total2" >
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid" id="interest"  type="text" name="interest_amount" >    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="other_charges" >
	                <label class="control-label col-md-3">Other Charges</label>
	                 <div class="otherCharges"></div>
		            </div> 
		           
		          </div>

		          <div class="form-group" >
            		<div class="total3" >
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid" id="otherCharges"  type="text" name="other_charges_amount" >    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="processing_fee" >
	                <label class="control-label col-md-3">Processing Fee</label>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="total4" >
	                  <div class="col-md-5">
	                      <input class="form-control input-sm t hid" id="processingFee"  type="text" name="processing_fee_amount" >    
	                  </div>
		            </div> 
		          </div>

		          <div class="form-group" >
            		<div class="net_proceeds" >
	                <label class="control-label col-md-3">NET PROCEEDS</label>
		            </div> 
		          </div>

		           <div class="form-group" >
            		<div class="total5" >
	                  <div class="col-md-5">
	                      <input class="form-control input-lg t hid" id="netProceeds"  type="text" name="net_proceeds" >    
	                  </div>
		            </div> 
		          </div>

		           <div class="form-group" >
            		<div class="submit" >
            			<div class="col-md-5">
	                  <input type="submit" class="btn btn-primary" value="Submit">
	                </div>  
		            </div> 
		          </div>


        		</div>
        		<br>
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
	$(document).ready(function(){
	
		var val = $('#pensionAmt').val();
		var pensionCompute =Math.ceil((val+1)/100)*100;
		var pensionCompute1 = pensionCompute - 100 ; 
		$('.availableAmt').val(pensionCompute1.toFixed(2));

		$('.hid').attr('disabled', true).css('background-color', '#F5F5F5');
		$('#type').change(function(){
			if($(this).val() == 'sel'){
				$('.hid').attr('disabled', true).css('background-color', '#FFFFFF');
				$(this).val('sel').attr('disabled', false).css('background-color', '#FFFFFF');
			}
			else if($(this).val() == 'New'){
				alert('Choose Terms!');
				$(this).val('New').attr('disabled', false).css('background-color', '#FFFF00');
				$('.hid').attr('disabled', false).css('background-color', '#FFFF00');
			}
		});

		$('#terms').change(function(){
			$('.loanAmt').val(pensionCompute1.toFixed(2));
			if($(this).val() == '0')
			{
				var loanAmt = '';
				var viewComputeAmt = '';
				var totalPrincipalAmt = '';
				var viewPensionAmt = '';
				var totalInterest = '';
				var viewOtherCharges = '';
				var viewInterest = '';
				var totalOtherCharges = '';
				var viewProcessingFee = '';
				var totalNetProceeds = '';
				var startDate = '';
				var endDate = '';

				$('.viewInterest').html(viewInterest);
				$('.computeAmt').html(viewComputeAmt);
				$('.otherCharges').html(viewOtherCharges);
				$('.viewInterest').html(viewInterest);

				$('.loanAmt').val(loanAmt);
				$('#principalAmt').val(totalPrincipalAmt);
				$('#monthlyAmt').val(viewPensionAmt);
				$('#interest').val(totalInterest);
				$('#otherCharges').val(totalOtherCharges);
				$('#processingFee').val(viewProcessingFee);
				$('#netProceeds').val(totalNetProceeds);
				$('#startDate').val(startDate);
				$('#endDate').val(endDate);	

			}
			else{

				var monthNames = ["January", "February", "March", "April", "May", "June",
				  "July", "August", "September", "October", "November", "December"
				];
				var test = $('#loan').val();
				var str = test.split("/");
				var terms = $(this).val();
				var startDate = new Date( str[0], str[1] - 1);
				var endDate = new Date( str[0], str[1] - 1);
				startDate.setMonth(startDate.getMonth() + 1);
				endDate.setMonth(endDate.getMonth() + parseInt(terms));
				$('#startDate').val(monthNames[startDate.getMonth()] + ' ' + startDate.getFullYear());
				$('#endDate').val(monthNames[endDate.getMonth()] + ' ' + endDate.getFullYear());

				var totalPrincipalAmt = $(this).val() * pensionCompute1;
				var totalInterest = ((0.02 * $(this).val())* totalPrincipalAmt);
				var totalOtherCharges = (0.006 * totalPrincipalAmt);
				var totalNetProceeds = (totalPrincipalAmt - (totalInterest + totalOtherCharges + 150));
				var viewInterest = '0.02' + ' ' + '(' + '0.02' + ' ' + 'x' + ' ' + $(this).val() + ')';
				var viewComputeAmt ='(' + pensionCompute1 + ' ' + 'x' + ' ' + $(this).val() + ')';
				var viewOtherCharges = 0.006;
				var viewPensionAmt = pensionCompute1;
				var viewProcessingFee = 150;

				

				$('.viewInterest').html(viewInterest);
				$('.computeAmt').html(viewComputeAmt);
				$('.otherCharges').html(viewOtherCharges);

				$('#principalAmt').val(totalPrincipalAmt.toFixed(2));
				$('#monthlyAmt').val(pensionCompute1.toFixed(2));
				$('#interest').val(totalInterest.toFixed(2));
				$('#otherCharges').val(totalOtherCharges.toFixed(1));
				$('#processingFee').val(viewProcessingFee.toFixed(2));
				$('#netProceeds').val(totalNetProceeds.toFixed(1));
				
				
			}
			
		});

	});
</script>
