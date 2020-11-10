<?php
// Initialize the session
require_once "backend/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TowGig</title>
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark|Roboto+Condensed&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/ee1dfcbe90.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="how-it-works.html">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services&promo.html">Service/Promo</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active navlinkback" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign Up
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a data-toggle="modal" data-target="#Modal-buyer" class="dropdown-item" href="#">Buyer</a>
                            <a data-toggle="modal" data-target="#Modal-expert" class="dropdown-item" href="#">Expert</a>
                            <!-- <a data-toggle="modal" data-target="#myModal" class="dropdown-item" href="#">Buyer</a>
                        <a data-toggle="modal" data-target="#myModal1" class="dropdown-item" href="#">Expert</a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="aboutcontainer3" class="promopage1" style="padding-bottom: 0px;">
        <div class="container htw">
            <h2 class="privacyh2">Our Blogs</h2>
        </div>
        <section class="details-card pt-3 pb-5">
            <div class="container">
                <div class="row">
                <?php
                $sql = "SELECT * FROM post";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo '<div class="col-md-4 mt-2">';
                                echo '<div class="card-content pb-2">';
                                    echo '<div class="card-img">';
                                        echo "<img src='images/".$row['image']."' >";
                                    echo '</div>';
                                    echo '<div class="card-footer">';
                                    echo '<span><small class="text-muted">Last updated '.$row['updated_at'].'</small></span>';
                                    echo '</div>';
                                    echo '<div class="card-desc">';
                                    echo '<h3>'.$row['title'].'</h3>';?>
                                    <p style="margin-bottom:40px;"><?php echo substr($row['short_description'],0,200)," .............";?></p>
                                    <a href="blog_detail.php?Id=<?php echo $row["Id"]; ?>" class="btn-card">Read more</a>
                                    <?php
                                    echo '</div>';
                                echo '</div>';
                                echo '</div>';
                        }
                    } else{
                        // echo "No records matching your query were found.";
                        echo '<div class="col-md-3 mt-2"></div>';
                        echo '<div class="col-md-6 mt-2">
                        <h3 style="text-align:center!important;">There is no any blog in your database.</h3>
                        </div>';
                        echo '<div class="col-md-3 mt-2"></div>';
                        
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                 
                // Close connection
                mysqli_close($link);
                ?>
                </div>
            </div>
        </section>
    </div>
    <!-- <div id="aboutcontainer5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 offset-1 col-md-8 col-sm-12 col-xsm-12 ">
                    <h2 class="pt-3">Download the app and Sign Up <strong>For Free</strong></h2>
                    <button class="btn btn-outline-primary abtcontainer5-button">Get the App</button>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-12 col-xsm-12">
                    <img src="img/TowGig-3.png" class="TowGig3-img" alt="TowGig-3">
                </div> 
                <div class="col-lg-5 col-md-8 col-sm-12 col-xsm-12 offset-2  ">
                    <br>
                    <h2 class="cntnr5h2">We have a lot discounts available here.</h2>
                    <button class="button container5-button-right">GO HERE</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div id="container7">
        <div id="jssor_1">
            <div data-u="loading" class="jssorl-009-spin">
                <img class="img-style" src="img/spin.svg" />
            </div>
            <div data-u="slides" class="sliderdiv1">
                <div class="imgpad">
                    <img data-u="image" src="img/subaru.png" />
                </div>
                <div class="imgpad">
                    <img data-u="image" />
                </div>
                <div class="imgpad">
                    <img data-u="image" src="img/stripe.png" />
                </div>
                <div class="imgpad">
                    <img data-u="image" />
                </div>
                <div class="imgpad">
                    <img data-u="image" src="img/paypal.png" />
                </div>
                <div class="imgpad">
                    <img data-u="image" />
                </div>
                <div class="imgpad">
                    <img data-u="image" src="img/mobius.png" />
                </div>
                <div class="imgpad">
                    <img data-u="image" />
                </div><a data-u="any" href="https://www.jssor.com" style="display:none">web design</a>
            </div>
        </div>
    </div> -->
    <input class="checkbox-cb" id="checkbox-cb" type="checkbox" />
    <!-- <div class="cookie-bar">
    <span class="message">Visit to our <a class="top-h-link" href="costing.html">Costing</a> and <a class="top-h-link" href="benefit&bonus.html">Bonus/Benefi</a> page</span>
    <span class="mobile">Visit our <a class="top-h-link" href="costing.html">Costing</a> and <a class="top-h-link" href="benefit&bonus.html">Bonus/Benefi</a> page</span>
    <label for="checkbox-cb" class="close-cb">x</label>
    </div> -->
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
                        <li><a href="blog.php">Blog</a>
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
        <div class="footer-copyright text-center py-3 text-muted">All Rights Reserved © 2020 TowGig Technologies
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
                                                <p class="mbp mt-1">For a quick sign up, Please enter your</p>
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