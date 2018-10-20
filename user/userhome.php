<?php
include '../connection.php';
session_start();
$em=$_SESSION['usr'];
if(isset($_POST['s']))
{
    $lat=$_POST['lat'];
    $log=$_POST['log'];
    $mk=  mysql_query("update registeruser_tbl set user_lat='$lat',user_long='$log' where user_email='$em'");
    if($mk>0)
    {
        ?>
<script>
    alert("Added Successfully...Login after sometime..");
</script>
<?php
    }
 else {
        ?>
<script>
    alert("Added Failed");
</script>
<?php
    }
}
if(isset($_GET['v']))
{
    $d=$_GET['v'];
    
     
     
    
}
?>
<html lang="zxx">

<head>
    <title>Disaster Management</title>
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
   
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
<script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        };
    </script>
    <style>
        .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}
#panel {
    //padding: 50px;
    display: none;
}
    </style>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="userhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="about.html">about</a>
                        </li>
                        <li class="dropdown nav-item active">
                            <a href="#" data-toggle="dropdown" class="nav-link">
                                Pages
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li class="nav-item">
                                    <a href="portfolio.html" class="nav-link">Portfolio</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#" class="nav-link">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="nav-link">Layout 1</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog3_style1.html" class="nav-link">Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog3_style2.html" class="nav-link">Right Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog3_style3.html" class="nav-link">Without Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="nav-link">Layout 2</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog2_style1.html" class="nav-link">Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog2_style2.html" class="nav-link">Right Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog2_style3.html" class="nav-link">Without Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="nav-link">Layout 3</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog_row_style1.html" class="nav-link">Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog_row_style2.html" class="nav-link">Right Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog_row_style3.html" class="nav-link">Without Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="nav-link">Layout 4</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog_col_style1.html" class="nav-link">Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog_col_style2.html" class="nav-link">Right Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog_col_style3.html" class="nav-link">Without Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="soon.html" class="nav-link">Coming soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="maintenance.html" class="nav-link">Maintenance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="error.html" class="nav-link">404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="typo.html" class="nav-link">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">contact</a>
                        </li>
                        <li>
                            <a class="nav-link" href="../logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
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
                    Disaster management
                </h3>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    
    <!-- //breadcrumbs -->
    <!-- blog -->
    <div class="container pt-3">
        <div class="row py-sm-5">
            <!-- left grid -->
            <div class="col-lg-3 sidebar_wthree">
                <!-- Search Widget -->
                <div class="card mb-4">
                    <h5 class="card-header">Welcome...</h5>
                    <div class="card-body">
                        <div class="input-group">
                          <?php
                          $er=  mysql_query("select * from registeruser_tbl where user_email='$em'");
                          $er1=  mysql_fetch_row($er);
                          ?>
                            <img src="../userpic/<?php echo $er1[9]?>" class="img img-thumbnail" style="width: 100px;height: 100px;">
                            <br>
 <?php
                       echo $er1[1];
                       ?>
                        </div>
                    </div>
                </div>
                <!-- Categories Widget -->
                
                <!-- Side Widget -->
               
                <!-- latest post -->
                
            </div>
            <!-- //left gfrid -->
            <!-- right grid -->
            <div class="col-lg-9">
                <div class="row">
                    <!-- blog grid -->
                    <?php
                   
                      
                        $aa=  mysql_query("select * from registeruser_tbl where user_email='$em'");
                        $aa1=  mysql_fetch_row($aa);
                        if($aa1[10]==0&&$aa1[11]==0)
                        {
                    ?>
                    <div class="col-md-6">
                        <h1>Add Your Location....</h1><br>
                        <div class="card">
                           
                            <div class="card-header p-0">
                               
                            </div>
                            <form method="post">
                            <div class="card-body">
                                <div class="d-lg-flex justify-content-between  border-bottom py-2">
                                    Enter Latitude
                                    <div class="blog_w3icon">
                                        <span>
                                            <input type="text" name="lat" id="la" class="form-control" placeholder="Provide your Latitude..">
                                        
                                    </div>
                                </div>
                              <div class="d-lg-flex justify-content-between  border-bottom py-2">
                                    Enter Longitude
                                    <div class="blog_w3icon">
                                        <span>
                                            <input type="text" name="log" id="lo" class="form-control" placeholder="Provide your Longitude..">
                                        
                                    </div>
                                    
                              </div><br>
                                <center>  <button type="submit" name="s" class="btn btn-primary">ADD</button></center>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- //blog grid -->
                    <!-- blog grid -->
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="card">
                           <div class="card-header p-0">
                                <div id="dvMap" style="width: 500px; height: 650px"></div>
                            </div>
                            
                        </div>
                    </div>
                    <?php
                        }
 else {
                           ?>
                    <div style="position: relative;left: 200px;">
                        <?php
                        $hn=  mysql_query("select * from confirmzone_tbl where volunteeremail_id='$em'");
                        $hn1=  mysql_fetch_row($hn);
                        $hv=  mysql_query("select * from zonecreate_tbl where zone_id='$hn1[1]'");
                        $hv1=  mysql_fetch_row($hv);
                        ?>
                        <div class="how-section1" style="position: relative;right: 200px;">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="../user/images/loc.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Your Zone Details</h4>
                            <h4 class="subheading" style="position: relative;left: 20px;">Zone Name</h4>
                                        <p class="text-danger" style="position: relative;left: 50px;"><?php echo $hv1[1]?></p>
                                         
                           
                            <h4 class="subheading" style="position: relative;left: 20px;">Designation</h4>
                                        <p class="text-danger" style="position: relative;left: 50px;"><?php echo $hn1[3]?></p>
                        <h4 class="subheading" style="position: relative;left: 20px;">Other Team Members</h4>
                        <p class="text-danger" style="position: relative;left: 50px;">
                            <?php
                               $qz=  mysql_query("SELECT * FROM  userzone_tbl where userzone_email='$em'");
                               $qz1=  mysql_fetch_row($qz);
                               $qx=  mysql_query("SELECT * FROM confirmzone_tbl where  volunteerzone_id='$qz1[2]'");
                               while( $qx1= mysql_fetch_row($qx))
                               {
                                   $bl=  mysql_query("SELECT * FROM `registeruser_tbl` where user_email='$qx1[2]' and user_email not in('$em')");
                                 while( $bl1=  mysql_fetch_row($bl))
                                 {
                                 
                                  ?>
                                  <?php echo $bl1[1];?>
                            <a href="userhome.php?v=<?php echo $bl1[3]?>" ><img src="images/view.png" style="width: 50px;height: 50px;" title="view Details" ></a><br>
                        
                            <?php
                            
                                 }
                               }
                            ?>
                        </p>

                        </div>
                    </div>
                     

                           
                    </div>
          
                </div>
                    <?php
 }
                    ?>
                <!-- //blog grid -->
                <div class="row my-5">
                    <!-- blog grid -->
                   
                    <!-- //blog grid -->
                    <!-- blog grid -->
                   
                </div>
                <!-- //blog grid -->
            </div>
            <!-- //right grid -->
        </div>
    </div>
    <!-- //blog -->
  <!-- footer top -->
    
    <!-- footer top -->
    <!-- footer -->
    
            <div class="cpy-right text-center  pt-5 pb-sm-0 pb-3">
                <p class="text-secondary">© 2018 Stock. All rights reserved | Design by
                    Trinity Technologies
                </p>
            </div>
        </div>
        <!-- //footer container -->
    </footer>
    <!-- //footer -->
    <!-- Login modal -->
       <!-- //Login modal -->
    <!-- Register modal -->
    
    <!-- // Register modal -->
    <!-- subscribe form -->
    
    <!-- //subscribe form -->
    <!-- js-->
<!--    <script src="js/jquery-2.2.3.min.js"></script>
     move-top 
    <script src="js/move-top.js"></script>
     easing 
    <script src="js/easing.js"></script>
     smooth scroll 
    <script src="js/SmoothScroll.min.js"></script>
      necessary snippets for few javascript files 
    <script src="js/stock.js"></script>
     Bootstrap Core JavaScript 
    <script src="js/bootstrap.js "></script>-->
</body>

</html>