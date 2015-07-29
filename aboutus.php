<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Flair Automation Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- start common header -->
        <?php include("includes/common_header.html");?>
<!-- end common header -->
</head>
<body class="aboutus">
<div id="wrapper">

	<!-- start header -->
        <?php include("header.html");?>
	<!-- end header -->

	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active" id="aboutusid">About us</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active" id="boardid">Board Of Director</li>
					</ul>
				</div>
			</div>

		</div>
	</section>
<!-- start about us -->
	<h2 id="blankspace">&nbsp;</h2>
		<div id="aboutus_div">
			
		</div>

		<!-- end about us -->
	<!-- start footer -->
        <?php include("footer.html");?>
	<!-- end footer -->
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- start common footer -->
        <?php include("includes/common_footer.html");?>
<!-- end common footer -->

<script src="js/aboutus/modernizr.js"></script> <!-- Modernizr -->
<script src="js/aboutus/main.js"></script> <!-- Resource jQuery -->
	<script type="text/javascript">
		$("#aboutusid").click(function(){
			$("#blankspace").hide("slow");
		    $("#aboutus_div").load("aboutusdiv.html").fadeIn('1000');
		});
		$("#aboutusid").mouseover().css('cursor','pointer');
		$("#boardid").mouseover().css('cursor','pointer');
		$("#homelink").removeClass("active");
		$("#aboutuslink").addClass("active");
	</script>
</body>
</html>