<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>New Vision Infotech| experience</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
    <!-- light-box -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
</head>
<body>
	<?php
        include("include/header.php");
        ?>
     <div class="main">
   <div class="row">
				<div class="col-md-4 team_bottom">
				  <ul class="team_list">
					<h4>FEATURES</h4>
		            <li>SALES & SERVICES<p>All types of computer peripherals are avaliable, right from motherboard to the cabinate of the computer.Assembled as well as branded computer avaliable.</p></li>
		            <li>LAPTOPS<p>All brands of laptops with wide range of configurations are avaliable.<p></li>
                            <li>CYBER CAFE<p>A cyber cafe with 10 computers and a great speed of 4 MBPS.</p></li>
		            <li>CHEAP AND QUICK<p>Get peripherals and devices in a cheap price and fastest delivery. </p></li>
		          </ul>
				</div>
				<div class="col-md-8">
				<div class="content-top">
			
		
				<ul id="flexiselDemo3">
                                    <li><img src="images/lenovo.jpg" /></li>
                                    <li><img src="images/dell.png." /></li>
                                    <li><img src="images/asus.png" /></li>
                                    <li><img src="images/epson.jpg" /></li>
                                    <li><img src="images/hp.jpg" /></li>
                                    <li><img src="images/intel.jpg" /></li>
                                </ul><br><br>
		<h3>BRANDS THAT WE DEAL IN</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
		       
				</div>
			</div>
	  </div>
	<?php
        include("include/footer.php");
        ?>
</body>	
</html>