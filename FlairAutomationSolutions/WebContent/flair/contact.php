<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/

include 'config.php';
*/



error_reporting (E_ALL ^ E_NOTICE);
$user_name = "root";
$password = "root";

$host = "localhost";
$con = mysql_connect($host, $user_name, $password);

if (isset($_POST) && !empty($_POST)) 
{
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['message']);
	$mobile = stripslashes($_POST['phoneNumber']);

	if($con)
	{
		$db = mysql_select_db('flair');
		if($db)
		{
			$sql = "INSERT INTO `contact_table`(`full_name`, `mobile_no`, `email_id`, `subject`, `message_text`) VALUES ('".$name."','".$mobile."','".$email."','".$subject."','".$message."')";
			$result = mysql_query($sql,$con);
			if(! $result )
			{
				die('Could not enter data: ' . mysql_error());
			}
			else
			{
				echo "Enter";
			}

		}
		else
		{
			echo "Cannot connect to database.";
		}
	}
	else
	{
		echo "can not connect to server.";
	}
}

/*$post = (!empty($_POST)) ? true : false;

if($post)
{




$error = '';



if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}else{
	echo "Fail";
}

}


}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact us - Flair Automation Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/custom.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span class="firstLogoWord" style="color:#FF6600;">flair</span> <span class="SecondLogoWord" style="color:#0028CA;">Automation Solutions</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About us</a></li>
                        
                       	<li style="padding-bottom: 0px;" id="multimenu">
                       	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>
                    		<ul class="dropdown-menu multi-level">
                    			<li class="dropdown-submenu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mechanical Design</a>
		                            <ul class="dropdown-menu">
		                                <li><a href="#">Jigs &#038; fixtures design</a></li>
		                                <li><a href="#">Process Structural Design</a></li>
		                            </ul>
		                        </li>

                    			<li class="dropdown-submenu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Installations &#38; Integration</a>
		                            <ul class="dropdown-menu">
		                                <li><a href="#">Mechanical Assembly</a></li>
		                                <li><a href="#">Mechanical Installations</a></li>
		                                <li><a href="#">Controls Integrations</a></li>
		                                <li><a href="#">Controls Installations</a></li>
		                            </ul>
		                        </li>

		                        <li class="dropdown-submenu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Controls Systems</a>
		                            <ul class="dropdown-menu">
		                                <li><a href="#">Concept &#38; System Design</a></li>
		                                <li><a href="#">Panel Design</a></li>
		                            </ul>
		                        </li>

		                        <li class="dropdown-submenu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Machinery &#38; Relocation</a>
		                            <ul class="dropdown-menu">
		                                <li><a href="#">-NA-</a></li>
		                                <li><a href="#">-NA-</a></li>
		                            </ul>
		                        </li>
                    		</ul>
                		</li>
                        <li><a href="gallery.html">Gallery</a></li>                        
                        <li><a href="team.html">Team</a></li>
                        <li class="actives"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-3 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-3 field">
							<input type="text" name="phoneNumber" placeholder="* Enter your phone number" data-rule="phoneNumber" data-msg="Please enter a valid phone number" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-3 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-3 field">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit" id="submitForm">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>

							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>flair Automation Solutions</strong><br/>
					 S. NO - 22/B-1,  Balajinagar,<br/>
					 Pune-Satara road, Pune-411043</address>
					
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<p>
						<h5 class="widgetheading">Contact Details</h5>
						<i class="icon-phone"></i>+91 8888891627<br/>
						<i class="icon-envelope-alt"></i>sb.flair@gmail.com<br/><br/>
						<i class="icon-phone"></i>+91 7218720004<br/>
						<i class="icon-envelope-alt"></i> nikhilesh.patel@flairautomation.com<br/><br/>
						<i class="icon-phone"></i>+91 7722033607<br/>
						<i class="icon-envelope-alt"></i> abhijeet.n@flairautomation.com<br/>
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Products</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3" style="display:none;">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; 2015 flair Automation Solutions  All right reserved.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>

<script type="text/javascript">


</script>
</body>
</html>