<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

	<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="web_home/css_home/fontawesome-all.css">

     
</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
	<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
		<div class="banner" id="home">
        	<div class="cd-radial-slider-wrapper">
        		<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
                	<li class="visible">
                    	<div class="svg-wrapper">
                        	<svg viewBox="0 0 1400 800">
                            	<title>Animated SVG</title>
                            	<defs>
                                	<clipPath id="cd-image-1">
                                    	<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
                                	</clipPath>
                            	</defs>
                            	<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="web_home/images/4.jpg"></image>
                        	</svg>
                    	</div> <!-- .svg-wrapper -->
                    	<div class="cd-radial-slider-content">
                        	<div class="wrapper">
                            	<div class="text-center">
                                	<h2>Hostel Management System</h2>
                                </div>
                        	</div>
                    	</div> <!-- .cd-radial-slider-content -->
                	</li>
                	<li class="next-slide">
                    	<div class="svg-wrapper">
                        	<svg viewBox="0 0 1400 800">
                            	<title>Animated SVG</title>
                            	<defs>
                                	<clipPath id="cd-image-2">
                                    	<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
                                	</clipPath>
                            	</defs>
                            	<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="web_home/images/2.png"></image>
                        	</svg>
                    	</div> <!-- .svg-wrapper -->
                    	<div class="cd-radial-slider-content text-center">
                        	<div class="wrapper">
                            	<div class="text-center">
                                	<h3>Rooms</h3>                              
                            	</div>
                        	</div>
                    	</div> <!-- .cd-radial-slider-content -->
                	</li>
               		<li>
                    	<div class="svg-wrapper">
                        	<svg viewBox="0 0 1400 800">
                            	<title>Animated SVG</title>
                            	<defs>
                                	<clipPath id="cd-image-3">
                                    	<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
                                	</clipPath>
                            	</defs>
                            	<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="web_home/images/3.png"></image>
                        	</svg>
                    	</div> <!-- .svg-wrapper -->
                    	<div class="cd-radial-slider-content text-center">
                        	<div class="wrapper">
                            	<div class="text-center">
                                	<h3>Hostels</h3>
                                </div>
                        	</div>
                    	</div> <!-- .cd-radial-slider-content -->
                	</li>
                </ul> <!-- .cd-radial-slider -->
            	<ul class="cd-radial-slider-navigation">
                	<li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
                	<li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
            	</ul> <!-- .cd-radial-slider-navigation -->
        	</div> <!-- .cd-radial-slider-wrapper -->
    	</div>
    	</div>
    </div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>

	
	<script src="web_home/js/snap.svg-min.js"></script>
    <script src="web_home/js/main.js"></script>

</body>
</html>
