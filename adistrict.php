<?php
include '../connection.php';
session_start();
$em=$_SESSION['usr'];
if(isset($_POST['adist']))
{
    $st=$_POST['st'];
    $di=$_POST['di'];
    $qa=  mysqli_query($dbcon,"select * from district_tbl where dist_name='$di'");
    if(mysqli_num_rows($qa)>0)
    {
        ?>
<script>
    alert("Already Added");
</script>
<?php
    }
 else {
        
       $we=  mysqli_query($dbcon,"insert into district_tbl values('','$st','$di','0','0','0','0','0','0','0','0') ");
       if($we>0)
       {
           header("location:adistrict.php?a=1");
       }
 else {
           header("location:adistrict.php?a=2") ;
       }
}
}
if(isset($_POST['dadd']))
{
       $s=$_GET['s'];
       $dadmin=$_POST['dadmin'];
       $demail=$_POST['demail'];
       $dpwd=$_POST['dpwd'];
       $dcnt=$_POST['dcnt'];
       $df=$_FILES['df']['name'];
       $df1=  strrpos($df,".");
       $df2=  substr($df,$df1);
       $df3="$demail$df2";
       move_uploaded_file($_FILES['df']['tmp_name'],getcwd()."//dadminpic//$df3");
       $up=  mysqli_query($dbcon,"update district_tbl set dadmin_name='$dadmin',dadmin_emailid='$demail',dadmin_password='$dpwd',dadmin_contact='$dcnt',dadmin_photo='$df3',dadmin_status='0' where district_id='$s'");
         if($up>0)
    {
        $log=  mysqli_query($dbcon,"insert into login_tbl values('','$demail','$dpwd','dadmin','1')");
        $project_name="Disaster Management";
        date_default_timezone_set('America/Toronto');
        require_once('class.phpmailer.php');
        $mail           = new PHPMailer();
        $body             = "Your Username is: $demail <br> and Password is: $dpwd";
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
$address = "$demail";
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
        <?php
        
        include 'menu.php';
        
        
        
        ?>

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
                    <span><h1>Welcome</h1></span>
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
                                        $pp=  mysqli_query($dbcon,"select * from state_tbl where sadmin_emailid='$em'");
                                        $pp1=  mysqli_fetch_row($pp);
                                        ?>
                                        <img src="../admin/sadminpic/<?php echo $pp1[6]?>" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php
                                        
                                        echo $pp1[2];
                                        ?></h3>
                                        <?php echo $pp1[3]?>
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
                                <a class="dropdown-item" href="../admin/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add District</h2>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <section class="error-page-content">

                <!-- Error Page Info -->
                <div class="outer-w3-agile mt-3">
                    <div>
                        <?php
                        if(isset($_GET['a']))
                        {
                            if($_GET['a']==1)
                            {
                                echo "<font color='green'>Added Successfully</font>";
                            }
                            if($_GET['a']==2)
                            {
                                echo "<font color='red'>Added Failed</font>";
                            }
                        }
                        ?>
                    </div>
                    <div class="container py-xl-5 py-8">
                        <div class="row justify-content-center">
                            <div class="errorleft d-xl-flex align-items-center col-xl-6">
                              
                                    <form method="post">
                                        <table class="table  table-responsive table-striped  table-hover table-bordered" style>
                                            <tr>
                                                <td><label>Choose State</label></td>
                                                <td><select name="st" class="form-control">
                                                        <option>--Select--</option>
                                                    <?php
                                                    $ee=  mysqli_query($dbcon,"select * from state_tbl");
                                                    while($ee1=  mysqli_fetch_row($ee))
                                                    {
                                                        ?>
                                                                <option value="<?php echo $ee1[0]?>"><?php echo $ee1[1]?></option>
                                                                    
                                                                <?php
                                                    }
                                                    ?>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Add District</td>
                                                <td><input type="text" name="di" class="form-control"></td>
                                            </tr>
                                            <tr><td colspan="2"><center><input type="submit" name="adist" value="ADD" class="btn btn-primary"></center></td></tr>
                                        </table>
                                    </form>
                               
                               
                               
                               
                            </div>
                           
                            <div class="error-right col-xl-4">
                                                 <h2 style="margin-left: 65px;">District List</h2>  
                        <div class="container">
	<div class="row">
	<table>
  
  <tr class="yellow"> 
    <td class="width">District Name</td>
    <td class="adjacent">Add Admin</td>
    
  </tr>
  <?php
  $qw=  mysqli_query($dbcon,"select * from district_tbl");
  while($qw1=  mysqli_fetch_row($qw))
  {
  ?>
  <tr> 
    <td><?php echo $qw1[2]?></td>
    <td class="adjacent"><a href="adistrictadmin.php?s=<?php echo $qw1[0]?>"><img src="images/plus.jpg" height="15" width="15" title="Add Admin"></a></td>
   
  </tr>
  
  <?php
  }
  ?>
  
  
 
</table>
	</div>
</div>
                            </div>
                            
                        </div>
                         <div>
    
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