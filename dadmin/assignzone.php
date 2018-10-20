<?php
include '../connection.php';
session_start();
$em=$_SESSION['usr'];
if(isset($_GET['x']))
                      {
                          $x=$_GET['x'];
                          $id2=$_GET['id2'];
                          $zd=  mysql_query("select * from userzone_tbl where userzone_email='$x' and zone_id='$id2'");
                          $zd1=  mysql_fetch_row($zd);    
                          $rt=  mysql_query("insert into confirmzone_tbl values('','$zd1[2]','$x','leader')");
                          if($rt>0)
                          {
                            header("location:assignzone.php?id=$id2");
                          }
                          
                      }
                       if(isset($_GET['y']))
                      {
                          $y=$_GET['y'];
                          $id1=$_GET['id1'];
                          $zd=  mysql_query("select * from userzone_tbl where userzone_email='$y' and zone_id='$id1'");
                          $zd1=  mysql_fetch_row($zd); 
                          $rt=  mysql_query("insert into confirmzone_tbl values('','$zd1[2]','$y','user')");
                          if($rt>0)
                          {
                            header("location:assignzone.php?id=$id1");
                          }
                          
                      }
?>
<html lang="en">

<head>
    <title>Disaster Management</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
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
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.php">Manage Disaster</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fas fa-th-large"></i>
                        Home
                    </a>
                </li>
                
                <li>
                    <a href="viewvolun.php">
                        <i class="fas fa-chart-pie"></i>
                        View Volunteers
                    </a>
                </li>
                <li>
                    <a href="viewuser.php">
                        <i class="fas fa-th"></i>
                        View Users
                    </a>
                </li>
               
                <li>
                    <a href="zone.php">
                        <i class="far fa-envelope"></i>
                        Zone Creation
                        
                    </a>
                </li>
                <li>
                    <a href="assignzone.php">
                        <i class="far fa-window-restore"></i>
                        Assign Zone
                    </a>
                </li>
                <li>
                    <a href="pricing.html">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <h1>Welcome</h1>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">User notifications</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>4 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>6 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>12 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>1 days ago</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">view all notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Sed feugiat</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>Aliquam sed</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Lorem ipsum</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Cras rutrum</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                               <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <?php
                                        $rv=  mysql_query("select * from district_tbl where dadmin_emailid='$em'");
                                        $rv1=  mysql_fetch_row($rv);
                                        ?>
                                        <img src="../sadmin/dadminpic/<?php echo $rv1[7]?>" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php echo $rv1[3]?></h3>
                                        <?php echo $rv1[4]?>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Assign Zone to Volunteers</h2><br>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <section class="error-page-content">

                <!-- Error Page Info -->
            
                  
                        <div class="row justify">
                         
                            <div class="errorleft col-lg-5">
                                <?php
                                $zz=  mysql_query("select * from zonecreate_tbl where zone_district='$em'");
                                ?>
                                <table class="table  table-hover table-responsive table-bordered table-primary">
                                    <tr>
                                        <th>Zone Name</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Assign Volunteers</th>
                                    </tr>
                                <?php
                                while($zz1=  mysql_fetch_row($zz))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $zz1[1]?></td>  
                                        <td><?php echo $zz1[2]?></td>
                                        <td><?php echo $zz1[3]?></td>
                                        <td><a href="assignzone.php?id=<?php echo $zz1[0]?>"><img src="images/plus.jpg" style="height: 20px;width: 20px;" title="Assign Volunteers"></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </table>
                            </div>
                            <div class=" col-xl-7">
                                <?php
                                if(isset($_GET['id']))
                                {
                                    
                                   $id=$_GET['id'];
                                     $rv=  mysql_query("select * from district_tbl where dadmin_emailid='$em'");
                                        $rv1=  mysql_fetch_row($rv);
                                        $bb=  mysql_query("select * from zonecreate_tbl where zone_id='$id'");
                                        $bb1=  mysql_fetch_row($bb);
                                    $re=mysql_query("select user_name,user_address,user_email,user_contact,user_response,user_district,user_lat,user_long,volteam_lead,SQRT(POW(69.1*(user_lat-$bb1[2]),2)+pow(69.1*($bb1[3]-user_long)*COS(user_lat/57.3),2)) AS distance from registeruser_tbl where user_response='volunteer' and user_district='$rv1[0]' HAVING distance<=10 ORDER BY distance");
                                    
                                   
                                    if(mysql_num_rows($re)>0)
                                    {
                                    ?>
                               
                                <table class="table  table-responsive table-hover " >
                                    <tr>
                                        <th>Volunteer Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th >Confirm</th>
                                    </tr>
                                   
                                    <?php
                                    while ($re1=mysql_fetch_row($re))
                                    {
                                        ?>
                                     <tr>
                                         <td><?php echo $re1[0]?><span><?php if($re1[8]=='yes'){echo "<font color='red'>TEAM LEADER</font>";} ?></span></td>
                                        <td><?php echo $re1[1]?></td>
                                        <td><?php echo $re1[2]?></td>
                                        <td><?php echo $re1[3]?></td>
                                        <td >
                                            <?php
                                             $an=  mysql_query("select * from zonecreate_tbl where zone_id='$id'");
                                            while( $an1=  mysql_fetch_row($an))
                                            {
                                             $yx=  mysql_query("select * from confirmzone_tbl where  volunteeremail_id='$re1[2]' and volunteer_duty='leader'");
                                            $yx1=  mysql_fetch_row($yx);
                                           
                                            $rb=  mysql_query("select * from confirmzone_tbl where volunteeremail_id='$re1[2]' and volunteer_duty='user'and volunteerzone_id='$id' ");
                                        
                                            if(mysql_num_rows($yx)>0)
                                            {
                                                echo "Assigned Leader";
                                            }
                                           else if(mysql_num_rows($rb)>0)
                                           {
                                               echo "volunteer of this zone ";
                                           }
                                            else
                                            {
                                           ?>
                                        <a href="assignzone.php?x=<?php echo $re1[2]?>&id2=<?php echo $id?>" class="fa fa-user" title="As a leader"></a>
                                        <a href="assignzone.php?y=<?php echo $re1[2]?>&id1=<?php echo $id?>" class="fa fa-user-circle" title="As normal Volunteer"></a>
                                        <?php
                                            }
                                           
                                        ?>
                                        </td>
                                     </tr>
                                        <?php
                                            }
                                       $zzz=  mysql_query("select * from zonecreate_tbl where zone_district='$em' and zone_id='$id'");
                                    while( $zzz1=  mysql_fetch_row($zzz))       
                                    {
                                        $tp=  mysql_query("select * from userzone_tbl where userzone_email='$re1[2]' and zone_id='$id'");
                                        if(mysql_num_rows($tp)>0)
                                        {
                                            
                                        }
                                       else
                                       {
                                      $vb=  mysql_query("insert into userzone_tbl values('','$re1[2]','$id')");
                                       }
                                    }
                                    }
                                     
                                     ?>
                                   
                     
                                </table>
                                <?php
                                    }
 else {
                                        echo "No Volunteers Found";
 }
 
                                }
                                ?>
                            </div>
                        </div>
                      <?php
                     
                      ?>
              
                <!--// Error Page Info -->

            </section>

            <!--// Error Page Content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>