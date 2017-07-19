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
                    <h1 class="page-header">Tender Registration</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          ADD NEW TENDER
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="<?php echo site_url('TenderC/update_tender/'.$edit_tender[0]->id); ?>">
                                       
                                        <div class="form-group">
                                           
                                            <input class="form-control" placeholder="Enter Tender Id" name="tender_id" id ="t_id" 
											  value="<?php echo $edit_tender[0]->tender_id ?>" required>
                                        </div>
											<div class="form-group">
                                           
                                            <input class="form-control" placeholder="Enter Tender Name" name="tender_name" id ="t_name" value="<?php echo $edit_tender[0]->work?>" required>
                                        </div>
										<div class="form-group">
                                           
                                            <input class="form-control" placeholder="Enter Total Amount" name="tender_amount" onkeyup=     "isNumeric(this);" id ="t_amount"  value="<?php echo $edit_tender[0]->amount ?>"  required>
                                        </div>

										<div class="col-lg-3"></div>
										<div class="col-lg-6">

                                        <button type="submit" class="btn btn-lg btn-primary btn-block" align ="center"> UPDATE </button>
                                        </div>
					<div class="col-lg-3">
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
