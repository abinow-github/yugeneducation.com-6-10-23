<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Skepseis" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Yugen Education</title>
        <meta name="description" content="Yugen School of Accounting & Taxation aims to provide world class training for Global Accounting and Taxation qualifications and develop the professional Accountant of upcoming Days.">
		<meta name="keywords" content="accounting and financial courses in calicut, Accounting courses, GST Courses">
		
        <meta property="og:title" content="Best Accounting Training Institute and Courses in Calicut, Kerala" />
		<meta property="og:description" content="Yugen School of Accounting & Taxation aims to provide world class training for Global Accounting and Taxation qualifications and develop the professional Accountant of upcoming Days." />
		<meta property="og:url" content="http://yugeneducation.com/" />
		<meta property="og:site_name" content="Yugen Education" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
            <div class="header header-light head-shadow">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="index.html">
                                <img src="assets/img/logo.png" class="logo" alt="" />
                            </a>
                            <div class="nav-toggle"></div>
                            <div class="mobile_nav">
                                <ul>
                                    <li>
                                        <a href="tel:+914952962318" class="crs_yuo12 w-auto text-white theme-bg">
                                            <span class="embos_45"><i class="fas fa-phone mr-1"></i>Call Now</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <!-- <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index-2.html">Home 1</a></li>
									</ul>
								</li> -->
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown">
									<a>Courses</a>
									<ul class="dropdown-menu">
										<li><a href="mftg.html">MFTG Course</a></li>
                                        <li><a href="mfa.html">MFA Course</a></li>
										<li><a href="git.html">GIT Course</a></li>
										
										
									</ul>
								</li>
                                <li class="active"><a href="gallery.html">Gallery</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <!-- <li>
									<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
									</a>
								</li> -->
                                <li class="add-listing theme-bg">
                                    <a href="tel:+914952962318" class="text-white">Call Now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navigation -->
            <div class="clearfix"></div>
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->

            <!-- ============================ Page Title Start================================== -->
            <section class="page-title bg-cover" style="background:url(assets/img/banner-1.jpg)no-repeat;" data-overlay="8">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title text-light">Gallery</h1>
								<nav class="transparent">
									<ol class="breadcrumb p-0">
										<li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
										<li class="breadcrumb-item active theme-cl" aria-current="page">Gallery</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
            <!-- ============================ Page Title End ================================== -->

            <!-- ============================ Gallery Start ================================== -->
            <section id="gallery">
                <div class="container">
                    <div id="image-gallery">
                        <div class="row">
                            <?php
                            include("admin/root/db.php");
                                $sql ="SELECT * FROM gallery";
                                $result =$mysqli->query($sql);
                                if ($result->num_rows > 0){
                                    while ($row=$result -> fetch_assoc())
                                {
                                ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                                <div class="img-wrapper">
                                    <a href="admin/gallery/<?php echo $row ["image"]; ?>"><img src="admin/gallery/<?php echo $row ["image"]; ?>" class="img-responsive" /></a>
                                    <div class="img-overlay">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End image gallery -->
                </div>
                <!-- End container -->
            </section>
            <!-- ============================ Gallery End ================================== -->

			<!-- ============================ Gallery Start ================================== -->
            <section id="gallery">
                <div class="container">
                    <div id="image-gallery">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/f8SblPNN7bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/tRtPlTHDnls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/p3gbLKaenjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/IHn5Yk9Jbbk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/pwPhc0l6S6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb20">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/xGO9FsTN0ZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- End row -->

						<div class="row justify-content-center">
							<div class="col-lg-7 col-md-8 mt-2">
								<div class="text-center"><a href="https://www.youtube.com/channel/UCJJeE8A9jJMWBe7Lyz-D5Sw" class="btn btn-md theme-bg-light theme-cl">View More Videos</a></div>
							</div>
						</div>
                    </div>
                    <!-- End video gallery -->
                </div>
                <!-- End container -->
            </section>
            <!-- ============================ Gallery End ================================== -->
            <!-- ============================ Call To Action ================================== -->
            <section class="theme-bg call_action_wrap-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="call_action_wrap">
                                <div class="call_action_wrap-head">
                                    <h3>Do You Have Questions ?</h3>
                                    <span>We'll help you to grow your career and growth.</span>
                                </div>
                                <a href="contact.html" class="btn btn-call_action_wrap">Contact Us Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Call To Action End ================================== -->

            <!-- ============================ Footer Start ================================== -->
            <footer class="dark-footer skin-dark-footer style-2">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-lg-4 col-md-4">
                                <div class="footer_widget">
                                    <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />
                                    <p>Yugen School of Accounting & Taxation aims to provide world class training for Global Accounting and Taxation qualifications and develop the professional Accountant of upcoming Days.</p>
                                    <a href="assets/yugen.pdf" class="btn theme-bg btn-md text-white">Download Brochure</a>
                                </div>
                            </div>
                            
                            <div class="col-lg-7 col-md-7 ml-auto">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <div class="footer_widget">
                                            <h4 class="widget_title">Company</h4>
                                            <ul class="footer-menu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <div class="footer_widget">
                                            <h4 class="widget_title">Social</h4>
                                            <ul class="footer-menu">
                                                <li><a href="https://www.facebook.com/yugeneducation/">Facebook</a></li>
                                                <li><a href="https://www.instagram.com/yugeneducation/">Instagram</a></li>
                                                <li><a href="https://www.youtube.com/channel/UCJJeE8A9jJMWBe7Lyz-D5Sw">Youtube</a></li>
                                                <li><a href="https://wa.me/919961882044">Whatsapp</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="footer_widget">
                                            <h4 class="widget_title">Admin Office</h4>
                                            <ul class="footer-menu">
                                                <li>Yugen Education, Mihraj Shopping Centre, Near Bypass Junction, Perumanna (PO), Kozhikode - 673019</li>
                                                <li><a href="tel: +914952962318">+914952962318</a></li>
                                                <li><a href="tel: +919961882044">+919961882044</a></li>
                                                <li><a href="mailto: yugeneducations@gmail.com"> yugeneducations@gmail.com</a></li>
                                            </ul>
                                        </div>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 text-center">
                                <p class="mb-0">© 2023 Yugen Education. Powered By <a href="https://theleograph.com/">The Leograph</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ============================ Footer End ================================== -->
            
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/daterangepicker.js"></script>
        <script src="assets/js/summernote.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        


<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919961882044", // WhatsApp number
            call: "+914952962318", // Call phone number
            call_to_action: "Contact us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

    </body>
</html>
