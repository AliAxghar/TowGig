<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "backend/database.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TowGig</title>
    <!-- <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark|Roboto+Condensed&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/ee1dfcbe90.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <style>
        .nav-link {
            color: rgba(0, 0, 0, 0.5);
            font-size: 17px !important;
            font-weight: 500!important;
            padding: 7px 13px !important;
        }
        
        .nav-link:hover {
            color: #42b883 !important;
            font-size: 17px !important;
            font-weight: 500!important;
            padding: 7px 13px !important;
        }
        
        @media only screen and (max-width: 768px) {
            span.tech1 {
                text-align: center!important;
            }
        }
        
        .iti {
            position: relative;
            display: inline-block;
            width: 100%!important;
        }
    </style>
</head>

<body class="aboutbody" id="aboutus">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="">
                <p class="lslogan">TowGig, Brings Auto Smiles</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="how-it-works.html">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services&promo.html">Service/Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="tel:17747010322"><i class="fa fa-mobile" aria-hidden="true"></i> 1(774) 701 0322</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active navlinkback" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign Up
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a data-toggle="modal" data-target="#Modal-buyer" class="dropdown-item" href="#">Buyer</a>
                            <a data-toggle="modal" data-target="#Modal-expert" class="dropdown-item" href="#">Expert</a>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="addBlog.php">Add Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="reset-password.php">Reset Password</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link navlinkback" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="modal" id="myModal">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>Join The Center & Conduct a Clean,Fast, and Genuine Business</p>
                    <input type="submit" name="" value="Login"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration For TowGig</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="15" name="Phone" class="form-control" placeholder="Phone*" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal1">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>Join The Center & Conduct a Clean,Fast, and Genuine Business</p>
                    <input type="submit" name="" value="Login"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration For TowGig</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="15" name="Phone" class="form-control" placeholder="Phone" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email/Username" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Confirm Password" value="" />
                                    </div>
                                    <input data-toggle="modal" data-target="#myModal2" type="submit" class="btnRegister btnnext"  value="Next"/>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal2">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>Join The Center & Conduct a Clean,Fast, and Genuine Business</p>
                    <input type="submit" name="" value="Login"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration For TowGig</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group filel pb-1">
                                        <input type="file" id="File01" class="filef pt-2" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="File01">Upload Selfie/Logo</label>                                      
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Town" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Zip Code" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Towing Hauling Cars Dot Number" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="file" id="File01" class=" filef pt-2" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label1" for="File01">Professional License </label>                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business or Personal Address" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Province/State" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Country" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="file" id="File01" class="filef pt-2" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label2" for="File01">Insurance Policy (Front)</label>                                      
                                    </div>
                                    <input data-toggle="modal" data-target="#myModal3" type="submit" class="btnRegister btnnext"  value="Next"/>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal3">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>Join The Center & Conduct a Clean,Fast, and Genuine Business</p>
                    <input type="submit" name="" value="Login"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration For TowGig</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business Name" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Bank Account No" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Bank/Branch Name" value="" />
                                    </div>
                                    <div class="form-group" style="color: #6c757d;">
                                        Date of Birth:<input type="date" class="form-control" placeholder="Date of Birth" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Employee Identity No" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" name="Phone" class="form-control" placeholder="Confirm Account No" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Routing No" value="" />
                                    </div>
                                    <label for="choose-services" style="color: #6c757d;">Choose Services:</label>
                                    <br>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Tow Haul
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Flat Type
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Replace Battery
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Engin Light On
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Jump Start
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox"  class="mr-1" value="">Lockout
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Gas/Diesel Refill
                                    </label>
                                    <label class="checkbox-inline pr-1">
                                        <input type="checkbox" class="mr-1" value="">Tyre/Car Vibration
                                    </label>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid">
        <div class="row">
            <span class="contact100-form-title getintouch ">
            Reset Password
            </span>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xsm-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xsm-12">
            <div class="wrapper pt-3 pb-5">\
                <p class="text-center pt-3">Please fill out this form to reset your password.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                    <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                        <span class="help-block"><?php echo $new_password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a class="btn btn-link" href="addBlog.php">Cancel</a>
                    </div>
                </form>
            </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xsm-12"></div>
        </div>
    </div>
    <footer class="page-footer font-small stylish-color-dark pt-4 abtfooter">
        <div class="container text-center text-md-left">
            <div class="row">
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 offset-1">
                    <h5 class=" text-white mt-3 mb-4">Platform</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="services&promo.html">Service/Promo</a>
                        </li>
                        <li>
                            <a href="benefit&bonus.html">Benefit/Bonus</a>
                        </li>
                        <li>
                            <a href="how-it-works.html">How it works</a>
                        </li>
                        <li>
                            <a href="costing.html">Costing</a>
                        </li>
                        <li>
                            <a href="https://apps.apple.com/pk/app/towgig/id1507223706"><img alt="iosbtn" class="footer-img1" src="img/iosbtn.png" /></a>
                            <a href="https://play.google.com/store/apps/details?id=com.crymzee.towgig"><img alt="googlebtn" class="footer-img2" src="img/googlebtn.png" /></a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 offset-1">
                    <h5 class="text-white mt-3 mb-4">Company</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="partner-with-us.html">Partner With Us</a>
                        </li>
                        <li>
                            <a href="index.php#TowTruckNearMe">Tow Truck Near Me</a>
                        </li>
                        <li>
                            <a href="#!">Site Map</a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 offset-1">
                    <h5 class="text-white mt-3 mb-4">Legal</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="terms.html">Terms and Condition</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="refundPolicy.html">Refund Policy</a>
                        </li>
                        <li>
                            <a href="user-agreement.html">End User License Agreement(EULA)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <ul class="list-unstyled list-inline text-center footersocial">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1 footersocial" href="https://www.youtube.com/channel/UCoC2uDJq_ZWqwTVGQs4z1ag">
                    <i class="fab fa-youtube fa-1x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1 footersocial" href="https://twitter.com/towgig">
                    <i class="fab fa-twitter fa-1x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1 footersocial" href="https://www.facebook.com/TowGig-Technologies-100417204767612/">
                    <i class="fab fa-facebook-f fa-1x"> </i>
                </a>
            </li>

        </ul>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-muted">All Rights Reserved © 2021 TowGig Technologies
        </div>
        <div class="footer-copyright text-center py-3 text-muted"><span>Developed by<a class="text-white" href="https://crymzee.com"> Crymzee Pvt. Ltd.</a></span>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- MODEL-BOX -->
    <div class="modal fade" id="Modal-expert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container register">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 register-right model-pad">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="boxmp">Meet Amazing Buyers Waiting for Your Service,It only takes 3-6 minutes to sign up & start earning.</p>
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="mbp mt-2">For a quick sign up, Please enter your</p>
                                                <section class="mx-2 pb-3 text-center">
                                                    <ul class="nav nav-tabs md-tabs text-center" id="myTabMD" role="tablist">
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#signupemail" role="tab" aria-controls="home-md" aria-selected="true">Email</a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#signupphone" role="tab" aria-controls="profile-md" aria-selected="false">Phone</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContentMD">
                                                        <div class="tab-pane fade in show active" id="signupemail" role="tabpanel" aria-labelledby="home-tab-md">
                                                            <form name="myForm" action="towgigsignup.php" method="post">
                                                                <input type="email" class="form-control getemail" name="email" placeholder="Email Address" value="" required/>
                                                                <span><p class="mbp12 mt-1">The App Link will be send to you</p><input type="submit" name="submit" class="btnRegister1"  value="Send"/></span>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="signupphone" role="tabpanel" aria-labelledby="profile-tab-md">
                                                            <form name="myForm" action="towgigsignup.php" method="post">
                                                                <input type="tel" class="form-control mt-2 getphone" name="phone_number[main]" id="phone_number" value="" required/>
                                                                <br>
                                                                <span><p class="mbp12 mt-4">The App Link will be send to you</p><input type="submit" name="submit" class="btnRegister mt-3"  value="Send"/></span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <!-- <p class="mbp1 mt-1 mt-3 ml-3">The App Link will be send to you, now</p> -->
                                        <p class="mbp1 ml-3 mt-2" style="color:#424141e0!important;"> Or go to the App store & search to download for free</p>
                                        <h3 class="mbh31 ml-3">Thank You for doing Business with TowGig</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal-buyer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container register">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 register-right model-pad">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="boxmp">A Diligence Expert is waiting to come service your vehicle.</p>
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="mbp mt-2">For a quick sign up, Please enter your</p>
                                                <section class="mx-2 pb-3 text-center">
                                                    <ul class="nav nav-tabs md-tabs text-center" id="myTabMD" role="tablist">
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link active" id="home-tab-mdb" data-toggle="tab" href="#signupemailb" role="tab" aria-controls="home-md" aria-selected="true">Email</a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link" id="profile-tab-mdb" data-toggle="tab" href="#signupphoneb" role="tab" aria-controls="profile-md" aria-selected="false">Phone</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContentMDb">
                                                        <div class="tab-pane fade in show active" id="signupemailb" role="tabpanel" aria-labelledby="home-tab-mdb">
                                                            <form name="myForm" action="towgigsignup.php" method="post">
                                                                <input type="email" class="form-control getemail" name="email" placeholder="Email Address" value="" required/>
                                                                <span><p class="mbp12 mt-1">The App Link will be send to you</p><input type="submit" name="submit" class="btnRegister1"  value="Send"/></span>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="signupphoneb" role="tabpanel" aria-labelledby="profile-tab-mdb">
                                                            <form name="myForm" action="towgigsignup.php" method="post">
                                                                <input type="tel" class="form-control mt-2 getphone" name="phone_number[main]" id="phone_number1" value="" required/>
                                                                <br>
                                                                <span><p class="mbp12 mt-4">The App Link will be send to you</p><input type="submit" name="submit" class="btnRegister mt-3"  value="Send"/></span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div>
                                        </div>
                                        <!-- <p class="mbp1 mt-1 ml-3">The App Link will be send to you, now</p> -->
                                        <p class="mbp1 ml-3 mt-2" style="color:#424141e0!important;"> Or go to the App store & search to download for free</p>
                                        <h3 class="mbh31 ml-3">Thank You for Being an Amazing Buyer with TowGig</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function sendEnquiryform() {
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var message = $('#message').val();
            $.post("send_form_email.php", 'name=' + name + '&email=' + email '&message=' + message '&phone=' + phone, function(result, status, xhr) {
                    if (status.toLowerCase() == "error".toLowerCase()) {
                        alert("An Error Occurred..");
                    } else {
                        //alert(result);
                        $('#sucessMessage').html(result);
                    }
                })
                .fail(function() {
                    alert("something went wrong. Please try again")
                });
        }
    </script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $Idle: 0,
                $SlideDuration: 5000,
                $SlideEasing: $Jease$.$Linear,
                $SlideWidth: 140,
                $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
            separateDialCode: true,
            preferredCountries: ["us"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='phone_number[full]'").val(full_number);
            alert(full_number);
        });
    </script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number1"), {
            separateDialCode: true,
            preferredCountries: ["us"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='phone_number[full]'").val(full_number);
            alert(full_number);
        });
    </script>
    <script>
        jQuery(function($) {
            var $inputs = $("input[name=email],input[name='phone_number[main]'");
            $inputs.on('input', function() {
                // Set the required property of the other input to false if this input is not empty.
                $inputs.not(this).prop('required', !$(this).val().length);
            });
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        
        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <script type="text/javascript">
        jssor_1_slider_init();
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>