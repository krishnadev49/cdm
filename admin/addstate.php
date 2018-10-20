<?php
include '../connection.php';
if(isset($_POST['s']))
{
    $stname=$_POST['stname'];
    $sel=  mysql_query("select * from state_tbl where state_name='$stname'");
    if(mysql_num_rows($sel)>0)
    {
        ?>
<script>
    alert("Already Added");
</script>
<?php
    }
 else {
        
 
    $ins=  mysql_query("insert into state_tbl values('','$stname','0','0','0','0','0','0')");
    if($ins>0)
    {
        header("location:addstate.php?t=1");
    }
 else {
         header("location:addstate.php?t=2");
    }
 
     
    
}
}
if(isset($_POST['reg']))
{
    $s=$_GET['s'];
    $sadmin=$_POST['sadmin'];
    $semail=$_POST['semail'];
    $pswd=$_POST['pswd'];
    $cnt=$_POST['cnt'];
    $f=$_FILES['f']['name'];
    $f1=  strrpos($f,".");
    $f2=  substr($f,$f1);
    $f3="$semail$f2";
    move_uploaded_file($_FILES['f']['tmp_name'],  getcwd()."//sadminpic//$f3");
    $up=  mysql_query("update state_tbl set sadmin_name='$sadmin',sadmin_emailid='$semail',sadmin_password='$pswd',sadmin_contact='$cnt',sadmin_photo='$f3',sadmin_status='0' where state_id='$s'");
    if($up>0)
    {
        $log=  mysql_query("insert into login_tbl values('','$semail','$pswd','sadmin','1')");
        $project_name="Disaster Management";
        date_default_timezone_set('America/Toronto');
        require_once('class.phpmailer.php');
        $mail           = new PHPMailer();
        $body             = "Your Username is: $semail <br> and Password is: $pswd";
        $mail->IsSMTP(); 
$mail->SMTPDebug  =1;                    
$mail->SMTPAuth   = true;                 
$mail->CharSet="UTF-8";
//$mail->SMTPSecure = "tls";                 
$mail->Host       = "mail.trinitytechnology.in"; 
$mail->Port       = 25;
$mail->Username   = "web@trinitytechnology.in";  
$mail->Password   = "abc123!@#";          
$mail->SetFrom('web@trinitytechnology.in', "$project_name"); 
$mail->Subject    = "Username and Password from $project_name";
$mail->MsgHTML($body);
$address = "$semail";
$mail->AddAddress($address, "$project_name");
if($mail->Send())
    {

echo"Mail send Successfully";
}
else
{
echo"Mail sending Failed";
}

    }
    
}
?>
<html lang="en">

<head>
    <title>Disaster management</title>
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
    
    <style>
        body {

            font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif,  Open Sans;
            font-size: 14px;
            line-height: 1.42857;
            /*background: rgb(204,204,204);*/
        }
table {
    font: 11px/24px 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif,  Open Sans;
	border-collapse: collapse;
	width: 320px;
	}

th {
	padding: 0 0.5em;
	text-align: left;
	}

tr.yellow td {
	border-top: 1px solid #FB7A31;
	border-bottom: 1px solid #FB7A31;
	background: #FFC;
	}

td {
	border-bottom: 1px solid #CCC;
	padding: 0 0.5em;
	}

td.width {
	width: 190px;
	}

td.adjacent {
	border-left: 1px solid #CCC;
	text-align: center;
	}
    </style>
    
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
                    <a href="addstate.php">
                        <i class="fas fa-chart-pie"></i>
                      Manage State
                    </a>
                </li>
                <li>
                    <a href="addsptype.php">
                        <i class="fas fa-th"></i>
                         Manage Service Type
                    </a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Pages
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="500.html">500</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <i class="far fa-window-restore"></i>
                        Widgets
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
                    <h2>Welcome Admin</h2>
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
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
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
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
          
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add State with State Admin</h2>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <section class="error-page-content">

                <!-- Error Page Info -->
                <div class="outer-w3-agile mt-3">
                    <div>
                        <?php
                        if(isset($_GET['t']))
                        {
                            if($_GET['t']==1)
                            {
                                echo "<font color='green'>Added Successfully</font>";
                            }
                            if($_GET['t']==2)
                            {
                                echo "<font color='red'>Added Failed</font>";
                            }
                        }
                        ?>
                    </div>
                    <div class="container py-xl-5 py-6">
                         
                        <div class="row justify-content-center">
                            <div class="errorleft d-xl-flex align-items-center col-xl-4">
                                <form method="post">
                                    <table class="table table-active table-bordered table-responsive table-hover table-light">
                                        <tr>
                                            <th>State Name</th>
                                            <th><input type="text" name="stname" class="form-control"></th>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><center><input type="submit" name="s" value="ADD" class="btn btn-primary"></center></td>
                                        </tr>
                                    </table>
                                </form>
                               
                            </div>
                            
                            <div class="error-right col-xl-6">
                                
                                <?php
                                if(isset($_GET['s']))
                                {
                                    $s=$_GET['s'];
                                    ?>
                               
                                <form method="post" enctype="multipart/form-data">
                                    
                                    <table class="table  table-responsive table-hover">
                                        <?php
                                        $ss=  mysql_query("select * from state_tbl where state_id='$s'");
                                        $ss1=  mysql_fetch_row($ss);
                                        ?>
                                        <tr>
                                            <td>state Name</td>
                                            <td><input type="text" name="sname" value="<?php echo $ss1[1]?>" class="form-control" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>State Admin Name</td>
                                            <td><input type="text" name="sadmin" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Email Id</td>
                                            <td><input type="email" name="semail" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="pswd" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Contact No</td>
                                            <td><input type="number" name="cnt" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Upload Photo</td>
                                            <td><input type="file" name="f" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><center><input type="submit" name="reg" value="REGISTER" class="btn btn-primary"></center></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                                }
                                ?>
                               
                            </div>
                        </div>
                       
                        
                    </div>
                    <div>
                        <h2 style="margin-left: 65px;">State List</h2>  
                        <div class="container">
	<div class="row">
	<table>
  
  <tr class="yellow"> 
    <td class="width">State Name</td>
    <td class="adjacent">Add Admin</td>
    
  </tr>
  <?php
  $qw=  mysql_query("select * from state_tbl");
  while($qw1=  mysql_fetch_row($qw))
  {
  ?>
  <tr> 
    <td><?php echo $qw1[1]?></td>
    <td class="adjacent"><a href="addstate.php?s=<?php echo $qw1[0]?>"><img src="images/plus.jpg" height="15" width="15" title="Add Admin"></a></td>
   
  </tr>
  
  <?php
  }
  ?>
  
  
 
</table>
	</div>
</div>
                                </div>
                </div>
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