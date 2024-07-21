<?php
include 'auth.php';

// Your page content here
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Account KYC</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>       
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/tooplate-clean-work.css" rel="stylesheet">

    </head>
     <body>

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-house-fill me-2"></i>
                            APS Makes It Amazing
                        </p>

                        <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                            <i class="bi-clock-fill me-2"></i>
                            <strong class="me-2">24/7</strong>Support
                        </p>

                        <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                         
                            <a href="mail: 110-220-9800" class="text-white">
                                care@amdocs.com
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="mainpage.php">
                    <span class="ms-2">Home</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Explore Accounts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
						<li class="nav-item">
							  <a class="nav-link logout-btn" href="logout.php">
								<i class="fa fa-sign-out-alt"></i> Logout
							  </a>
					    </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12 text-center mx-auto">
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>APS Accounts</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">TMobile</b>
                                    <b>AT&T</b>
                                    <b>VodaFone</b>
                                </span>
                            </h1>
                            <a class="custom-btn btn button button--atlas smoothscroll me-3" href="dashboard.php">
                                <span>Explore Accounts</span>
                            </a>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </section>


            <section class="intro-section" id="intro-section">
                <div class="container">
                    <div class="row justify-content-lg-center align-items-center">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Life is full of uncertainties. That's why you need a strong partner to rely on.<br></h2>

                            <p><a href="#">Our</a> commitment to 'Making It Amazing' is not just a saying; It defines how we operate and ensures that our customers can always be there for their end-users, no matter the <a rel="nofollow" " target="_blank">situation.</a> </p>
                        </div>

                        <div class="col-lg-6 col-12 custom-block-wrap">
                            <img src="images/2.jpg" class="img-fluid">

                    </div>
                </div>
				</div>
            </section>
        </main>


        <footer class="site-footer">
            <div class="container">
               <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Contact Us</h5>
                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: +1 314 212 7171" class="site-footer-link">
                                North America: +1 314 212 7171
                            </a>
					    <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: +44 20 872 72312" class="site-footer-link">
                                Europe, Middle East, Africa: +44 20 872 72312
                            </a>
                        </p>
						<p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: +971 9 77 63333" class="site-footer-link">
                                Israel: +971 9 77 63333
                            </a>
                        </p>
			            <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: +61 3 9835 3699" class="site-footer-link">
                                Asia Pacific: +61 3 9835 3699
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                care@amdocs.com
                            </a>
                        </p>
                    </div>
				  <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">Office</h5>

                            <strong class="d-block text-white mb-1">Amdocs DVCI</strong>

                            <p class="text-white mb-3">Tower 12, Magarpatta Inner Circle, Cybercity, Magarpatta, Hadapsar, Pune, Maharashtra 411028</p>
                        </div>
                    </div>
                </div>

            </div>
			 </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
