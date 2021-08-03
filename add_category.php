<?php
// Initialize the session
require_once "backend/database.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category_name = $_POST['category'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $category_name)));
    $sql_cat = "SELECT * FROM post_category";
    $allcat = $link->query($sql_cat);
    if(mysqli_num_rows($allcat)==0){
        $stmt = mysqli_prepare($link,"INSERT INTO post_category (name,slug) VALUES (?,?)");
        if(false===$stmt){
            $msg = "Something went wrong1";
        }
        $a_c = mysqli_stmt_bind_param($stmt,"ss",$category_name,$slug);
        if(false===$a_c){
            $msg = "Something went wrong2";
        }
        $a_c = $stmt->execute();
        if ( false===$a_c ) {
            $msg = "Error with execution";
        }else{
            header("location: allcategory.php");
        }
        $stmt->close();
    }else{
        while($row_cat = $allcat->fetch_assoc()){
            if ($row_cat['slug'] == $slug){
                $msg = "Category already exist";
            }else{
                $stmt = mysqli_prepare($link,"INSERT INTO post_category (name,slug) VALUES (?,?)");
                if(false===$stmt){
                    $msg = "Something went wrong1";
                }
                $a_c = mysqli_stmt_bind_param($stmt,"ss",$category_name,$slug);
                if(false===$a_c){
                    $msg = "Something went wrong2";
                }
                $a_c = $stmt->execute();
                if ( false===$a_c ) {
                    $msg = "Error with execution";
                }else{
                    header("location: allcategory.php");
                }
                $stmt->close();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TowGig</title>
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!-- <link rel="stylesheet" type="text/css" href="../../css/main.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark|Roboto+Condensed&display=swap" rel="stylesheet"> -->
    <!-- <script src='https://kit.fontawesome.com/ee1dfcbe90.js'></script> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        label {
            font-weight: 600;
            font-size: 18px;
        }
        .post-btn{
            color: white;
            background-color: #35a28f;
            border: 2px solid #35a28f;
            padding: 2px 64px;
            border-radius: 3px;
        }
        .alert{
            display:none;
        }
        .image-field{
            height: calc(1.95em + .75rem + 2px);
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
                    <li class="nav-item">
                        <a class="nav-link" href="how-it-works.html">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services&promo.html">Service/Promo</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blogs</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allblogs.php">All Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mr-3" href="allcategory.php">All Categories</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link navlinkback" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pb-5">
        <div class="row">
        <span class="contact100-form-title getintouch" >
            Add Blog Category
        </span>

                
            <div class="col-md-12">
                    <?php
                    if (!empty($msg)) {
                    ?>
                        <div style="text-align:center;"><div class="alert alert-info mt-3" style="text-align:center;width:100%;display:block;"><?php echo $msg; ?></div></div>
                <?php
                    }?>
                <form class="" name="contactform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="">Category:</label>
                        <input type="text" class="form-control" id="only-text" name="category" value="" placeholder="category" required/>
                    </div>
                    <div class="form-group" style="text-align:center;">
                        <input type="submit" class="post-btn" value="Add">
                    </div>
                </form>
            </div>
            <!-- <div class="col-md-1"></div> -->
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
                            <a href="https://play.google.com/store/apps/details?id=com.crymzee.tow_gig"><img alt="googlebtn" class="footer-img2" src="img/googlebtn.png" /></a>
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
        <div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="footer-copyright text-center py-3 text-muted" style="text-align: center!important;">All Rights Reserved © 2020 TowGig Technologies
                    </div>
                    <div class="footer-copyright text-center py-3 text-muted" style="text-align: center!important;"><span>Developed by<a class="text-white" href="https://crymzee.com"> Crymzee Pvt. Ltd.</a></span>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <script>
        initSample();
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