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

        <title>Contact Us</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">
		

    </head>
    
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

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0">Contact</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
				</div>
            </section>
         

            <section class="contact-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="container text-center">
                            <h2 class="my-3">We're happy to help</h2>


                            <div class="contact-info bg-white shadow-lg">
                                <h3 class="mb-4">Contact Information</h3>

                                <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: 110-220-9800">
                                        North America: +1 314 212 7171
                                    </a>
                                </h5>
								 <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: 110-220-9800">
                                        Europe, Middle East, Africa: +44 20 872 72312
                                    </a>
                                </h5>
								 <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: 110-220-9800">
                                        Israel: +971 9 77 63333
                                    </a>
                                </h5>
								 <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: 110-220-9800">
                                        Asia Pacific: +61 3 9835 3699
                                    </a>
                                </h5>
								

                                <h5 class="d-flex">
                                    <i class="bi-envelope-fill custom-icon me-3"></i>

                                    <a href="mailto:info@company.com">
                                        care@amdocs.com
                                    </a>
                                </h5>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
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
