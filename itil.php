<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ITIL Training</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link href="css/mainCSS.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>

<div class="container-fluid nopadding topBar">

<div class="container-fluid topBar">
<div class="container">
        <img src="images/nh-logo.jpg" class="pull-left logoIMG" alt="" width="150px">
</div>
</div>

<div class="container"><br/>
<img src="images/itil2.jpg" width="100%" class="img-responsive"/><br/>
</div>
        <!-- Content Row -->
<div class="container topBar mainSection">
 
                    <!-- /.col-md-8 -->
            <div class="col-md-8 topBar rightpadding">
                
 <h4 class="h1-blue">EC-Council Certified Ethical Hacker (CEH) v9.0 (EVENING)</h4>
 <hr class="hr-pink"/>
 
 <p>ITIL is the most widely accepted and trusted approach to IT service management in the world, providing a cohesive set of global best practices, drawn from the public and private sectors internationally. ITIL enables utilization of leading edge IT capabilities to provide world class services and maximize value.<br/><br/>
 ITIL is managed by AXELOS, and is part of their Best Practice Solutions portfolio, which are designed to help organizations become more effective across a range of key business capabilities including IT Service Management, project, programs, and security. 
</p>
 
 <p>
    <ul class="h1-blue uldecorationnone">
 <li><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;May 11-13 from 9:00am-5:00pm</li>
<li><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;July 18-20 from 9:00am-5:00pm</li>
<li><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;Aug 29-31 from 9:00am-5:00pm</li>
 </ul>
 </p><br/>
 

 </p>
 
 
 
 
 
            </div>
            


            <!-- /.col-md-4 -->
            <div class="col-md-4 topBar nopadding">
            
            
            <div class="panel panel-primary">
			<div class="panel-heading">
				<h4>RSVP to the Event&nbsp; &nbsp; <span class="glyphicon glyphicon-circle-arrow-down"></span></h4>
			</div>
			<div class="panel-body">
				<form id="myForm" action="includes/b2b_form_process.php" method="post">
					<div class="form-group">
						<label for="FirstName">First Name</label>
						<input class="form-control" type="text" id="FirstName" name="FirstName" placeholder="First Name"/>
					</div>
					<div class="form-group">
						<label for="LastName">Last Name</label>
						<input class="form-control" type="text" id="LastName" name="LastName" placeholder="Last Name"/>
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input class="form-control" type="email" id="Email" name="Email" placeholder="Email"/>
					</div>
					<div class="form-group">
						<label for="Telephone">Phone #</label>
						<input class="form-control" name="Telephone" type="text" id="Telephone" placeholder="###-###-####"/>
					</div>
					<div class="form-group">
						<label for="Company">Company</label>
						<input class="form-control" name="Company" type="text" id="Company" placeholder="My Company Inc."/>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="Opt_In" value="Yes"/> I agree to receive emails regarding my program of interest.
						</label>
					</div>
					<input type="hidden" name="AD_Keyword" id="AD_Keyword" value="<?php echo $keyword;?>"/>
					<input type="hidden" name="AD_ID" id="AD_ID" value="<?php echo $ad_id;?>"/>
					<button onClick="goog_report_conversion('');ga('send', 'event', 'Excel Lead Form', 'Submit', 'excel2013part1');" type="submit" class="btn btn-success">Get Information!</button>
				</form>
			</div>
	
		</div>
               
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

 
    </div>
    <!-- /.container -->
       <div class="container-fluid blackBar"> 
    <div class="container">
        <img src="images/nh-logo-black.png" class="pull-left logoIMG" alt="">
        <img src="images/ccg-logo.jpg" class="pull-right logoIMG" alt="">
</div>
</div></div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
<?php include_once('includes/tracking_footer.php'); ?>




</body>

</html>
