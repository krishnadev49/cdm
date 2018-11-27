<?php
include 'connection.php';
session_start();


?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Disaster Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Stock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //webfonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light py-4">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.html">
                        Disaster Handling
                    </a>
                </h1>
                <!-- //logo -->
               
                <!-- main nav -->
                <?php
                                
                                
                                include 'menu.php';
                                ?>
                <!-- //main nav -->
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h3 class="text-center text-white">
                    Investment management
                </h3>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    
    <!-- //breadcrumbs -->
    <!-- title description-->
    
    <!-- //title description -->
    <!-- Services section -->
    <section class="wthree-row py-sm-5 pt-3 slide-bg position-relative" id="we_offer_agile">
        <div class="container py-md-5 py-3">
            <div class="py-lg-5 pb-5">
                <h3 class="agile-title text-center">Disaster Alert In your Location</h3>
            </div>
            <div class="services-bot-agile position-absolute">
                <div class="row mt-5">
                    
                    
                     <?php


   $sel=mysqli_query($dbcon,"SELECT * from alert where st='0' ORDER BY id desc");
    if(mysqli_num_rows($sel)>0)
{
   

    while($r=mysqli_fetch_row($sel))
    {
         
        
        
        
       
       
        ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-block block-1">
                                <h3 class="card-title">
                                    <span></span><?php echo $r[2] ?></h3>
                                <p class="card-text"><?php echo $r[1] ?>.</p>
                                <a href="al_dt.php?mid=<?php echo $r[0] ?>" title="Read more" class="read-more">Read more
                                    <i class="fa fa-angle-double-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <?php
    }
}
?>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- /Services section -->
    <!-- footer top -->
</div>
    <!-- footer top -->
    <!-- footer -->
    
    <!-- //footer -->
    <!-- Login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control border" placeholder=" " name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control border text-white" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-muted">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right text-dark">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //Login modal -->
    <!-- Register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control border" placeholder=" " name="Email" id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control border" placeholder=" " name="Password" id="password1" required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control border" placeholder=" " name="Confirm Password" id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-light text-white" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // Register modal -->
    <!-- subscribe form -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Subscribe now!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control border" placeholder=" " name="email" id="usermail" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control text-white" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //subscribe form -->
    <!-- js-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!--  magnific-popup  -->
    <!-- <script src="js/jquery.magnific-popup.js"></script> -->
    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!-- smooth scroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/stock.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js "></script>
</body>

</html>