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
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/boxslider/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/boxslider/jssor.js"></script>
    <script type="text/javascript" src="js/boxslider/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {

                $AutoPlay: true,                      //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 0                   //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            var jssor_slider2 = new $JssorSlider$("slider2_container", options);
        });
    </script>
	<div id="wrapper">
		<!-- start header -->
        <?php include("header.html");?>
	<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i
								class="icon-angle-right"></i></li>
							<li class="active">Controls & Automation</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-4">
						<div id="box1">
							<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 300px; height: 200px;outline-style: solid;">
						        <!-- Slides Container -->
						        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 300px; height: 200px;
						            overflow: hidden;">
						            <div><img u="image" src="img/services/manufacturing/02-2.jpg" /></div>
						            <div><img u="image" src="img/services/manufacturing/03.jpg" /></div>
						            <div><img u="image" src="img/services/manufacturing/04.jpg" /></div>						            
						        </div>       
				    		</div>
						</div>
						<br/>
						<div id="box2">
							<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 300px; height: 100px;outline-style: solid">
						        <!-- Slides Container -->
						        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 300px; height: 100px;
						            overflow: hidden;">
						            <div><img u="image" src="img/services/controls/Logo/blank.jpg" /></div>
						            <div><img u="image" src="img/services/controls/Logo/blank.jpg" /></div>
						        </div>       
				    		</div>
						</div>
					</div>
						<div class="col-lg-8">
							<div id="mainContain">
								<div class="panel-group" id="accordion">
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseOne">
											<h4 class="panel-title">
												<a href="#"> Project Schedule Management. </a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body"></div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseTwo">
											<h4 class="panel-title">
												<a href="#"> Plant Surveying. </a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseThree">
											<h4 class="panel-title">
												<a href="#"> Project Material Management. </a>
											</h4>

										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseFour">
											<h4 class="panel-title">
												<a href="#"> Resource Management. </a>
											</h4>

										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>

												</ul>
											</div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseFive">
											<h4 class="panel-title">
												<a href="#"> OEM Supplier Schedule Management. </a>
											</h4>

										</div>
										<div id="collapseFive" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>


									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseSix">
											<h4 class="panel-title">
												<a href="#"> Installation & Commissioning (Mechanical,
													Controls & Robotics). </a>
											</h4>

										</div>
										<div id="collapseSix" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseSeven">
											<h4 class="panel-title">
												<a href="#"> Certification & Validation. </a>
											</h4>

										</div>
										<div id="collapseSeven" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>

									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseEight">
											<h4 class="panel-title">
												<a href="#"> Line Dry Trails & Weld Trails. </a>
											</h4>

										</div>
										<div id="collapseEight" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>
									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseNine">
											<h4 class="panel-title">
												<a href="#"> As Build Documentation. </a>
											</h4>

										</div>
										<div id="collapseNine" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div>
									</div>

									<div class="panel panel-info">
										<div class="panel-heading accordion-toggle"
											data-toggle="collapse" data-parent="#accordion"
											href="#collapseTen">
											<h4 class="panel-title">
												<a href="#">Buyoff. </a>
											</h4>

										</div>
										<!-- <div id="collapseTen" class="panel-collapse collapse">
											<div class="panel-body"></div>
										</div> -->
									</div>



								</div>
							</div>
						</div>
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
	<script type="text/javascript">			
		$("#homelink").removeClass("active");
		$("#serviceslink").addClass("active");
	</script>
</body>
</html>