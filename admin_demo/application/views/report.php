<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <?php

    
  echo  link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');

    
    echo  link_tag('assets/vendor/metisMenu/metisMenu.min.css');

   
    echo  link_tag('assets/dist/css/sb-admin-2.css');

    
     echo  link_tag('assets/vendor/font-awesome/css/font-awesome.min.css');
	 ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


 <script>
    function isNumeric(e) { 
    var x=$(e).val();
    $(e).val(x.replace(/[^0-9\.,]/g,''));  
    }
    </script>



    <?php include "headside2.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Report</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Report Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="<?php echo site_url('Welcome/report'); ?>">
                                       
                                        <div class="form-group">
                                           
					<select class="form-control" name = "d_name"  >
											  <option value="" disabled selected>Select Depositor Name </option>
											   <?php
												 foreach($depositor_list as $value) { ?>
										
													<option value ="<?php echo $value->depo_id?>"><?php echo $value->name?></option>
													<?php }
													?>
												  
                                            </select>                                        </div>
					 <div class="form-group">
                                           
                                            <input class="form-control" placeholder="Security Date" name="s_date" type = "date" id ="t_name" >
                                        </div>
					 <div class="form-group">
                                           
                                            <select class="form-control" name = "t_id"  >
											  <option value="" disabled selected>Select Tender Id </option>
											   <?php
												 foreach($tender_list as $value) { ?>
										
													<option value ="<?php echo $value->tender_id?>"><?php echo $value->tender_id?></option>
													<?php }
													?>
												  
                                            </select>
                                        </div>
										<div class="form-group">
                                           
							<select class="form-control" name = "s_type"  >
											  <option value="" disabled selected>Select Security Type </option>
											   <?php
												 foreach($security_list as $value) { ?>
										
													<option value ="<?php echo $value->S_type?>"><?php echo $value->S_type?></option>
													<?php }
													?>
												  
                                            </select>                                        </div>

										
											<div class="col-lg-12">
											
									
										
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" align ="center" value = "SUBMIT">
                                    
									
									</div>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			
          
            <!-- /.row -->
          
              		
				
				
			
                
                <!-- /.col-lg-12 -->
          
            <!-- /.row -->
           
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Report Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Depositor name</th>
										<th>Contact</th>
                                        <th>Tender Id</th>
                                        <th>Security date</th>
                                        <th>Amount</th>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									if(isset($report_list)) {
										foreach($report_list as $value) {?>
										<tr <?php echo 'class="odd gradeX"';?>>
													<td><?php echo $value->name;?></td>
													<td><?php echo $value->contact;?></td>
													<td><?php echo $value->tender_id;?></td>
													<td><?php echo $value->S_date;?></td>
													<td><?php echo $value->amount;?></td>
													
												
										</tr>
									<?php	}
									 }
									 
									else if(isset($detail_list)) {
										foreach($detail_list as $value) {?>
										<tr <?php echo 'class="odd gradeX"';?>>
													<td><?php echo $value->name;?></td>
													<td><?php echo $value->contact;?></td>
													<td><?php echo $value->tender_id;?></td>
													<td><?php echo $value->S_date;?></td>
													<td><?php echo $value->amount;?></td>
													
												
										</tr>
									<?php	}
									 }
								?>
                          
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
         
                <!-- /.col-lg-12 -->
        

	
				
				
				
				
				
				
                <!-- /.col-lg-12 -->
         
        <!-- /#page-wrapper -->

    </div></div></div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>



 <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js');?>"></script>


    
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>

    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>
