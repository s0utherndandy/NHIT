<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jazz Up Your IT - New Horizons Toronto Canada</title>

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
<img src="images/jazzit.jpg" width="100%" class="img-responsive"/><br/>
</div>
        <!-- Content Row -->
<div class="container topBar mainSection">
 
                    <!-- /.col-md-8 -->
            <div class="col-md-8 topBar rightpadding">
                
 <h4 class="h1-blue">CORPORATE TRAINING</h4>
 <hr class="hr-pink"/>
            <p>New Horizons Toronto is a premier training provider, with award-winning instructors and a no-cancellation policy. We are able to utilize the best resources throughout our network in order to provide the highest quality of training, while also keeping costs down for our clients.<br/><br/>

New Horizons offers an extensive selection of vendor-authorized training and certifications for top technology providers, such as Adobe, Cisco, Citrix, Microsoft and VMware. In fact, we are Microsoft's largest training provider—delivering more than 40% of all authorized MS training worldwide. <br/><br/> <img src="images/longBanner.jpg" width="100%" class="img-responsive"/><br/>


Choosing proper training or certification paths is often difficult, but our clients appreciate how easy we make that process. New Horizons can help your company align the appropriate learning solutions to each of your department's needs, including software upgrades or company-wide deployment. We also have the ability to help managers realize training opportunities that they would have otherwise overlooked.</p>


<br/><br/>
 <h4 class="h1-blue">DIPLOMA PROGRAMS</h4>
 <hr class="hr-pink"/>
            <p>New Horizons is a world leader in IT training. New Horizons Computer Learning Center of Toronto is powered by ObjectSharp Corporation, and has joined the New Horizons Worldwide, Inc. network - the world’s largest computer training company. New Horizons’ business strategy focuses on continued worldwide expansion to meet the ever-increasing demands of the technology revolution. The New Horizons network provides students more ways to learn, more courses at more times and in more locations than any other company in the industry. <br/><br/> 

A continued skills shortage for IT professionals, ever-changing operating systems, new technology developments and the expansion of the Internet are driving tremendous demand for worldwide training. New Horizons offers five different diploma programs in the I.T. field including;
<div class="well well-sm col-lg-12"> <h4 class="h1-blue2">IT HELPDESK ASSOCIATE</h4> <hr class="hr-pink2"/><p>The IT Help Desk Associate program is designed for those who wish to provide first-line technical support to computer users experiencing difficulties with computer hardware and with computer applications and communications software. The goal of this program is to increase the knowledge and technical competency of entry-level Help Desk Associates to demonstrate a wide range of skills required in today’s technical environments.</p></div>

<div class="well well-sm col-lg-12"><h4 class="h1-blue2">IT OFFICE </h4> <hr class="hr-pink2"/><p>The IT Office program is designed for those who wish to provide office and technical customer service support. The goal of this program is to increase the knowledge and technical competency to support technicians with office support functions, communicate electronically and in person with customers, collect, organize and maintain a problems and solutions log for use by technical support analysts, and prepare reports and communication to customers and internal teams.</p></div>
<div class="well well-sm col-lg-12"> <h4 class="h1-blue2">IT SERVICE ADMINISTRATOR</h4> <hr class="hr-pink2"/><p>This Information Technology program is designed to empower students with skills and knowledge to increase their workplace competence and professional advantage. A balanced learning approach provides students with an appropriate skill set for their field of study while preparing them for the daily activities and duties to work as an IT Professional.</p></div>
<div class="well well-sm col-lg-12"><h4 class="h1-blue2">IT SERVICE TECHNICIAN</h4> <hr class="hr-pink2"/><p>The IT Service Technician program is designed for those who wish to provide first-line technical support to computer users experiencing difficulties with computer hardware and with computer applications and communications software. The goal of this program is to increase the knowledge and technical competency of entry level IT Service Technicians so they can demonstrate a wide range of skills required on the job in today’s technical environments.</p></div>

            </p>

            </div>
            


            <!-- /.col-md-4 -->
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
					<button onClick="goog_report_conversion('');ga('send', 'event', 'Jazz Lead Form', 'Submit', 'Jazzfm2016');" type="submit" class="btn btn-success">Get Information!</button>
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
