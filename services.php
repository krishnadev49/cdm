<?php
include './connection.php';
if(isset($_POST['sub']))
{
    $em=$_POST['em'];
    $ps=$_POST['ps'];
    $se=  mysql_query("select * from login_tbl where login_email='$em' and login_password='$ps'");
    if(mysql_num_rows($se)>0)
    {
        $se1=  mysql_fetch_row($se);
        if($se1[3]=='admin')
        {
            session_start();
            $_SESSION['usr']=$em;
            header("location:./admin/index.php");
        }
        if($se1[3]=='sadmin')
        {
            session_start();
            $_SESSION['usr']=$em;
             header("location:./sadmin/index.php");
        }
        if($se1[3]=='dadmin')
        {
            session_start();
            $_SESSION['usr']=$em;
            header("location:./dadmin/index.php");
        }
        if($se1[3]=='volunteer')
        {
            session_start();
            $_SESSION['usr']=$em;
            header("location:./user/userhome.php");  
        }
    }
 else {
        ?>
<script>
    alert("Invalid username/Password");
</script>
<?php
    }
}
if(isset($_POST['reg']))
{
    $nm=$_POST['nm'];
    $ad=$_POST['ad'];
    $ema=$_POST['ema'];
    $cnt=$_POST['cnt'];
    $pwd=$_POST['pwd'];
    $st=$_POST['st'];
    $di=$_POST['di'];
    $so=$_POST['so'];
    $yes=$_POST['yes'];
    $f=$_FILES['f']['name'];
    $f1=  strrpos($f,".");
    $f2=  substr($f,$f1);
    $f3="$ema$f2";
    move_uploaded_file($_FILES['f']['tmp_name'],  getcwd()."//userpic//$f3");
    $ins=  mysql_query("insert into registeruser_tbl values('','$nm','$ad','$ema','$cnt','$pwd','$st','$di','$so','$f3','0','0','0','$yes')");
    if($ins>0)
    {
        $log=  mysql_query("insert into login_tbl values('','$ema','$pwd','$so','1')");
        $project_name="Disaster Management";
        date_default_timezone_set('America/Toronto');
        require_once('class.phpmailer.php');
        $mail           = new PHPMailer();
        $body             = "Your Username is: $ema <br> and Password is: $pwd";
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
$address = "$ema";
$mail->AddAddress($address, "$project_name");
if($mail->Send())
    {

?>
<script>
    alert("Mail Send Success..You can login and add location details...");
</script>
<?php
}
else
{
?>
<script>
    alert("Mail Send Failed");
</script>
<?php
}

    }
}
if(isset($_POST['spa']))
{
    $st=$_POST['st'];
    $sn=$_POST['sn'];
    $ee=$_POST['ee'];
    $sta=$_POST['sta'];
    $di=$_POST['di'];
    $pw=$_POST['pw'];
    $ad=$_POST['ad'];
    $cn=$_POST['cn'];
    $la=$_POST['la'];
    $lo=$_POST['lo'];
    $ii=mysql_query("insert into registersp_tbl values('','$st','$sn','$ee','$sta','$di','$pw','$ad','$cn','$la','$lo')");
    if($ii>0)
    {
        $logg=  mysql_query("insert into login_tbl values('','$ee','$pw','sp','1')");
      
        $project_name="Disaster Management";
        date_default_timezone_set('America/Toronto');
        require_once('class.phpmailer.php');
        $mail           = new PHPMailer();
        $body             = "Your Username is: $ee <br> and Password is: $pw";
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
$address = "$ee";
$mail->AddAddress($address, "$project_name");
if($mail->Send())
    {

?>
<script>
    alert("Mail Send Success..Check email and login");
</script>
<?php
}
else
{
?>
<script>
    alert("Mail Send Failed");
</script>
<?php
}

    
    }
}
?>
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
    <script>
             function loaddist1(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "search1.php?x=" + x, true);
                                    xmlhttp.send();
                               }
        </script>
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
            var map = new google.maps.Map(document.getElementById("dvMap1"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la1").value=e.latLng.lat();
                document.getElementById("lo1").value=e.latLng.lng();
            });
        };
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
                        Disaster Handling
                    </a>
                </h1>
                <!-- //logo -->
               
                <!-- main nav -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="about.html">about</a>
                        </li>
                        <li class="dropdown nav-item">
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
                        <li class="nav-item mr-lg-3 active">
                            <a class="nav-link" href="services.php">Services Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">contact</a>
                        </li>
                        <li>
                            <button type="button" class="btn btn-danger ml-lg-5 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                                Login
                            </button>
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Service Provider Register</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- title description-->
    <div class="container py-sm-5 py-3">
        <div class="row ">
            <div class="col-lg-1"></div>
            <div class="col-lg-6  bb-left">
                <form method="post">
                    <table class="table table-bordered table-condensed table-hover">
                        <tr>
                            <td>Service Type</td>
                            <td><select class="form-control" name="st">
                                    <option>--Choose--</option>
                                    <?php
                                    $nn=  mysql_query("select * from sptype_tbl");
                                    while($nn1=  mysql_fetch_row($nn))
                                    {
                                        ?>
                                    <option value="<?php echo $nn1[0]?>"><?php echo $nn1[1]?></option>
                                    <?php
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Service Name</td>
                            <td><input type="text" name="sn" class="form-control" placeholder="Name of your Organisation"></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><input type="email" name="ee" class="form-control" placeholder="Enter Your Email"></td>
                        </tr>
                        <tr>
                            <td>Choose State</td>
                            <td><select name="sta" onchange="loaddist1(this.value)" class="form-control">
                                    <option>--Choose--</option>
                                    <?php
                                    $re=  mysql_query("select * from state_tbl");
                                    while ($re1=  mysql_fetch_row($re))
                                    {
                                        ?>
                                    <option value="<?php echo $re1[0]?>"><?php echo $re1[1]?></option>
                                    <?php
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Choose District</td>
                            <td><div id="dis">
                                <select name="dis" class="form-control border">
                                    <option>--Choose--</option>
                                </select></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Enter Password</td>
                            <td><input type="password" name="pw" class="form-control" placeholder="Enter Your Password"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea name="ad" class="form-control" placeholder="Enter address">
                                
                                </textarea></td>
                        </tr>
                        <tr><td>Contact Number</td>
                            <td><input type="number" name="cn" class="form-control" placeholder="Enter Contact Number"></td>
                        </tr>
                        <tr>
                            <td>Enter Latitude</td>
                            <td><input type="text" name="la1" class="form-control" placeholder="Enter Latitude"></td>
                        </tr>
                        <tr>
                            <td>Enter Longitude</td>
                            <td><input type="text" name="lo1" class="form-control" placeholder="Enter Longitude"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="spa" value="REGISTER" class="btn btn-success"></center></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-3 px-lg-5">
                <div id="dvMap1" style="width: 500px; height: 650px"></div>
            </div>
        </div>
    </div>
    <!-- //title description -->
    <!-- Services section -->
    
    <!-- /Services section -->
    <!-- footer top -->
    
    <!-- footer top -->
    <!-- footer -->
    <footer class="py-sm-5">
        <div class="container">
            <div class="row py-5">
                <!-- footer grid1 -->
               
                <!-- //footer grid1 -->
                <!-- footer grid2 -->
               
                <!-- //footer grid2 -->
                <!-- footer grid3 -->
                
                <!-- //footer grid3 -->
                <!-- footer grid4  -->
               
                <!-- //footer grid4 -->
            </div>
            <div class="cpy-right text-center  pt-5 pb-sm-0 pb-3">
                <p class="text-secondary">© 2018 Disaster. All rights reserved | Design by
                     Trinity Technologies
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
					<form method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Emailid</label>
                                                        <input type="email"  class="form-control border" placeholder="Enter your emailid" name="em" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="password" class="col-form-label">Password</label>
							<input type="password" class="form-control border" placeholder="Enter your password " name="ps" id="password" required="">
						</div>
						<div class="right-w3l">
                                                    <input type="submit" class="form-control border text-white" value="Login" name="sub">
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
                                    <form  method="post" enctype="multipart/form-data">
                                        
						<div>
							<label for="" class="col-form-label">Name</label>
							<input type="text" class="form-control border" placeholder="Enter Your Name...." name="nm" id="recipient-rname" required="">
						</div>
						<div>
							<label for="" class="col-form-label">Address</label>
                                                        <textarea name="ad" required="" class="form-control border" placeholder="Type Your address...."></textarea>
						</div>
						<div>
							<label for="" class="col-form-label">Emailid</label>
                                                        <input type="email" class="form-control border" placeholder=" Enter your Email Address...." name="ema"  required="">
						</div>
						<div>
							<label for="" class="col-form-label">Contact Number</label>
                                                        <input type="number" class="form-control border" placeholder="Enter your contact number...." name="cnt"  required="">
						</div>
						<div>
							<label for="" class="col-form-label">Password</label>
                                                        <input type="password" class="form-control border" placeholder="create your password...." name="pwd"  required="">
						</div>
                                        <div>
							<label for="" class="col-form-label">Choose State</label>
                                                        <select name="st" class="form-control border" onchange="loaddist(this.value)">
                                                            <option>--Select one---</option>
                                                            <?php
                                                            $as=  mysql_query("select * from state_tbl");
                                                            while($as1=  mysql_fetch_row($as))
                                                            {
                                                                ?>
                                                            <option value="<?php echo $as1[0]?>"><?php echo $as1[1]?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                        </div>
                                        <div >
							<label for="" class="col-form-label">Choose District</label>
                                                        <div id="dis">  <select name="di" class="form-control border">
                                                            <option>--Select one---</option>
                                                          </select></div>
                                         </div>
                                        <div>
                                            <label for="" class="col-form-label">select one</label><br>
                                                        <input type="radio" name="so" value="volunteer" onclick="toggle('show');">As a volunteer
                                                        <input type="radio" name="so" value="user" onclick="toggle('hide');">As a user
                                        </div>
                                        <div id="nn" style="visibility: hidden">
                                            Are you willing to work as Team Lead:
                                             <input type="radio" id="mm" value="yes" name="yes">Yes
                                             <input type="radio" id="mm" value="no" name="yes">No
                                        </div>
                                        <script>
                                            function toggle(value)
                                            {
                                                if(value=='show')
                                                {
                                                   document.getElementById("nn").style.visibility='visible';
                                                }
                                                else
                                               {
                                                   document.getElementById("nn").style.visibility='hidden';
                                                   
                                                }
                                            }
                                        </script>
                                        <div>
                                            <label for="" class="col-form-label">Upload Photo</label><br>
                                            <input type="file" name="f" class="form-control border">
                                                        
                                        </div><br>
						<div class="right-w3l">
                                                    <input type="submit" class="form-control bg-light text-white" value="Register" name="reg">
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
   
</body>

</html>