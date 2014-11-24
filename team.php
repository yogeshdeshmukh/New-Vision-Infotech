<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>New Vision Infotech| Team</title>
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
    
</head>
<body>
	<?php
        include("include/header.php");
        ?>
     <div class="main">
 <div class="jhg"><br><br><br>
		<div class="container">
                    <h3 class="m_3">CORE OF NEW VISION INFOTECH</h3>
			
			  <div class="row">
				<div class="col-md-3 top_box">
				  <div class="view view-ninth">
                    <img src="images/pic1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Vaibhav Kathe</h2>
                      
                        <p>9923075772.</p>
                        <p>8855941573.</p>
                      </div>
                    </div
                  </div>
                  <h4 class="m_4"> Vaibhav Kathe</h4>
                
                </div>
                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Amit Patil</h2>
                        <p>9922315324.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4">Amit Patil</h4>
                   
				</div>
			
			</div>
		 </div>
	    </div>
	  </div>
	<?php
        include("include/footer.php");
        ?>
</body>	
</html>