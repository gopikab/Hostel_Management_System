<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
                $stmt->bind_param('ss',$email,$password);
                $stmt->execute();
                $stmt -> bind_result($email,$password,$id);
                $rs=$stmt->fetch();
                $stmt->close();
                $_SESSION['id']=$id;
                $_SESSION['login']=$email;
                $uip=$_SERVER['REMOTE_ADDR'];
                $ldate=date('d/m/Y h:i:s', time());
                if($rs)
                {
             $uid=$_SESSION['id'];
             $uemail=$_SESSION['login'];
$ip=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city'];
$country = $addrDetailsArr['geoplugin_countryName'];
$log="insert into userLog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
$mysqli->query($log);
if($log)
{
header("location:dashboard.php");
                }
}
                else
                {
                    echo "<script>alert('Invalid Username/Email or password');</script>";
                }
            }
                ?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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

</head>


<body>
    <h1>TCE Hostel Room Allocation </h1>
    <div class=" w3l-login-form">
        <h2>Student Login</h2>
       <form action="" class="mt" method="post">
                                    <div class=" w3l-form-group">
                                               <label>Student Email:</label>
                                                 <div class="group">
                                                    <i class="fas fa-user"></i>
                                    <!-- <label for="" class="text-uppercase text-sm">Email</label> -->
                                    <input type="text" placeholder="Email" name="email" class="form-control mb">
                                      </div>
                                       </div>
                                       <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                                    <!-- <label for="" class="text-uppercase text-sm">Password</label> -->
                                    <input type="password" placeholder="Password" name="password" class="form-control mb">
                                    </div>
            </div>
                                    

                                    <!-- <input type="submit" name="login" class="btn btn-primary btn-block" value="login" > -->
                                     <button type="submit" name="login" class="btn btn-primary btn-block" value="login">Login</button>

                                </form>
                                 <p class=" w3l-register-p">Login as<a href="Admin/index.php" class="register"> Admin</a></p>
                                 <p class=" w3l-register-p">New User<a href="registration.php" class="register"> Register</a></p>
                                  <p class=" w3l-register-p"><a href="forgot-password.php" class="register">Forgot password?</a></p>
          <<div class="text-center text-light" style="color:black;">
                           
                        </div>
</body>

</html>
