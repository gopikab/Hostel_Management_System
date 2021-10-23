<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$contact=$_POST['contact'];
$stmt=$mysqli->prepare("SELECT email,contactNo,password FROM userregistration WHERE (email=? && contactNo=?) ");
				$stmt->bind_param('ss',$email,$contact);
				$stmt->execute();
				$stmt -> bind_result($username,$email,$password);
				$rs=$stmt->fetch();
				if($rs)
				{
				$pwd=$password;				
				}

				else
				{
					echo "<script>alert('Invalid Email/Contact no or password');</script>";
				}
			}
				?>

<!doctype html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content=""> -->

	<title>User Forgot Password</title>

	<!-- <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css"> -->
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
        Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
</head
<body>
	
	<!-- <div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Forgot Password</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2"> -->
							<?php if(isset($_POST['login']))
{ ?>
					<p>Yuor Password is <?php echo $pwd;?><br> Change the Password After login</p>
					<?php }  ?>
					<h1>TCE Hostel Room Allocation </h1>
					<div class=" w3l-login-form">
						<h2>Forget Password</h2>
								<form action="" class="mt" method="post">
									<!-- <label for="" class="text-uppercase text-sm">Your Email</label> -->
									 <div class=" w3l-form-group">
                                               <label> Email:</label>
                                                 <div class="group">
                                                    <i class="fas fa-user"></i>
									<input type="text" placeholder="Email" name="email" class="form-control mb">
									</div>
                                       </div>
									<!-- <label for="" class="text-uppercase text-sm">Your Contact no</label> -->
									<div class=" w3l-form-group">
									<label>Contact No:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
									<input type="text" placeholder="Contact no" name="contact" class="form-control mb">
									</div>
            </div>
                                    
									

									<button type="submit" name="login" class="btn btn-primary btn-block" value="login" >Login
										
									</button> 
								</form>
								<p class=" w3l-register-p"><a href="index.php" class="register">Sign in</a></p>
								<!-- <div class="text-center text-light">
							<a href="index.php" class="text-light">Sign in?</a>
						</div> -->
							</div>
						</div>
						
					<!-- </div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script> -->
</body>
</html>