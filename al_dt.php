<?php
include 'connection.php';


?>
<?php
$mid=$_GET['mid'];
                          $sel=  mysqli_query($dbcon,"select * from alert where id='$mid'");
                          $r=  mysqli_fetch_row($sel);
                          ?>
<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    
$date=date('Y-m-d');
    $ins=mysqli_query($dbcon,"insert into msg values('','$em','$t1','$mid','$r[6]','$date','0')");
    if($ins>0)
    {
       
            
                 header("location:al_dt.php?mid=$mid");
            }
       
}

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
    <title>Stock Corporate Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Stock fluid web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
  <script type="text/javascript">
      
        function initMap() {
        var uluru = {lat: <?php echo $r['2']?>, lng: <?php echo $r['3']?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
   
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
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
                        stock
                    </a>
                </h1>
                <!-- //logo -->
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Single</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--  single page -->
    <section class="single_blog_wthree py-3">
        <div class="container pt-lg-5">
            <div class="row py-sm-3">
                <!-- single page left grid -->
                <div class="col-lg-9  single-left">
                    <div class="row show-top-grids">
                        <div class="card">
                            <h5 class="blog-title singlpage_w3 card-title font-weight-bold">
                               <?php echo $r[1] ?>
                            </h5>
                            
                             <div id="map" style="width: 100%; height: 500px;"></div>
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between border-bottom pb-3">
                                    <div class="blog_w3icon">
                                        <span>
                                            <i class="fas fa-user mr-2"></i><?php echo $r[5] ?></span>
                                        
                                    </div>
                                </div>
                                <article class="mt-3"><?php echo $r[4] ?></article>
                                
                            </div>
                            
                            <div class="card-footer">
                                <p class="card-text">
                                    <small class="text-muted"><?php echo $r[7] ?></small>
                                </p>
                            </div>
                        </div>
                        <div class="all-comments mt-5">
                            
                            
                            <h5>Latest Update from Administration can been seen below.<a href="reg.php"><b style="color: lightskyblue">Become A Volunteer Now...... </b></a> </h5>
                                    <br/>
                                    <br/>
                            <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from ad_msg where did='$mid' order by id desc");
                                                        
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                
                                                                
                                                                ?>
                            <div class="media">
                                <img class="mr-3" src="images/q2t34kjldqrqv0pl7ihh - Copy.png" style="width: 70px;height: 70px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Admin</h5>
                                    <p><b><?php echo $r_gal[2] ?></b>-<?php echo $r_gal[3] ?>. </p>
                                </div>
                            </div>
                            
                            
                            <br/>
                                    
                                
                            
                            
                            <?php
                                                            }
                                                        }
                                                        ?>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- //single page right grid -->
                <!-- side bar -->
                <div class="col-lg-3 sidebar_wthree">
                    <!-- Search Widget -->
                     <?php
                                                        $se=mysqli_query($dbcon,"select * from don where did='$mid' order by id desc limit 6");
                                                        
                                                        if(mysqli_num_rows($se)>0)
                                                        {
                                                            
                                                        ?>
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Donation Recevied</h5>
                        <div class="card-body">
                            <ul class="w3-tag2">
                                <?php
                                
                                while($se1=mysqli_fetch_row($se))
                                                            {
                                ?>
                                <li>
                                    <a href="single.html">
                                        <i class="fa fa-angle-right mr-2"></i><b><?php echo $se1[2] ?>Rs/-</b>(<?php echo $se1[1] ?>)</a>
                                </li>
                               <?php
                                                            }
                                                            ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                                                        }
                                                        ?>
                    <!-- Side Widget -->
                     <?php
                                                        $se=mysqli_query($dbcon,"select * from rev where did='$mid' order by id desc limit 6");
                                                        
                                                        if(mysqli_num_rows($se)>0)
                                                        {
                                                           $s2= mysqli_fetch_row($se); 
                                                        ?>
                    
                    
                    <div class="card my-4">
                        <h5 class="card-header"><?php echo $s2[1] ?></h5>
                        
                        <div class="card-body">
                            <p> 
                                <?php echo $s2[2] ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    
                                                        }
                                                        ?>
                    <!-- latest post -->
                    
                    <!-- //side bar -->

                </div>
            </div>
        </div>
    </section>
    <!-- //single blog -->
    <!-- footer top -->
    
    <!-- footer top -->
    <!-- footer -->
    <footer class="py-sm-5">
        <div class="container">
            <div class="row py-5">
                <!-- footer grid1 -->
                <div class="col-lg-3 col-sm-6">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            stock
                        </a>
                    </h2>
                    <div class="fv3-contact mt-3">
                        <span class="fas fa-home mr-2"></span>
                        <p>90 Street, City, State 34789.</p>
                    </div>
                    <div class="fv3-contact">
                        <span class="fas fa-phone-volume mr-2"></span>
                        <p>+456 123 7890</p>
                    </div>
                    <div class="fv3-contact">
                        <span class="fas fa-envelope-open mr-2"></span>
                        <a href="mailto:example@email.com" class="text-secondary">info@example.com</a>
                    </div>
                </div>
                <!-- //footer grid1 -->
                <!-- footer grid2 -->
                <div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-sm-0 mt-5">
                    <h3 class="mb-3">our services</h3>
                    <ul class="list-agileits">
                        <li>
                            <a href="index.html">
                                quality resourcing
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="about.html">
                                inventory tracking
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="services.html">
                                financial planning
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                budget friendly
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //footer grid2 -->
                <!-- footer grid3 -->
                <div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-lg-0 mt-sm-5 mt-5">
                    <h3 class="mb-3">Navigation</h3>
                    <ul class="list-agileits">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="about.html">
                                About Us
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="services.html">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //footer grid3 -->
                <!-- footer grid4  -->
                <div class="col-lg-3  col-sm-6 footv3-left my-lg-0 mt-5">
                    <h3 class="mb-3">subscribe to newsletter</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control  bg-dark border-0" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="Submit" class="form-control bg-secondary text-white border-0" id="sub" value="submit" name="sub">
                        </div>
                    </form>
                </div>
                <!-- //footer grid4 -->
            </div>
            <div class="cpy-right text-center  pt-5 pb-sm-0 pb-3">
                <p class="text-secondary">© 2018 Stock. All rights reserved | Design by
                    <a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
                </p>
            </div>
        </div>
        <!-- //footer container -->
    </footer>
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
                    <form action="#" method="post">
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
                    <form action="#" method="post">
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