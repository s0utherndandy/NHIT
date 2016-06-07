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
	
	<title>IT Help Desk Associate - New Horizons Canada</title>
	
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
				<img src="images/nh-logo.jpg" class="pull-left logoIMG" alt="">
			</div>
		</div>
		
		<div class="container-fluid heroBar">
			<div class="container">
				<h1 class="h1-blueBG">IT HELP DESK ASSOCIATE <small>CAREER TRAINING</small></h1>
				<h4 class="grayFONT itFONT">Career training for people looking to break into the IT field.</h4>
			</div>
		</div>

	
		<div class="container topBar">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
		
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/program-ithelpdesk.jpg" alt="female working behind a computer" width="100%">
						<div class="carousel-caption">
							<h3>IT Help Desk Associate</h3>
						</div>
					</div>
					
					<div class="item">
						<img src="images/career-services.jpg" alt="two people at a job interview shaking hands" width="100%">
						<div class="carousel-caption">
							<h3>Career Services department to help you find employment</h3>
						</div>
					</div>
					
					<div class="item">
						<img src="images/vendors.jpg" alt="boss leading a meeting with employees" width="100%">
						<div class="carousel-caption">
							<h3>Interactive classroom and lab</h3>
						</div>
					</div>
					
					<div class="item">
						<img src="images/corporatepromotion.jpg" alt="instructor helping students" width="100%">
						<div class="carousel-caption">
							<h3>Instructors with industry experience</h3>
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
	
		<div class="container"><br/>
			<img src="images/longBanner.jpg" width="%100" class="img-responsive"/><br/>
		</div>
		
		
	<!-- Content Row -->
	<div class="container topBar mainSection">
	

		<div class="col-md-4 topBar nopadding">
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Program Summary</h4>
				</div>
				<div class="panel-body">
					<p>The IT Help Desk Associate program is designed for those who wish to provide first-line technical support to computer users experiencing difficulties with computer hardware and with computer applications and communications software. The goal of this program is to increase the knowledge and technical competency of entry-level Help Desk Associates to demonstrate a wide range of skills required in today’s technical environments. 
<br/><br/>
This program validates a student’s ability to use a variety of computer software and other technological tools appropriate to perform essential business tasks, use fundamental system commands appropriate to operating systems, apply a structured process to problem solving, collect, analyze and organize relevant information from a variety of sources, install, configure and upgrade physical and logical elements on the network, interpret, produce and present work-related documents and information effectively and accurately, interact and communicate in various work situations, and troubleshoot problems related to Applications and operating systems.</p>
				</div>
			</div>
		</div>
	
		<div class="col-md-4 topBar">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>What career opportunities are available to graduates from the IT Help Desk program?</h5>
			</div>
			<div class="panel-body">
		
				<ul>
					<li>Technical Support Call Center Agent</li> 
					<li>Client Support Representative</li> 
					<li>Computer Help Desk Representative</li> 
					<li>Help Desk Technician</li> 
					<li>User Support Technician</li> 
					<li>Help Desk Agent</li> 
				</ul>
			</div>
		</div>
		<br/>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Students will be prepared for the following certifications</h4>
			</div>
			<div class="panel-body">
				<ul>
					<li>CompTIA A+</li> 
					<li>CompTIA Network +</li> 
					<li>Microsoft Certified Solutions Associate: MCSA Windows</li> 
				</ul>
		
			</div>
		</div>
	
	</div>
	
		<div class="col-md-4 topBar nopadding">

		<div class="panel panel-primary">
			<div class="panel-heading"><h4>Get More Information</h4>
		</div>
		<div class="panel-body">
			<form id="myForm" action="includes/b2c_form_process.php" method="post">
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
				<div class="checkbox">
					<label>
						<input type="checkbox" name="Opt_Out" value="n"/> I agree to receive emails regarding my program of interest.
					</label>
				</div>
				<input type="hidden" name="AD_Keyword" id="AD_Keyword" value="<?php echo $keyword;?>"/>
				<input type="hidden" name="AD_ID" id="AD_ID" value="<?php echo $ad_id;?>"/>
				<input type="hidden" name="MediaGroupID" id="MediaGroupID" value="91051"/>
				<input type="hidden" name="MediaGroup" id="MediaGroup" value="SEARCH ENGINE MARKETING"/>
				<input type="hidden" name="MediaID" id="MediaID" value="18906"/>
				<input type="hidden" name="Media" id="Media" value="New Horizons - Google Adwords"/>
				<button onClick="goog_report_conversion('');ga('send', 'event', 'Lead Form', 'Submit', 'IT Helpdesk');" type="submit" class="btn btn-success">Get Information!</button>
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
	
	<?php include_once('includes/tracking_footer.php'); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56a909550f45914704441f87/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
