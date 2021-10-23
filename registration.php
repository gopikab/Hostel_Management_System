<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$password=$_POST['password'];
$query="insert into  userRegistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssiss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$password);
$stmt->execute();
echo"<script>alert('Student Succssfully register');</script>";
}
?>

<!doctype html>
<html lang="en" >
<head>
	<!-- <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript"> -->

	<title>Registration</title>
    <!-- meta tags -->
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

  
    <script>

function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<!-- <?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid"> -->

				<!-- <div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body"> -->
										<h1>TCE Hostel Room Allocation </h1>
                                     <div class=" w3l-login-form">
                                     <h2>Registration Form</h2>
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
				<div class=" w3l-form-group">
                                               <label>Reg No:</label>
                                                 <div class="group">
                                                    <i class="fas fa-user"></i>
<input type="text" name="regno" id="regno"  class="form-control" required="required" >
</div>
</div>
											
										

<!-- <div class="form-group">
<label class="col-sm-2 control-label"> Registration No : </label>
<div class="col-sm-8"> -->
	


<!-- div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>First Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<input type="text" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>
<!-- 
<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Middle Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<input type="text" name="mname" id="mname"  class="form-control">
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Last Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<input type="text" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Gender:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Contact:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>


<!-- <div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
<input type="text" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
<!-- <span id="user-availability-status" style="font-size:12px;"></span> -->
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Password: </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
<input type="password" name="password" id="password"  class="form-control" required="required">
</div>
</div>

<!-- 
<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : </label>
<div class="col-sm-8"> -->
	<div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
</div>
</div>
						



<div class="col-sm-6 col-sm-offset-4">
	<button class="btn btn-primary" type="submit" name="submit" Value="Register" style="margin:5px;">Register</button>
<!-- 	<div class=”divider”> </div> --> 

<button class="btn btn-default" type="submit" style="margin:5px;">Cancel</button>
<!-- <input type="submit" name="submit" Value="Register" class="btn btn-primary"> -->

</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
<!-- 	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script> -->
</body>
	<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>