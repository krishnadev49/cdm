<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
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
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
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
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Pricing Tables</h2>
            <!--// main-heading -->

            <!-- Pricing tables1 -->
            <section class="pricing-tables">
                <h4 class="tittle-w3-agileits mb-4 mt-3">Pricing Tables Style1</h4>
                <div class="card-deck text-center row">
                    <div class="card box-shadow col-xl-3 col-md-6">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Basic</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>25
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6 my-lg-0 my-3">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Standard</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>59
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6 mt-lg-0 mt-3">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Expert</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>75
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Premium</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>90
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                </div>
                <!--//  Pricing tables1 -->
                <!-- Pricing tables2 -->
                <section class="pricing2 py-5 my-5 border-top border-bottom">
                    <h4 class="tittle-w3-agileits mb-4">Pricing Tables Style2</h4>
                    <div class="card-deck text-center row">
                        <div class="card box-shadow col-xl-3 col-md-6">
                            <div class="card-header">
                                <h4 class="py-md-4 py-xl-3 py-2 text-white text-white">Basic</h4>
                                <h5 class="card-title pricing-card-title text-white font-weight-bold">
                                    <span class="align-top">$</span>25
                                    <small>/ month</small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2">Advertising</li>
                                    <li class="py-2 my-2">Branding Services</li>
                                    <li class="py-2">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6 my-lg-0 my-3">
                            <div class="card-header">
                                <h4 class="py-md-4 py-xl-3 py-2 text-white">Standard</h4>
                                <h5 class="card-title pricing-card-title text-white font-weight-bold">
                                    <span class="align-top">$</span>59
                                    <small>/ month</small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2">Advertising</li>
                                    <li class="py-2 my-2">Branding Services</li>
                                    <li class="py-2">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6 mt-lg-0 mt-3">
                            <div class="card-header">
                                <h4 class="py-md-4 py-xl-3 py-2 text-white">Expert</h4>
                                <h5 class="card-title pricing-card-title text-white font-weight-bold">
                                    <span class="align-top">$</span>75
                                    <small>/ month</small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2">Advertising</li>
                                    <li class="py-2 my-2">Branding Services</li>
                                    <li class="py-2">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6">
                            <div class="card-header">
                                <h4 class="py-md-4 py-xl-3 py-2 text-white">Premium</h4>
                                <h5 class="card-title pricing-card-title text-white font-weight-bold">
                                    <span class="align-top">$</span>90
                                    <small>/ month</small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2">Advertising</li>
                                    <li class="py-2 my-2">Branding Services</li>
                                    <li class="py-2">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!--//  Pricing tables2 -->
                <!-- Pricing tables3 -->
                <section class="pricing3 mb-5">
                    <h4 class="tittle-w3-agileits mb-4">Pricing Tables Style3</h4>
                    <div class="card-deck text-center row">
                        <div class="card box-shadow col-xl-3 col-md-6">
                            <div class="card-header">
                                <h4 class="py-md-3 py-2 text-white text-white">Basic</h4>
                                <h5 class="card-title pricing-card-title text-white">
                                    $75
                                    <span class="d-block">Per Month</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2 text-white">Advertising</li>
                                    <li class="py-2 my-2 text-white">Branding Services</li>
                                    <li class="py-2 text-white">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price3-btn" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6 my-lg-0 my-3">
                            <div class="card-header">
                                <h4 class="py-md-3 py-2 text-white">Standard</h4>
                                <h5 class="card-title pricing-card-title text-white">
                                    $150
                                    <span class="d-block">Per Month</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2 text-white">Advertising</li>
                                    <li class="py-2 my-2 text-white">Branding Services</li>
                                    <li class="py-2 text-white">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price3-btn" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6 mt-lg-0 mt-3">
                            <div class="card-header">
                                <h4 class="py-md-3 py-2 text-white">Expert</h4>
                                <h5 class="card-title pricing-card-title text-white">
                                    $500
                                    <span class="d-block">Per Month</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2 text-white">Advertising</li>
                                    <li class="py-2 my-2 text-white">Branding Services</li>
                                    <li class="py-2 text-white">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price3-btn" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                            </div>
                        </div>
                        <div class="card box-shadow col-xl-3 col-md-6">
                            <div class="card-header">
                                <h4 class="py-md-3 py-2 text-white">Premium</h4>
                                <h5 class="card-title pricing-card-title text-white">
                                    $800
                                    <span class="d-block">Per Month</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="py-2 text-white">Advertising</li>
                                    <li class="py-2 my-2 text-white">Branding Services</li>
                                    <li class="py-2 text-white">Online Marketing</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary py-2 price3-btn" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!--//  Pricing tables3 -->
            </section>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="paragraph-agileits-w3layouts">Woohoo, you're reading this text in a modal!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Modal -->
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