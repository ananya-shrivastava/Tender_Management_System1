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
    echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');

    echo link_tag('assets/vendor/metisMenu/metisMenu.min.css');

    echo link_tag('assets/dist/css/sb-admin-2.css" rel="stylesheet');

    echo link_tag('assets/vendor/morrisjs/morris.css" rel="stylesheet');

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

        <!-- Navigation -->
   	<?php include "headside2.php"; ?>
        <div id="page-wrapper">
            <div class="row"><br>
                <div class="col-lg-12">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                     <div class="row">
                  
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-square-o   fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
					
                                    <div class="huge"><?php echo $countRow;?></div>
                                    <div>Tenders</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                         </div>
                        
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-male fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $countRow4; ?></div>
                                    <div>Depositors</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $countRow1;?></div>
                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bank fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $countRow2;?></div>
                                    <div>Banks</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			<?php
						            $count1=0;
									$count2=0;
									$count3=0;
									if(isset($security_list1)) {
										foreach($security_list1 as $value) {
										 if($value->date1<=7)
											{
											  $count3++;
											}
											 if($value->date1<=15 && $value->date1>7)
											{
											 
                                              $count2++;											 
											}
											 if($value->date1>15 && $value->date1<30)
											{
											  $count1++;	
											}	
										}
									}										
											?>
										
            <!-- /.row -->
            <div class="row">

                    
                    <!-- /.panel -->
                                      
             <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alert Notifications
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="alert alert-danger">
						 <div class="row">
						    <div class="col-xs-3 ">
                                <div class="huge"><?php echo $count3; ?> </div>
								 
							 </div>
                              <div class="col-xs-9 text-right">	
                                   <div>Security deposits will get expire in less than 7 days</div>							  
                              </div>
							</div>
						  </div>	
                           
                            <div class="alert alert-warning">
							<div class="row">
						    <div class="col-xs-3 ">
                                <div class="huge"><?php echo $count2; ?> </div>
								</div>
								<div class="col-xs-8 text-right">	
                                   <div>Security deposits will get expire in less than 15 days</div>							  
                              </div>
								
                            </div>
							</div>
                            <div class="alert alert-info">
                                 <div class="row">
						    <div class="col-xs-3 ">
                                <div class="huge"><?php echo $count1; ?> </div>
								</div>
								<div class="col-xs-8 text-right">	
                                   <div>Security deposits will get expire in less than 30 days </div>							  
                              </div>
								
                            </div>
                            </div>
                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-4 -->
                <div class="col-lg-8">
				 <div class="panel panel-default">
			     <div class = "panel-heading">EXPIRING SECURITY DEPOSITS DETAILS</div>
				<div class="panel-body">
                            <table width="150%" class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Depositors Name</th>
										<!--<th>Tender Name</th> -->
										<th>Security Type</th>
                                        <th>Security No</th>
                                        <th>Validity Date</th>
                                        <th>Amount</th>
										<th>Days Left</th>
										
                                       
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								/*if(isset($countdays)){
									foreach($countdays as $value1) {
										$datetime1 = new Datetime($value1['Validitydate']);
										$datetime2 = new Datetime("now");
										$interval = $datetime2->diff($datetime1);
										$out=$interval->format('%d days');
										echo $out;
									}
								}*/
								?>                 
								<?php
						            $count1=0;
									if(isset($security_list1)) {
										foreach($security_list1 as $value) {?>
										<?php if($value->date1<=7)
											{
											 $color = 'danger';	
											 
											}
											 if($value->date1<=15 && $value->date1>7)
											{
											 $color='warning';
                                            										 
											}
											 if($value->date1>15)
											{
											 $color='info';	
											}										
											?>
                                   
								  
										<tr class= "<?php echo $color; ?>">
													<td><?php echo $value->name;?></td>
													<!--<td><?php echo $value->work;?></td>-->
													<td><?php echo $value->S_type;?></td>
													<td><?php echo $value->S_no;?></td>
													<td><?php echo $value->Validitydate;?></td>
													<td><?php echo $value->Amount;?></td>
											        <td><?php echo $value->date1;?></td>

                                                   
													
										</tr>
									<?php	}
									 }
									?>
                                  
                          
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           </div>
                        </div>
				</div>
			
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"</script>

    <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"</script>


    <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"</script>


    <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url('assets/vendor/raphael/raphael.min.js');?>"</script>

        <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js');?>"</script>

        <script src="<?php echo base_url('assets/data/morris-data.js');?>"</script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>

</body>

</html>
