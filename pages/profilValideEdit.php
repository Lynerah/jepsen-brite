<?php
session_start();
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=jepsenBrite;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
        if(isset($_SESSION['PersonId'])) {
            $requser = $bdd->prepare("SELECT * FROM persons WHERE PersonId = ?");
            $requser->execute(array($_SESSION['PersonId']));
            $user = $requser->fetch();

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="../images/favicon.ico">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="../css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="../css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="../css/owl.theme.default.min.css"/> 
        <!-- Main css -->
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/styleProfil.css">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">Landrick<span class="text-primary">.</span></a>
                </div>                 
                <div class="buy-button">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html">Saas</a></li>
                                        <li><a href="index-agency.html">Agency</a></li>
                                        <li><a href="index-apps.html">Application</a></li>
                                        <li><a href="index-studio.html">Studio</a></li>
                                        <li><a href="index-business.html">Business</a></li>
                                        <li><a href="index-modern-business.html">Modern Business</a></li>
                                        <li><a href="index-hotel.html">Hotel</a></li>
                                        <li><a href="index-marketing.html">Marketing</a></li>
                                        <li><a href="index-enterprise.html">Enterprise </a></li>
                                        <li><a href="index-coworking.html">Coworking</a></li>
                                        <li><a href="index-cloud-hosting.html">Cloud Hosting</a></li>
                                        <li><a href="index-event.html">Event</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="index-course.html">Course </a></li>
                                        <li><a href="index-personal.html">Personal </a></li>
                                        <li><a href="index-single-product.html">Product </a></li>
                                        <li><a href="index-portfolio.html">Portfolio </a></li>
                                        <li><a href="index-services.html">Service </a></li>
                                        <li><a href="index-payments.html">Payments </a></li>
                                        <li><a href="index-crypto.html">Cryptocurrency </a></li>
                                        <li><a href="index-software.html">Software </a></li>
                                        <li><a href="index-job.html">Job <span class="badge badge-danger rounded"> v1.6 </span> </a></li>
                                        <li><a href="index-customer.html">Customer <span class="badge badge-danger rounded"> v1.6 </span> </a></li>
                                        <li><a href="index-onepage.html">Saas <span class="badge badge-warning rounded ml-2">Onepage</span></a></li>
                                        <li><a href="index-rtl.html">RTL Version <span class="badge badge-primary rounded ml-2">RTL</span></a></li>
                                    </ul>
                                </li>   
                            </ul>
                        </li>
        
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html"> About Us</a></li>
                                <li><a href="page-services.html">Services</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-team.html"> Team</a></li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Account <span class="badge badge-danger rounded"> v1.6 </span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-profile.html">Profile <span class="badge badge-primary rounded">New</span></a></li>
                                        <li><a href="page-profile-edit.html">Account Setting <span class="badge badge-primary rounded">New</span></a></li>
                                        <li><a href="page-invoice.html">Invoice <span class="badge badge-primary rounded">New</span></a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Careers <span class="badge badge-success rounded"> Added </span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-jobs.html">Jobs</a></li>
                                        <li><a href="page-job-detail.html">Job Detail</a></li>
                                        <li><a href="page-job-apply.html">Job Apply</a></li>
                                        <li><a href="page-job-company.html">Company <span class="badge badge-success rounded"> New </span></a></li>
                                        <li><a href="page-job-candidate.html">Candidate <span class="badge badge-success rounded"> New </span></a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-blog.html">Blog Grid</a></li>
                                        <li><a href="page-blog-sidebar.html">Blog with Sidebar</a></li>
                                        <li><a href="page-blog-detail.html">Blog Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Works</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-work.html">Works Grid</a></li>
                                        <li><a href="page-work-detail.html">Work Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> User </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-signup.html">Signup</a></li>
                                        <li><a href="page-recovery-password.html">Recovery Password</a></li>
                                        <li><a href="page-cover-login.html">Login 2</a></li>
                                        <li><a href="page-cover-signup.html">Signup 2</a></li>
                                        <li><a href="page-cover-re-password.html">Recovery Password 2</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html">Terms of Services</a></li>
                                        <li><a href="page-privacy.html">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html">Coming Soon</a></li>
                                        <li><a href="page-comingsoon2.html">Coming Soon Two </a></li>
                                        <li><a href="page-maintenance.html">Maintenance</a></li>
                                        <li><a href="page-error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-contact-detail.html">Contact Detail </a></li>
                                        <li><a href="page-contact-one.html">Contact One </a></li>
                                        <li><a href="page-contact-two.html">Contact Two </a></li>
                                        <li><a href="page-contact-three.html">Contact Three </a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html">Documentation </a></li>
                                <li><a href="changelog.html">Changelog </a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="widget.html">Widget <span class="badge badge-success rounded"> Added </span></a></li>
                            </ul>
                        </li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-half bg-light">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="page-next-level">
                                    <h4 class="title"> Account Setting </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Pages</a></li> 
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Account</a></li> 
                                       
                                    </ul>
                                </div>
                            </div>  <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

       <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-4 rounded shadow">
                            <h5 class="text-md-left text-center">Personal Detail :</h5>

                            <div class="mt-3 text-md-left text-center d-sm-flex">
                                <img src="../images/client/05.jpg" class="avatar float-md-left avatar-medium rounded-pill shadow mr-md-4" alt="">
                                
                                <div class="mt-md-4 mt-3 mt-sm-0">
                                    <a href="javascript:void(0)" class="btn btn-primary mt-2">Change Picture</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2">Delete</a>
                                </div>
                            </div>

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>First Name</label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input name="name" id="first" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Last Name</label>
                                            <i class="mdi mdi-account-plus ml-3 icons"></i>
                                            <input name="name" id="last" type="text" class="form-control pl-5" placeholder="Last Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email</label>
                                            <i class="mdi mdi-email ml-3 icons"></i>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div> 
                                    </div><!--end col-->
                                    
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Description</label>
                                            <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Description :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save Changes">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->

                            
                            <div class="row">
                                
                                <div class="col-md-6 mt-4 pt-2"> 
                                    <h5>Change password :</h5>
                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Old password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Old password" required="">
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>New password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="New password" required="">
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Re-type New password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Re-type New password" required="">
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-lg-12 mt-2 mb-0">
                                                <button class="btn btn-primary">Save password</button>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile Setting End -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a class="logo-footer" href="#">Landrick<span class="text-primary">.</span></a>
                        <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Company</h4>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                            <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                            <li><a href="page-work.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                            <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                            <li><a href="page-blog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                            <li><a href="page-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Usefull Links</h4>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                            <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                            <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                            <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Newsletter</h4>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe form-group position-relative">
                                        <label>Write your email <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-email ml-3 icons"></i>
                                        <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary rounded w-100" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
<?php
}
?>
        <hr>
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-success">Shreethemes</a>.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled payment-cards text-sm-right mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="../images/payments/american-ex.png" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="../images/payments/discover.png" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="../images/payments/master-card.png" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="../images/payments/paypal.png" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="../images/payments/visa.png" title="Visa" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="../js/owl.carousel.min.js "></script>
        <script src="../js/owl.init.js "></script>
        <!-- Main Js -->
        <script src="../js/app.js"></script>
    </body>
</html>
<?php   
}else{
    header('Location: page-login.php');
}
?>