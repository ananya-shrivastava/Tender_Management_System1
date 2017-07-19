<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
	<?php
		echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');
		echo link_tag('assets/vendor/metisMenu/metisMenu.min.css');
		echo link_tag('assets/dist/css/sb-admin-2.css');
		echo link_tag('assets/vendor/font-awesome/css/font-awesome.min.css');
	?>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body>
	
   	<?php include "headside2.php"; ?>
        <div id="page-wrapper">
            <div class="row">
	<div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          BANK REGISTRATION
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form"  method="post" action="<?php echo site_url('BankC/update_bank/'.$edit_bank[0]->bank_id); ?>" >
                                       
                                        <div class="form-group">
                                           
                                            <input class="form-control" placeholder="Bank Name" name="bank_name" id ="bank_name"  value="<?php echo $edit_bank[0]->bank_name ?>" required>
                                        </div>
					 <div class="form-group">
                                           
                                            <input class="form-control" placeholder=" Bank Code" name="bank_code" id ="bank_code"  value="<?php echo $edit_bank[0]->bank_code ?>" required>
                                        </div>
				 <button type="submit" class="btn btn-lg btn-primary btn-block" align ="center">UPDATE</button>
                                        
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



                
        

	
				
				
				
				
				
				
                <!-- /.col-lg-12 -->
         
        <!-- /#page-wrapper -->

    </div>







                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>
    

    <!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script>
    








    <!-- DataTables JavaScript -->
	<script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    
	<script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
    
	<script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
    

    <!-- Custom Theme JavaScript -->
    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>














</body>

</html>
