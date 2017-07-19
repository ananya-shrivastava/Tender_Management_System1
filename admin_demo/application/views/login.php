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


  echo link_tag('assets /vendor/metisMenu/metisMenu.min.css');

   echo link_tag('assets/dist/css/sb-admin-2.css');


    echo link_tag('assets/vendor/font-awesome/css/font-awesome.min.css');
	echo link_tag('assets/dist/css/image.css');

	
?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--
<style>
body, html {
	
    height: 100%;
    margin: 0;
}

.bg {
    
   background-image:

    
    height: 100%; 

   
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
-->


</head>

<body class = "bg">
    <img src = "">
     <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">RDC Tender Record Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"> 
	 
	<li>   <select  id = "language" name ="language"  required = "">
	   <option value="" disabled selected> Select Language </option>
	   <option>English</option>
	   <option>Hindi</option>	
	   </select>
			</li>																			
													                                        
	</ul>
    </div>
    <div class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method = "post">
                            <fieldset>
                                <div class="form-group input-group">
				<input class="form-control" placeholder="Username" name="name" type="text" required = "" autofocus>
				    
				<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            
                                           
                                   
                                </div>
                                <div class="form-group input-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"value=""  required >
				    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                                           
                                </div>
				
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label> 
				 <a href="#" style="float: right;">forgot password?</a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type ="submit" href="index.html" value ="Login" class="btn btn-lg btn-primary btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</div> <!-- bg div-->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js');?>"></script>

</body>

</html>
