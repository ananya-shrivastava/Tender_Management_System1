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
   <?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');

  
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
                    <h1 class="page-header"></h1>
                </div>
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         USER REGISTRATION
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="<?php echo site_url('User/add_user'); ?>">
                                       
                                        <div class="form-group input-group">
                                           
                                            <input class="form-control" placeholder="Username" type ="text" name="user_name" id ="u_id" required/>
					    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>
					 <div class="form-group input-group">
                                           
                                            <input class="form-control" placeholder="Contact Number " type ="text" onkeyup="isNumeric(this);" onblur="phonenumber(this);" name="contact_no" id ="c_no" required/>
					    <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>  	
	                                      </div>
					 <div class="form-group input-group">
                                           
                                            <input class="form-control" placeholder="Email Address" type ="email" name="email_id" id ="t_id" required/>
					    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        </div>
					 <div class="form-group input-group">
                                           
                                            <input class="form-control" placeholder="Password" type ="password" name="password" id ="t_id" required/>
					    <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                        </div>
					<div class="form-group">                                            
						<select class="form-control" id = "security" name ="security"  required = "">
							<option value="" disabled selected>Select User Type </option>
							<option>Admin</option>
							<option>Data Entry Operator</option>
							                                             
							</select>
							</div>
					
                                       
                                       
                                        
                                        
                                           
                                        
                                       
                                       <div class="col-md-12">
<div class="col-md-2"></div>
                                       <div class="col-md-8">
                                      
                                        <button type="submit" class="btn btn-lg btn-primary btn-block" align ="center">ADD USER</button>
                                        </div>

<div class="col-md-2"></div>
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


    <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         User Detail
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>UserName</th>
                                        <th>Contact</th>
                                       
                                        <th>Email</th>
                                       <th>User Type</th>
									   <th>User Id</th>
 <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
									if(isset($user_list)) {
										foreach($user_list as $value) {?>
										<tr <?php echo 'class="odd gradeX"';?>>
													<td><?php echo $value->username;?></td>
													<td><?php echo $value->contact_no;?></td>
													<td><?php echo $value->email;?></td>
													<td> <?php echo $value->type;?></td>
													<td><?php echo $value->userid;?></td>
												    <td >
														<a href="<?php echo site_url('User/edit_user/'.$value->userid.'/'.$value->type); ?>" class="btn-info btn-sm">
															<i class='fa fa-pencil' ></i>
														</a>
													</td>
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

    </div>






















                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
  

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>



 <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>

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
