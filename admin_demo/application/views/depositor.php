<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="table_script.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');?>

    <!-- MetisMenu CSS -->
    <?php echo link_tag('assets/vendor/metisMenu/metisMenu.min.css');?>

    <!-- Custom CSS -->
    <?php echo link_tag('assets/dist/css/sb-admin-2.css" rel="stylesheet');?>

    <!-- Custom Fonts -->
   <?php echo link_tag('assets/vendor/font-awesome/css/font-awesome.min.css');?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
	
	
	h3
	{
		width : 100%;
		text-align:center;
		border-bottom:1px solid #000;
		line-height : 0.1em;
		margin:10px 0 20px;
		
	}
	
	h3 span
	{
		background: #fff;
		padding:0 10px;
		
	}
	
	
	
	</style>
	
<script src = "../js/table_script.js"></script>


</head>

<body>
 <script>
    function isNumeric(e) { 
    var x=$(e).val();
    $(e).val(x.replace(/[^0-9\.,]/g,''));  
    }
	
	function phonenumber(inputtxt)  
        {  
          var phoneno = /^\d{10}$/;  
          if(inputtxt.value.match(phoneno))  
          {  
              return true;  
          }  
          else  
          {  
             alert("Not a valid Phone Number");
					
             return false;  
          }  
          }
	
    </script>
   
	<?php include "headside2.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Depositor Form</h1>
                </div>
         
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Add new depositor
                        </div>
						<form name = "depo" action="<?php echo site_url('DepositorC/add_depositor'); ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                        <div class="col-lg-4">
										<div class="form-group">
                                            
                                            <input class="form-control" type="text" name="dname" placeholder="Depositor Name" required/>
                                        </div>
										</div>
										
										 <div class="col-lg-4">
										<div class="form-group">
                                            
                                            <input class="form-control" name="contact" placeholder="Contact Number" onkeypress="isNumeric(this);" onblur="phonenumber(this);" required = "">
                                        </div>
										</div>
										<div class="col-lg-4">
										<div class="form-group">
                                            
                                            <input class="form-control" name="email"  placeholder="Email Address" type="email" required/>
                                        </div>
										</div>
										
										 <div class="col-lg-4">
										<div class="form-group">
                                            
                                            <select class="form-control" name = "tenderid" id = "tenderid" required = "true" onchange="getTender();">
											  <option value="">Select tender id </option>
											   <?php
												 foreach($tender_list as $value) { ?>
										
													<option value ="<?php echo $value->id?>"><?php echo $value->tender_id?></option>
													<?php
												 } ?>
									       </select>
										 
                                        </div>
										</div>                                        
										
										<div class="col-md-4">
										<div class="form-group">                      
												<input class="form-control" name="work" id="work" placeholder="Work Name" readonly>
										</div>
										</div>
										                                        
									    <div class="col-md-4">
										<div class="form-group">                                            
												<input class="form-control" name="amt" placeholder="Total Amount"  id="amt" onkeypress="isNumeric=(this)";  readonly >
										</div><br>
									    </div>
										<br>
								
									
							     </div>


								<h3><span> Add Security Preference </span></h3> <br>
														
									<div class="col-lg-12">		
										<div class="col-lg-3">									
											<div class="form-group">                                            
												<select class="form-control" id = "security" name ="security" >
												  <option value="" disabled selected>Select Deposit Type </option>
													<option>BG</option>
													<option>TDR</option>
													<option>FDR</option>                                              
												</select>
											</div>
										</div>
											
											
											<div class="col-lg-3">
											<div class="form-group">
                                            
                                            <input class="form-control" type="text" name="securityno" id="securityno" placeholder="Security Deposit No." />
											</div>
											</div>
											
										 <div class="col-md-3">

										<div class="form-group">
                                            
                                            <input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" onkeypress="isNumeric(this);" />
                                        </div>
										</div>
										 
										
										 <div class="col-md-3">
										<div class="form-group">
                                            <!--label>Security Deposit Date</label-->
                                         <div class="form-row show-inputbtns">
												<input class="form-control" placeholder="Security Deposit Date" class="textbox-n" type="text" name = "security_date" id = "security_date" onfocus="(this.type='date')" onblur="(this.type='text')"  id="date"> 
		
										</div>
											
                                        </div>
										</div>
										
									</div>
										
								    <div class="col-md-12">
										 <div class="col-md-3">
										<div class="form-group">
                                            
                                            <select class="form-control" name = "bank" id = "bank" >
											  <option value="" disabled selected>Select Bank Name </option>
											   <?php
												 foreach($bank_list as $value) { ?>
										
													<option value ="<?php echo $value->bank_name?>"><?php echo $value->bank_name?></option>
													<?php }
													?>
												  
                                            </select>
                                        </div>
										</div>
										 
										 
										 <div class="col-md-3">
										<div class="form-group">
                                            
                                            <input class="form-control" type="text" name="branch"  id="branch" placeholder="Bank Branch"/>
                                        </div>
										</div>
										 
										 
										
										
										
										 <div class="col-md-3">
										<div class="form-group">
                                            <!--label>Validity Date</label-->
                                          <!--input type = "date" name = "valid_date" id = "valid_date"  required = "" class="form-control" -->
										  
										  <input class="form-control" placeholder="Validity Date" class="textbox-n" type="text" name = "valid_date" id = "valid_date" onfocus="(this.type='date')" onblur="(this.type='text')"  id="date"/> 
											
                                        </div>
										</div>
											
											
											<div class="col-md-3">
											<div class="form-group">                                            
												
												<input type="button" class="btn  btn-primary btn-block" onclick="add_row();" value="Add">
												<!--<a href=" class="btn-info btn-sm">
															<i class='fa fa-pencil' ></i>
														</a>-->
											</div>
										    </div>
											
											
										</div>
									
									
                                    
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Security Deposit Details
                        </div>
                        <!-- /.panel-heading -->
						 
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="data_table">
                                <thead>
                                    <tr>
                                        <th>Deposit Type</th>
                                        <th>Deposit No.</th>
                                        <th>Amount</th>
                                        <th>Deposit Date</th>
                                        <th>Bank Name</th>
										<th>Bank Branch</th>
										<th>Validity Date</th>
									
										<th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	
                                </tbody>
                            </table>	
										

								

										</div>
										</div></div></div>
										
								
									 <div class="col-lg-6">										 

										<div class="form-group">
                                            
                                            <textarea class="form-control" placeholder="Description (if any)" name="description" rows="3"></textarea>
                                        </div>
										</div>
										 <div class="col-lg-6">										 

										<div class="form-group">
                                            
                                            <label for="file">File:</label>
											<input type="file" name="docfile" />
                                        </div>
										</div>
										
										<div class="col-md-12">
										<div class="col-md-3">
											<div class="form-group">                                            
										
												
										<input type='submit' class='btn  btn-primary btn-block' id="Button" value='Save & Submit' onclick="phonenumber (document.depo.contact)" disabled>	
											</div>
										</div>
										</div>
											
										
									
								</div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    			
								</div>
                                <!-- /.col-lg-6 (nested) -->
								</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    <!-- /.panel -->
             
            <!-- /.row -->
  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=" <?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=" <?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src=" <?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src=" <?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>
	
	<script src=" <?php echo base_url('assets/js/table_script.js');?>"></script>
	<script>
	function getTender(){
		var tid = $("#tenderid").val();
		$.ajax({
		 type: "POST",
		 url: '<?php echo base_url('DepositorC/getTeder_data'); ?>', 
		 data:{tid: tid},
		success: function(result) {
		 // alert(result);
		  var obj = $.parseJSON(result);
		 $("#work").val(obj[0].work);
		 $("#amt").val(obj[0].amount);
		
		},
		 error: function(xhr, status, error) {
		  alert(xhr.responseText);
		}
		});
	}
	</script>
	
	

</body>

</html>
