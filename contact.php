<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Team - Flair Automation Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- start common header -->
        <?php include("includes/common_header.html");?>
<!-- end common header -->
</head>
<body>
	<?php
	if(isset($_POST['submitForm']))
	{
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'admin';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}

	if(! get_magic_quotes_gpc() )
	{
	   $full_name = addslashes ($_POST['name']);
	   $mobile_no = addslashes ($_POST['phoneNumber']);
	   $email_id = addslashes ($_POST['email']);
	   $subject = addslashes ($_POST['subject']);
	   $message_text = addslashes ($_POST['message']);
	}
	else
	{
	   $full_name = $_POST['name'];
	   $mobile_no = $_POST['phoneNumber'];
	   $email_id = $_POST['email'];
	   $subject = $_POST['subject'];
	   $message_text = $_POST['message'];
	}
	

	$sql = "INSERT INTO contact_table ".
	       "(full_name,mobile_no, email_id, subject,message_text) ".
	       "VALUES('$full_name',$mobile_no, '$email_id', '$subject', '$message_text')";
	mysql_select_db('flair');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($conn);
	}
	else
	{
	?>
<div id="wrapper">
	<!-- start header -->
        <?php include("header.html");?>
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
				<form id="contactform" action="<?php $_PHP_SELF ?>" method="post" class="validateform" name="send-contact">
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
	
	<!-- start footer -->
        <?php include("footer.html");?>
	<!-- end footer -->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- start common footer -->
        <?php include("includes/common_footer.html");?>
<!-- end common footer -->
<?php
}
?>
</body>
</html>