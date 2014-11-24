<!DOCTYPE HTML>
<html>
<head>
<title>New Vision Infotech| Gallery</title>

   
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
        <center><h3>Swipe for next image</h3></center>
        <center>
<script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px;
        height: 300px;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div><img u="image" src="images/DSC_0020.JPG" /></div>
  <div><img u="image" src="images/DSC_0001.JPG" /></div>
  <div><img u="image" src="images/DSC_0012.JPG" /></div>
  <div><img u="image" src="images/DSC_0030.JPG" /></div>
  <div><img u="image" src="images/DSC_0015.JPG" /></div>
  <div><img u="image" src="images/DSC_0026.JPG" /></div>
  <div><img u="image" src="images/DSC_0020.JPG" /></div>
  <div><img u="image" src="images/DSC_0034.JPG" /></div>
        </div>
        <a style="display: none" href="http://www.jssor.com">javascript</a>
     <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div><br><br></center>
	<?php
        include("include/footer.php");
        ?>
    </div>
</body>	
</html>