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
<div id="wrapper" >
	<!-- start header -->
        <?php include("header.html");?>
	<!-- end header -->
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">Mechanical Design</li>
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
						            <div><img u="image" src="img/services/mech_design/ADT_STRUCTURE FOR KBK RILS AND PLATFORM.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/AL-CARGO_FLOOR ROTARY FIXTURE.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/AL-CARGO_TUNNEL FIXTURE ON WHEELS.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/AL-CARGO_UB-05 MODIFICATION_PNEUMATIC SWING UNIT.jpg" /></div>
						        </div>       
				    		</div>
						</div>
						<br/>
						<div id="box2">
							<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 300px; height: 100px;outline-style: solid">
						        <!-- Slides Container -->
						        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 300px; height: 100px;
						            overflow: hidden;">
						            <div><img u="image" src="img/services/mech_design/Logo/ashok_leyland.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/Logo/advanced1.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/Logo/advanced2.jpg" /></div>
						            <div><img u="image" src="img/services/mech_design/Logo/advanced3.jpg" /></div>
						        </div>       
				    		</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div id="mainContain">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-info">
							        <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							             <h4 class="panel-title">
							                <a href="#">
							                   Process validation and updation.
							                </a>
							            </h4>
							        </div>
							        <div id="collapseOne" class="panel-collapse collapse in">
							            <div class="panel-body">
							            	 <ul>
											      <li>Panel Build Sequence.</li>
											      <li> Spot Distribution.</li>
											      <li>Integer molestie lorem at massa</li>
											      <li>Identification of No. of Guns and Operators.</li>
											      <li> Cycle time Study.</li>
											 </ul>										
							            </div>
							        </div>
							    </div>
							    <div class="panel panel-info">
							        <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							             <h4 class="panel-title">
							                <a href="#">
							                    Process Layout.
							                </a>
							            </h4>
							        </div>
							        <div id="collapseTwo" class="panel-collapse collapse">
							            <div class="panel-body">
							            	<ul>
										      <li>Concept Line Layout Design (Robotic & Manual zone) using AutoCAD.</li>
										      <li>Utility and Cable tray Layout.</li>
										      <li> Safety Layout.</li>
										      <li>Installation Layout.</li>										 
											</ul>
							            </div>
							        </div>
							    </div>
							    <div class="panel panel-info">
							        <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							             <h4 class="panel-title">
							                <a href="#">
							                    Tool Design.
							                </a>
							            </h4>

							        </div>
							        <div id="collapseThree" class="panel-collapse collapse">
							            <div class="panel-body">
							            	<ul>
										      <li>Concept Tool Design as per PLP using Catia V5.</li>
										      <li>Gun Study and Gun Selection.</li>
										      <li>Design Approval.</li>
										      <li>Bought out items finalization.</li>
										      <li>Preparation of Pneumatic sequence sheet.</li>									 
										      <li>Detailing, BOM and Manufacturing releases.</li>
										      <li>Jig Inspection sheets.</li>
											</ul>
							            </div>
							        </div>
							    </div>
							    <div class="panel panel-info">
							        <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							             <h4 class="panel-title">
							                <a href="#">
							                    Equipment Selection.
							                </a>
							            </h4>

							        </div>
							        <div id="collapseFour" class="panel-collapse collapse">
							            <div class="panel-body">
							            	<ul>
										      <li>Transfer system, conveyors, Stud welding equipment, Sealant equipment etc..</li>
										      <li>Feasibility study and selection of appropriate equipment</li>
										      <li>Supplier identification Design implementation and approvals from Customer.</li>
										      <li>integration of equipment in Layout</li>
										      <li>Effect on Cycle time.</li>
											</ul>
							            </div>
							        </div>
							    </div>
							    <div class="panel panel-info">
							        <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							             <h4 class="panel-title">
							                <a href="#">
							                    Shop floor & site installation activities.
							                </a>
							            </h4>

							        </div>
							        <div id="collapseFive" class="panel-collapse collapse">
							            <div class="panel-body">
							            	<ul>
										      <li>Support to Assembly for Line installation.</li>
										      <li>Support to manufacturing.</li>										      
											</ul>
							            </div>
							        </div>
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