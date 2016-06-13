<?php
	$keyword = $_GET['keyword'];
	$ad_id = $_GET['ad_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>ITIL FOUNDATION - New Horizons Computer Learning Centers

</title>
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Custom CSS -->
	<link href="css/mainCSS-b2b.css" rel="stylesheet">
	
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
				<img src="images/logo_white.png" class="pull-left logoIMG" alt="">
			</div>
		</div>
		
		<div class="row heroBar">
			<div class="container">
				<h1 class="h1-blueBG">ITIL FOUNDATIONS <small>TRAINING COURSE</small></h1>
				<h4 class="grayFONT itFONT">Get trained by industry leading experts.</h4>
			</div>
		</div>

	
		<div class="container topBar">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					
				</ol>
		
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/ITIL.jpg" alt="female working behind a computer" width="100%">
						<div class="carousel-caption">
							
						</div>
					</div>
					
					<div class="item">
						<img src="images/ITIL_2.jpg" alt="two people at a job interview shaking hands" width="100%">
						<div class="carousel-caption">
							
						</div>
					</div>
					
				
					
					
				</div>
	
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	
	

		
		
	<!-- Content Row -->
	<div class="container topBar mainSection">
	

		<div class="col-md-4 topBar nopadding">
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>PROGRAM SUMMARY</h5>
				</div>
				<div class="panel-body">
					<p>The ITIL Foundation is the entry level qualification which offers a general awareness of the key elements, concepts, and terminology used in the ITIL Service Lifecycle, including the links between Lifecycle stages, the processes used, and their contribution to Service Management practices.<br/><br/>The ITIL Certification scheme is comprised of a modular approach which allows students to build a foundation and then specialize in advanced concepts going forward.</p>
				</div>
			</div>
            

		</div>
	
		<div class="col-md-4 topBar">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>July 18-20 9:00am-5:00pm </h5>
			</div>
			<div class="panel-body">
				<ul>
					<li> ITIL Foundations</li>
				</ul>
			</div>
		</div>
        
        	<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Aug 29-31 9:00am-5:00pm </h5>
			</div>
			<div class="panel-body">
				<ul>
					<li>ITIL Foundations</li>
				</ul>
			</div>
		</div>
        

 
	</div>
	
		<div class="col-md-4 topBar nopadding">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Looking For More Information?</h4>
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
					<button onClick="goog_report_conversion('');ga('send', 'event', 'B2B Lead Form', 'Submit', 'MS Excel');" type="submit" class="btn btn-success">Get Information!</button>
				</form>
			</div>
	
		</div>
	<!-- /.col-md-4 -->
	</div>

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
	
	<?php include_once('includes/tracking_footer_B2B.php'); ?>


</body>

</html>
