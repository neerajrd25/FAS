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
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<style>
      #map-canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script type="text/javascript">
		$(function() {
			jQuery.validator.addMethod("lettersonly", function(value, element) {
				  return this.optional(element) || /^[a-zA-Z\s]*$/i.test(value);
			}, "Letters only please");
			$("#contactForm").validate({
				// Specify the validation rules
			        rules: {
			            name: {
			            	required : true,
			            	lettersonly: true
			            },
			            phoneNumber: {
			            	required : true,
			            	digits: true,
			            	maxlength: 10
			            	
			            },
			            email: {
			            	required : true,
			            	email: true
			            },
			            subject: {
			            	required : true,
			            	rangelength:[10,250]
			            },
			            message: {
			            	required : true,
			            	rangelength:[50,1050]
			            }
			        },
			        messages: {
                        "name": {
                            required: 'Please Enter Full Name'
                        },  
                        "phoneNumber": {
                            required: 'Please Enter Phone Number',
					        digits: 'number should be in digits',
					        maxlength: 'Number should be in 10 digits'
                        },
                        "email": {
                            required: 'Please Enter Email id',
			            	email: 'Email Format is wrong'
                        },
                        "subject": {
                            required: 'Please Enter subject',
                            rangelength: 'subject length should be more than 10 characters'
                        },
                        "message": {
                            required: 'Please Enter message',
                            rangelength: 'message length should be more than 50 characters'
                        }
                    },
			        submitHandler: function(data) {
						  var data = {
					      "action": "insertdb",
					      "full_name" : $( '#name' ).val(),
					      "phoneNumber" : $( '#phoneNumber' ).val(),
					      "email" : $( '#email' ).val(),
					      "subject" : $( '#subject' ).val(),
					      "message" : $( '#message' ).val()
					    };		   

					    $.ajax({
					      type: "POST",
					      dataType: "json",
					      url: "response.php", //Relative or absolute path to response.php file
					      data: data,
					      success: function(data) {	

					        $(".sendmessage").html(
					          data["full_name"] + " message send successfully we will get back to you shortly"
					        );
					      	$( '#name' ).val(' ');	
					      	$( '#phoneNumber' ).val(' ');		
					      	$( '#email' ).val(' ');
					      	$( '#subject' ).val(' ');	
					      	$( '#message' ).val(' ');
					      	$('.sendmessage').fadeOut(3600);
					        //alert("Form submitted successfully.\nReturned json: " + data["json"]);
					      },
					       error: function(data){
						        $(".sendmessage").html(
						        	"There is some promblem in server you can contact to ABC"
					        );
						    }
					    });
			    return false;
			        }
			});
		});
</script>
</head>

<body>	
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
		<br/>
		<section id="content">
			<div class="map">
				<div class="row">
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
			</iframe>
				</div>
				
			</div>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
					<form method="post" id="contactForm" novalidate="novalidate" accept-charset="utf-8">
						<div class="sendmessage" >							 
						</div>
						<div class="row">
							<div class="col-lg-3 field">
								<input type="text" name="name" id="name" placeholder="* Enter your full name" style="width:100%;" />
							</div>
							<div class="col-lg-3 field">
								<input type="text" name="phoneNumber" id="phoneNumber" placeholder="* Enter your phone number" style="width:100%;"/>
							</div>
							<div class="col-lg-3 field">
								<input type="text" name="email" id="email" placeholder="* Enter your email address" style="width:100%;" />
							</div>
							<div class="col-lg-3 field">
								<input type="text" name="subject" id="subject" placeholder="* Enter your subject" style="width:100%;"/>
							</div>
							<div class="col-lg-12 margintop10 field">
								<textarea rows="12" name="message" id="message" class="input-block-level" placeholder="* Your message here..." style="width:100%;"></textarea>
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
<script type="text/javascript">			
		$("#homelink").removeClass("active");
		$("#contactlink").addClass("active");
	</script>
</body>
</html>