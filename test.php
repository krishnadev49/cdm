<?php
include './connection.php';
if(isset($_POST['sub10']))
{
   $em=$_POST['em'];
    $ps=$_POST['pas'];
    $se=  mysqli_query($dbcon,"select * from login_tbl where login_email='$em' and login_password='$ps'");
    if(mysqli_num_rows($se)>0)
    {
        $se1=  mysqli_fetch_row($se);
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
	<title>Disaster Managemrnt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
	<!-- popup box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
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
        <form method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control border" placeholder=" " name="em" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="password" class="col-form-label">Password</label>
							<input type="password" class="form-control border" placeholder=" " name="pas" id="password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control border text-white" value="Login" name="sub10">
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
			<!-- nav -->
			<nav class="navbar navbar-expand-lg navbar-light py-4">
				<!-- logo -->
				<h1>
					<a class="navbar-brand" href="index.html">
						Disaster Handling
					</a>
				</h1>
				<!-- //logo -->
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- main nav -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item active  mr-lg-3">
							<a class="nav-link" href="index.html">Home
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
						<li class="nav-item mr-lg-3">
							<a class="nav-link" href="services.html">Services</a>
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
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info">
					<div class="agileinfo-logo">
						<h3>
							<span class="fab fa-linode text-center"></span>Disaster management
						</h3>
					</div>
					<h3 class="txt-w3_agile">We Help You to reduce risk</h3>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner bottom -->
	<section class="w3ls-bnrbtm py-5" id="w3layouts_bnrbtm">
		<!-- title description  -->
		<div class="container py-sm-5">
			<div class="row pt-lg-5">
				<div class="col-lg-5  bb-left">
					<span class="w3-line">what we do</span>
					<h3 class="agile-title">about disaster management</h3>
				</div>
				<div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
					<p>Disaster Management can be defined as the organization and management of 
                                            resources and responsibilities for dealing with all humanitarian aspects
                                            of emergencies, in particular preparedness, response and recovery in order
                                            to lessen the impact of disasters..Here we are helping people to get proper 
                                            advises about disaster.
                                        </p>
					
				</div>
			</div>
		</div>
		<!-- //title description  -->
	</section>
	<!-- //banner bottom -->
	<!-- about -->
	<section class="py-sm-5 py-3">
		<div class="container">
			<div class="agileabt-w3 py-lg-5">
				<div class="row my-md-5 mt-sm-5 my-4">
					<!-- about left grid -->
					<div class="col-lg-6 order-lg-0 order-1  mt-lg-0 mt-5">
						<div class="row">
							<div class="col-6 w3-ab">
								<div class="w3-ab-grid">
									<div class="w3-aicon p-lg-5 p-4">
										<i class="fas fa-chart-line"></i>
										<h4 class="my-3 text-capitalize text-dark">expenses</h4>
									</div>
								</div>
							</div>
							<div class="col-6 w3-ab">
								<div class="w3-ab-grid">
									<div class="w3-aicon p-lg-5 p-4">
										<i class="fab fa-magento"></i>
										<h4 class="my-3 text-capitalize text-dark">mortgage</h4>
									</div>
								</div>
							</div>
							<div class="col-6 mt-4 w3-ab">
								<div class="w3-ab-grid">
									<div class="w3-aicon  p-lg-5 p-4">
										<i class="fas fa-chart-pie"></i>
										<h4 class="my-3 text-capitalize text-dark">investements</h4>
									</div>
								</div>
							</div>
							<div class="col-6 mt-4 w3-ab">
								<div class="w3-ab-grid">
									<div class="w3-aicon p-lg-5 p-4">
										<i class="fab fa-accusoft"></i>
										<h4 class="my-3 text-capitalize text-dark">finance</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- about right grid -->
					<div class="col-lg-6 order-lg-1 order-0">
						<h3 class="agile-title text-lg-right">Financial Services Core Customer Centric Approach</h3>
						<div class="w3ls-abt">
							<img src="images/banner2.png" alt="" class="img-fluid" />
						</div>
					</div>
					<!-- //about right grid -->
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	<!-- video -->
	<section class="pb-md-5">
		<div class="container">
			<div class="agileabt-w3">
				<div class="row pb-5">
					<div class="col-lg-6 order-lg-0 order-1  mt-lg-0 mt-5">
						<h3 class="agile-title">30+ years of experiences</h3>
						<ul class="list-group mt-3">
							<li class="list-group-item border-0">
								<i class="fas fa-check mr-3"></i>Cras justo odio</li>
							<li class="list-group-item border-0">
								<i class="fas fa-check mr-3"></i>Dapibus ac facilisis in</li>
							<li class="list-group-item border-0">
								<i class="fas fa-check mr-3"></i>Morbi leo risus</li>
							<li class="list-group-item border-0">
								<i class="fas fa-check mr-3"></i>Porta ac consectetur ac</li>
							<li class="list-group-item border-0">
								<i class="fas fa-check mr-3"></i>Vestibulum at eros</li>
						</ul>
					</div>
					<div class="col-lg-6 grad_video p-sm-5 p-4  order-lg-1 order-0">
						<h3 class="agile-title text-white">get expertise advice and start saving!</h3>
						<!-- Button trigger modal -->
						<div class="button">
							<a href="#small-dialog1" class="play-icon popup-with-zoom-anim text-center mt-sm-5 mt-3">
								<i class="fas fa-play-circle pr-5 text-left"></i>play</a>
						</div>
						<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
							<div class="agileits_modal_body">
								<iframe src="https://player.vimeo.com/video/149659911"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //video -->
	<!-- team -->
	<section class="wthree-row py-5" id="team">
		<!-- team container -->
		<div class="team_bg_w3ls">
			<div class="container py-sm-5">
				<!-- title description -->
				<div class="row py-lg-5">
					<div class="col-lg-5  bb-left">
						<span class="w3-line">show case</span>
						<h3 class="agile-title">our team</h3>
					</div>
					<div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
						<p>Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius orci. Nulla accumsan
							ac elit in congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos Class aptent taciti
							sociosqu ad litora torquent p himenaeos.</p>
						<a class="btn btn-danger  mt-sm-4 text-capitalize scroll" href="#w3layouts_cs" role="button">read more</a>
					</div>
				</div>
				<!-- //title description -->
				<!-- team row -->
				<div class="row py-md-5 pt-5">
					<div class="col-lg-3 col-6 team-grids">
						<div class="our-team">
							<div class="pic">
								<img src="images/t2.jpg" alt="team member" class="img-fluid" />
							</div>
							<div class="content">
								<h3 class="title">Peter Johns</h3>
								<span class="post">Creative Director</span>
								<ul class="social">
									<li>
										<a href="#" class="fab fa-facebook-f"></a>
									</li>
									<li>
										<a href="#" class="fab fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="fab fa-linkedin"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 team-grids">
						<div class="our-team active">
							<div class="pic">
								<img src="images/t1.jpg" alt="team member" class="img-fluid" />
							</div>
							<div class="content">
								<h3 class="title">Kelli Smith</h3>
								<span class="post">Chairman</span>
								<ul class="social">
									<li>
										<a href="#" class="fab fa-facebook-f"></a>
									</li>
									<li>
										<a href="#" class="fab fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="fab fa-linkedin"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
						<div class="our-team">
							<div class="pic">
								<img src="images/t4.jpg" alt="team member" class="img-fluid" />
							</div>
							<div class="content">
								<h3 class="title">Peter Johns</h3>
								<span class="post">Executive Manager</span>
								<ul class="social">
									<li>
										<a href="#" class="fab fa-facebook-f"></a>
									</li>
									<li>
										<a href="#" class="fab fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="fab fa-linkedin"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
						<div class="our-team">
							<div class="pic">
								<img src="images/t3.jpg" alt="team member" class="img-fluid" />
							</div>
							<div class="content">
								<h3 class="title">Peter Johns</h3>
								<span class="post">HR Manager</span>
								<ul class="social">
									<li>
										<a href="#" class="fab fa-facebook-f"></a>
									</li>
									<li>
										<a href="#" class="fab fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="fab fa-linkedin"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- //team row -->
			</div>
		</div>
		<!-- //team container -->
	</section>
	<!-- //team -->
	<!-- case studies -->
	<section class="case_w3ls  py-5" id="w3layouts_cs">
		<div class="container py-sm-5">
			<!-- title description -->
			<div class="row py-lg-5">
				<div class="col-lg-5  bb-left">
					<span class="w3-line">case studies</span>
					<h3 class="agile-title">the new brand identity</h3>
				</div>
				<div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
					<p>Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius orci. Nulla accumsan
						ac elit in congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos Class aptent taciti
						sociosqu ad litora torquent p himenaeos.</p>
					<a class="btn btn-danger  mt-sm-4 text-capitalize" href="error.html" role="button">read more</a>
				</div>
			</div>
			<!-- //title description -->
			<!-- case studies row -->
			<div class="row pt-5">
				<div class="col-lg-4 col-md-6">
					<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-md-0 mt-4">
					<div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-lg-0 mt-4">
					<div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6  mt-4">
					<div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Eget Integer sit amet.</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- //case studies row -->
		</div>
	</section>
	<!-- //case studies -->
	<!-- footer top -->
	<section class="footerw3-top py-lg-5">
		<div class="container py-md-5">
			<!-- footer top row -->
			<div class="row py-5">
				<div class="col-md-4">
					<img src="images/f1.png" alt="" class="img-fluid">
					<h4 class="feed-title my-3">Email and Live chat
						<span>24/7</span>
					</h4>
					<p> ligula sed magna as ultriciesDonec rutrum congue leo eget.</p>
				</div>
				<div class="col-md-4 my-md-0 my-4">
					<img src="images/f2.png" alt="" class="img-fluid">
					<h4 class="feed-title my-3">any query or clarifiactions?
						<span>call us</span>
					</h4>
					<p class="mb-0">+ 10 000 12345 </p>
					<p>+ 10 000 12346 </p>
				</div>
				<div class="col-md-4">
					<img src="images/f3.png" alt="" class="img-fluid">
					<h4 class="feed-title my-3">creative thoughts
						<span>informatics</span>
					</h4>
					<p>Ras ultricies ligula sed magna Donec rutrum congue leo eget.</p>
				</div>

			</div>
			<!-- //footer top row -->
		</div>
	</section>
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
	<!--  magnific-popup  -->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		//script for magnific pop up (about section)
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
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