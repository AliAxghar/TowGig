<?php
include_once('backend/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TowGig</title>
    <link href="img/logo.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark|Roboto+Condensed&amp;display=swap" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/ee1dfcbe90.js'></script>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script type="text/javascript">
        var date = new Date();
        date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
        document.cookie = "Towgig" + "=" + 1 + expires + "; path=/";
    </script>
    <style type="text/css">
        .latest:hover{
            text-decoration:none;
        }
    </style>
</head>

<body>
    <a href="#TowTruckNearMe"><button class="btn btn-primary btn-sm tow-truck-btn">Tow Truck Near Me</button></a>
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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
    <div class="container-fluid container1">
        <h3 style="text-align: center;">The Cloud to Ground On-demand Auto Service Center</h3>

        <div style="text-align: center;"><img alt="" src="img/illustration-final.png" style="width: 80%; margin: 10px auto; border-radius: 20px; margin-bottom: 30px;" /></div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xsm-12 "></div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xsm-12 ">
                <p style="text-align: center;">An e-market designed to satisfy vehicle owners and car dealer&#39;s needs. It is an innovative transformation in the way vehicle service used to be done. With TowGig Technologies, auto owner or car dealer can connect instantly with
                    an automobile service provider for an amazing service all the times.</p>
                <!-- <div id="outerspace">
                <div class="rocket">
                    </div>
                </div>
            </div> -->
                <!--  <button class="button container1-button">Get Started</button>--></div>

            <div class="col-lg-2 col-md-2 col-sm-12 col-xsm-12 "></div>
            <!-- <div class="col-lg-5 col-md-5 col-sm-12 col-xsm-12 container1-right-col pt-4">
            <img src="img/Mecahanic.png" alt="mechanic">
        </div> -->
        </div>
    </div>

    <div class="container-fluid">
        <div class="row container" style="margin-left: auto; margin-right: auto;">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xsm-12 pt-4 pl-5"><img alt="banner" src="img/4.png" style="width: 100%;" /></div>
            <!--<div class="col-lg-1 col-md-1 col-sm-12 col-xsm-12"></div>-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xsm-12 pt-5 container2-right-col" style="text-align:center;">
                <p style="font-size: 22px;">Have skills to meet&nbsp;car owner&#39;s or dealer&#39;s needs? If so, join us. We do extensive screening before any (Auto Expert) is given access into the center for safety, reliability &amp; convenience reasons</p>
                <div class="dropdown navlinkback">
                    <button class="button container2-right-col-button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Become an Expert</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <span class="p-3">
                        <a href="https://apps.apple.com/pk/app/towgig/id1507223706" class=" text-center"><button class="btn btn-primary" style="background-color:#064acb;">AppStore</button></a>
                        <a href="https://play.google.com/store/apps/details?id=com.crymzee.towgig" class="-item text-center"><button class="btn btn-primary" style="background-color:#064acb;">PlayStore</button></a>
                    </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xsm-12 pt-4 pl-5"><img alt="banner" src="img/5.png" style="width: 100%;" /></div>
            <!--<div class="col-lg-1 col-sm-12 col-xsm-12"></div>--></div>
    </div>

    <p></p>

    <div class="container container3">
        <div class="row">
            <div class="col-2 col"></div>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xsm-12 container3-col">
                <p>When it comes to vehicle care program, the most modern way<br /> now is through TowGig Technologies. With TowGig,<br /> on-demand service for motorist, you save time,<br /> money, and of course, enjoy convenience.</p>
            </div>

            <div class="col-2"></div>
        </div>

        <div class="row container3-row2">
            <div class="col-1"></div>

            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xsm-12 container3-col homep123">
                <p>Whether you are at work, the roadside, at home, the parking lot, the car<br /> manufacturers&rsquo; site, or an auto auction, you can get easy access to<br /> auto service in few minutes. Download the free TowGig App Now,<br /> and
                    experience the most amazing motor vehicle service and<br /> much more</p>

                <p class="mt-4">
                    <div class="dropdown navlinkback text-center">
                        <button class="button container2-right-col-button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Schedule a Service</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <span class="p-3">
                            <a href="https://apps.apple.com/pk/app/towgig/id1507223706" class=" text-center"><button class="btn btn-primary" style="background-color:#064acb;">AppStore</button></a>
                            <a href="https://play.google.com/store/apps/details?id=com.crymzee.towgig" class="-item text-center"><button class="btn btn-primary" style="background-color:#064acb;">PlayStore</button></a>
                        </span>
                        </div>
                    </div>
                    <!-- <button class="button container3-button-left">Schedule a Service</button> -->
                    <!-- <button class="btn btn-outline-primary container3-button-right">Start Account</button> --></p>
            </div>

            <div class="col-1"></div>
        </div>

        <h3 class="text-center pt-2" style="color: #443f3f; font-weight: 400;">Get the Best Automobile Service Experience With&nbsp;TowGig Partnered Auto Professionals Waiting To Assist You</h3>

        <h3 class="text-center pt-2" style="color: #443f3f; font-weight: 400;"></h3>

        <div class="row" style="color: #443f3f;">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12" style="text-align: center;">
                <h4 class="text-center pt-3">Towing Service</h4>
                <img alt="towtruck" class="pt-3" height="350px" src="img/towtruckn.jpg" width="100%" />
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12 ">
                <h4 class="text-center pt-3">Roadside Assistance</h4>
                <img alt="Roadsideassistance" class="pt-3" height="350px" src="img/roadside.jpg" width="100%" /></div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12">
                <h4 class="text-center pt-3">Car Hauling Service</h4>
                <img alt="Car-hauling image" class="pt-3" height="350px" src="img/carhauling.jpg" width="100%" /></div>
        </div>
    </div>

    <p></p>

    <p></p>

    <p></p>

    <div id="container4">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-1 col-md-12 col-sm-12 col-xsm-12"></div> -->
                <div class="col-lg-5  offset-2 col-md-12 col-sm-12 col-xsm-12  container4-left-col pt-5">
                    <div class="container4-col-section">
                        <p>A Buyer, is a vehicle owner or dealer, who need a service from auto Expert to come and Fix, Tow, or Haul their vehicle</p>

                        <div class="pt-4"><button class="button container4-button-left" data-target="#Modal-buyer" data-toggle="modal">Become a Buyer</button>
                            <!-- <button data-toggle="modal" data-target="#myModal" class="button container4-button-left">Become a Buyer</button> --></div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 col-xsm-12 container4-right-col pt-5">
                    <div class="container4-col-section2">
                        <p>An Auto Expert, is a licensed and skilled motor vehicle specialist waiting to go &amp; help car owners to Tow, Fix, or Haul their car</p>

                        <div class="pt-4"><button class="button container4-button-right" data-target="#Modal-expert" data-toggle="modal">Become a Expert</button>
                            <!-- <button data-toggle="modal" data-target="#myModal1" class="button container4-button-right">Become a Expert</button> --></div>
                    </div>
                </div>
                <!-- <div class="col-lg-1 col-md-12 col-sm-12 col-xsm-12"></div> --></div>
        </div>
    </div>

    <p></p>

    <p></p>

    <p></p>

    <div id="container5">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-lg-1 col-md-1 col-sm-12 col-xsm-12"></div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xsm-12"><img alt="mechanic1" class="container5-img1" src="img/mechanic1.png" /></div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xsm-12 container5-left-col">
                    <div class="container5-col-section">
                        <p>Each Day, New Buyers &amp; Licensed Auto</p>

                        <p>Experts Join The Center &amp; Conduct a Clean,</p>

                        <p>Fast, and Genuine Business</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xsm-12"><img alt="TowGig" class="container5-img2" src="img/TowGig.png" /></div>

                <div class="col-lg-1 col-md-1 col-sm-12 col-xsm-12"></div>
            </div>
        </div>
    </div>

    <p></p>

    <div id="container6">
        <div class="container pt-5" id="TowTruckNearMe">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xsm-12 offset-1">
                    <div class="container6-col-section">
                        <h3>Tow Truck Near Me</h3>

                        <p>Looking for a towing service? Then, let TowGig instantly connect you with a local towing company nearby, to come &amp; Tow or fix your vehicle. TowGig is the fastest, safest, genuine, and convenience&nbsp;way to get auto service&nbsp;help.
                            No more searching; &amp; wasting&nbsp;time&nbsp;doing&nbsp;back to back calls trying to get&nbsp;the best quote; No hassling; but save time, money, and enjoy convenience just like others. Download app,&nbsp;sign-up now,
                            it&#39;s&nbsp;free. It only takes a few seconds, and you get the help your vehicle need.</p>

                        <p class="getservice">Get $5-$10 off your first order. Schedule or</p>
                        <div class="dropdown navlinkback">
                            <button class="button container6-button-left dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Schedule a Service</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <span class="p-3">
                                <a href="https://apps.apple.com/pk/app/towgig/id1507223706" class=" text-center"><button class="btn btn-primary" style="background-color:#064acb;">AppStore</button></a>
                                <a href="https://play.google.com/store/apps/details?id=com.crymzee.towgig" class="-item text-center"><button class="btn btn-primary" style="background-color:#064acb;">PlayStore</button></a>
                            </span>
                            </div>
                        </div>
                        <!-- <button class="button container6-button-left">GET SERVICE NOW</button> -->
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 col-xsm-12 container6-col-img">
                    <!-- <img src="img/tow-truck.png" class="container6-img" alt="TowGig"> -->
                    <div class="pt-5"><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="pt-3 " frameborder="0" height="315" src="https://www.youtube.com/embed/Hv04cylhsTA" width="100%"></iframe></div>
                </div>

                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
    <div class="container container1 pt-4">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-12 col-xsm-12 "></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xsm-12 ">
                <p style="text-align: center;border: 1px solid #d3fbe9;padding: 10px 5px; background-color: #d3fbe9;">As we continue to pray for the pandemic to be over completely, the Buyer & Expert are encourage to protecting each other amid Covid-19 during service. Thank you for your understanding!</p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xsm-12 "></div>
        </div>
    </div>
    <div id="container7">
        <div id="jssor_1">
            <!-- Loading Screen -->
            <div class="jssorl-009-spin" data-u="loading"><img class="img-style" src="img/spin.svg" /></div>

            <div class="sliderdiv1" data-u="slides">
                <div class="imgpad"><img data-u="image" src="img/subaru.png" /></div>

                <div class="imgpad"><img data-u="image" /></div>

                <div class="imgpad"><img data-u="image" src="img/stripe.png" /></div>

                <div class="imgpad"><img data-u="image" /></div>

                <div class="imgpad"><img data-u="image" src="img/paypal.png" /></div>

                <div class="imgpad"><img data-u="image" /></div>

                <div class="imgpad"><img data-u="image" src="img/mobius.png" /></div>

                <div class="imgpad"><img data-u="image" /></div>
                <a data-u="any" href="https://www.jssor.com" style="display:none">web design</a></div>
        </div>
    </div>

    <footer class="page-footer font-small stylish-color-dark pt-4">
        <div class="container text-center text-md-left">
            <div class="row">
                <hr class="clearfix w-100 d-md-none" />
                <div class="col-md-3">
                    <h5 class="text-white mt-3 mb-4">Platform</h5>

                    <ul class="list-unstyled">
                        <li><a href="services&amp;promo.html">Service/Promo</a></li>
                        <li><a href="benefit&amp;bonus.html">Benefit/Bonus</a></li>
                        <li><a href="how-it-works.html">How it works</a></li>
                        <li><a href="costing.html">Costing</a></li>
                        <li>
                            <a href="https://apps.apple.com/pk/app/towgig/id1507223706"><img alt="iosbtn" class="footer-img1" src="img/iosbtn.png" /></a>
                            <a href="https://play.google.com/store/apps/details?id=com.crymzee.towgig"><img alt="googlebtn" class="footer-img2" src="img/googlebtn.png" /></a>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none" />
                <div class="col-md-3">
                    <h5 class="text-white mt-3 mb-4">Company</h5>

                    <ul class="list-unstyled">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="partner-with-us.html">Partner With Us</a></li>
                        <li><a href="index.php#TowTruckNearMe">Tow Truck Near Me</a></li>
                        <li><a href="#!">Site Map</a></li>
                        <li><a href="blog.php">Blog</a>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none" />
                <div class="col-md-3">
                    <h5 class="text-white mt-3 mb-4">Legal</h5>

                    <ul class="list-unstyled">
                        <li><a href="terms.html">Terms and Condition</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="refundPolicy.html">Refund Policy</a></li>
                        <li><a href="user-agreement.html">End User License Agreement(EULA)</a></li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none" />
                <div class="col-md-3">
                    <h5 class="text-white mt-3 mb-4">Our Latest Blogs</h5>
                    <?php
                        $sql = "SELECT * FROM post order by Id desc limit 3";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){?>
                                    <a href="blog_detail.php?Id=<?php echo $row["Id"]; ?>" class="latest">
                                    <?php
                                    echo '<article class="entry entry-single entry1">';
                                        echo '<div class="row mt-2" style="background-color:black;">';
                                            echo '<div class="col-4 pt-1 pb-1">';
                                            echo '<img src="images/'.$row["image"].'" style="width: 80px;height: 80px;" alt="" class="img-fluid">';
                                            echo '</div>';
                                            echo '<div class="col-8">';
                                            ?>
                                            <p class="text-md-left latest" style="color: #fff!important;font-size: medium;"><?php echo substr($row['short_description'],0,50);?></p>
                                            <?php
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<span>';
                                        echo '</span>';
                                    echo '</article>';
                                    echo '</a>';
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

                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
        <hr />
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

        <div class="footer-copyright text-center py-3 text-muted">All Rights Reserved &copy; 2020 TowGig Technologies</div>

        <div class="footer-copyright text-center py-3 text-muted"><span>Developed by<a class="text-white" href="https://crymzee.com"> Crymzee Pvt. Ltd.</a></span></div>
        <!-- Copyright -->
    </footer>
    <!-- MODEL-BOX -->

    <div class="modal fade" id="Modal-expert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container register">
                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-11 register-right model-pad"><button class="close" data-dismiss="modal" type="button">&times;</button>

                            <div class="tab-content" id="myTabContent">
                                <div aria-labelledby="home-tab" class="tab-pane fade show active" id="home" role="tabpanel">
                                    <p class="boxmp">Meet Amazing Buyers Waiting for Your Service,It only takes 3-6 minutes to sign up &amp; start earning.</p>

                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="mbp mt-2">For a quick sign up, Please enter your</p>

                                                <section class="mx-2 pb-3 text-center">
                                                    <ul class="nav nav-tabs md-tabs text-center" id="myTabMD" role="tablist">
                                                        <li class="nav-item waves-effect waves-light"><a aria-controls="home-md" aria-selected="true" class="nav-link active" data-toggle="tab" href="#signupemail" id="home-tab-md" role="tab">Email</a></li>
                                                        <!-- <li class="nav-item waves-effect waves-light"><a aria-controls="profile-md" aria-selected="false" class="nav-link" data-toggle="tab" href="#signupphone" id="profile-tab-md" role="tab">Phone</a></li> -->
                                                    </ul>

                                                    <div class="tab-content" id="myTabContentMD">
                                                        <div aria-labelledby="home-tab-md" class="tab-pane fade in show active" id="signupemail" role="tabpanel">
                                                            <form action="towgigsignup.php" method="post" name="myForm"><input class="form-control getemail" name="email" placeholder="Email Address" required="" type="email" value="" />
                                                                <p class="mbp12 mt-1"><span>The App Link will be send to you</span></p>
                                                                <span><input class="btnRegister1" name="submit" type="submit" value="Send" /></span></form>
                                                        </div>

                                                        <div aria-labelledby="profile-tab-md" class="tab-pane fade" id="signupphone" role="tabpanel">
                                                            <form action="towgigsignup.php" method="post" name="myForm"><input class="form-control mt-2 getphone" id="phone_number" name="phone_number[main]" required="" type="tel" value="" />
                                                                <p class="mbp12 mt-4"><span>The App Link will be send to you</span></p>
                                                                <span><input class="btnRegister mt-3" name="submit" type="submit" value="Send" /></span></form>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <!-- <p class="mbp1 mt-1 mt-3 ml-3">The App Link will be send to you, now</p> -->

                                        <p class="mbp1 ml-3 mt-2" style="color:#424141e0!important;">Or go to the App store &amp; search to download for free</p>

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

                        <div class="col-md-11 register-right model-pad"><button class="close" data-dismiss="modal" type="button">&times;</button>

                            <div class="tab-content" id="myTabContent">
                                <div aria-labelledby="home-tab" class="tab-pane fade show active" id="home" role="tabpanel">
                                    <p class="boxmp">A Diligence Expert is waiting to come service your vehicle.</p>

                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="mbp mt-2">For a quick sign up, Please enter your</p>

                                                <section class="mx-2 pb-3 text-center">
                                                    <ul class="nav nav-tabs md-tabs text-center" id="myTabMD" role="tablist">
                                                        <li class="nav-item waves-effect waves-light"><a aria-controls="home-md" aria-selected="true" class="nav-link active" data-toggle="tab" href="#signupemailb" id="home-tab-mdb" role="tab">Email</a></li>
                                                        <!-- <li class="nav-item waves-effect waves-light"><a aria-controls="profile-md" aria-selected="false" class="nav-link" data-toggle="tab" href="#signupphoneb" id="profile-tab-mdb" role="tab">Phone</a></li> -->
                                                    </ul>

                                                    <div class="tab-content" id="myTabContentMDb">
                                                        <div aria-labelledby="home-tab-mdb" class="tab-pane fade in show active" id="signupemailb" role="tabpanel">
                                                            <form action="towgigsignup.php" method="post" name="myForm"><input class="form-control getemail" name="email" placeholder="Email Address" required="" type="email" value="" />
                                                                <p class="mbp12 mt-1"><span>The App Link will be send to you</span></p>
                                                                <span><input class="btnRegister1" name="submit" type="submit" value="Send" /></span></form>
                                                        </div>

                                                        <div aria-labelledby="profile-tab-mdb" class="tab-pane fade" id="signupphoneb" role="tabpanel">
                                                            <form action="towgigsignup.php" method="post" name="myForm"><input class="form-control mt-2 getphone" id="phone_number1" name="phone_number[main]" required="" type="tel" value="" />
                                                                <p class="mbp12 mt-4"><span>The App Link will be send to you</span></p>
                                                                <span><input class="btnRegister mt-3" name="submit" type="submit" value="Send" /></span></form>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <!-- <p class="mbp1 mt-1 ml-3">The App Link will be send to you, now</p> -->

                                        <p class="mbp1 ml-3 mt-2" style="color:#424141e0!important;">Or go to the App store &amp; search to download for free</p>

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

    <div class="alert text-center cookiealert" role="alert" style="text-align: center;"><b>Do you like cookies?</b> 🍪 We use cookies to ensure you get the best experience on our website.<a href="cookie.html">Learn more</a><button aria-label="Close" class="btn btn-primary btn-sm acceptcookies" type="button">I agree</button></div>
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
    <style type="text/css">
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
    <!-- Include cookiealert script -->
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
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