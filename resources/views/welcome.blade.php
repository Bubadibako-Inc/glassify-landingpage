<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Glassify App Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/logo-glassify.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0 d-flex align-items-center">
                    <!-- Brand Name -->
                    <h1 class="m-0">Glassify</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#feature" class="nav-item nav-link">Feature</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
            

            <div class="container-fluid bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Find the Perfect Glasses, Effortlessly</h1>
                            <h5 class="text-white pb-3 animated slideInDown">Choosing the right glasses can be overwhelming without proper guidance. Unlike generic e-commerce platforms, our solution simplifies the process and offers personalized recommendations tailored to your face shape for a seamless shopping experience.</h5>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="assets/img/Onboarding Page.png" alt="">
                                <img class="img-fluid" src="assets/img/Login Page.png" alt="">
                                <img class="img-fluid" src="assets/img/Search Page.png" alt="">
                                <img class="img-fluid" src="assets/img/Transaction Page.png" alt="">
                                <img class="img-fluid" src="assets/img/Customer Service Page.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">About App</h5>
                        <h1 class="mb-4">Discover Glassify: Personalized Glasses Shopping</h1>
                        <p class="mb-4">Glassify is a glasses e-commerce mobile application that provides personalized glasses recommendations based on the user’s face shape. By leveraging photo upload and automated suggestions, it simplifies the frame selection process, saving time and effort while enhancing the shopping experience.</p>
                        <p class="mb-4">Powered by image processing and machine learning, Glassify offers developers opportunities for feature expansion and market growth, delivering a more personalized and convenient solution for users.</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="assets/img/Pages.png" alt="Glassify App">
                    </div>
                </div>
            </div>
        </div>        
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-fluid py-5" id="feature">
            <div class="container py-5 px-lg-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">App Features</h5>
                    <h1 class="mb-5">Awesome Features</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-user-circle text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Face Shape Classification</h5>
                            <p class="m-0">Detects your face shape to recommend the best glasses frame for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-search text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Search & Filter</h5>
                            <p class="m-0">Find products based on your preferences with our advanced search and filter options.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-thumbs-up text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Recommendation</h5>
                            <p class="m-0">Get personalized product recommendations based on your preferences and browsing history.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-heart text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Wishlist</h5>
                            <p class="m-0">Save your favorite products to the wishlist for future purchases.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-history text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Transaction History</h5>
                            <p class="m-0">View your past transactions and order history in one place.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-user text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Profile</h5>
                            <p class="m-0">View and edit your personal information and update your settings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Screenshot Start -->
        <div class="container-fluid py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Screenshot</h5>
                        <h1 class="mb-4">Easy and Convenient Eyeglass Shopping Experience</h1>
                        <p class="mb-4">The Glassify app simplifies the process of selecting the perfect eyeglass frames that match your face shape. By uploading a photo, the app automatically provides frame recommendations tailored to your facial features, saving you time and effort while shopping for glasses.</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Upload a photo to get personalized frame recommendations</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Browse and purchase eyeglasses directly from the app</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Skip the visit to physical stores for a seamless shopping experience</p>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel" style="margin-top: 50px;">
                            <img class="img-fluid" src="assets/img/Onboarding Page.png" alt="Onboarding Page">
                            <img class="img-fluid" src="assets/img/Login Page.png" alt="Login Page">
                            <img class="img-fluid" src="assets/img/Search Page.png" alt="Search Page">
                            <img class="img-fluid" src="assets/img/Transaction Page.png" alt="Transaction Page">
                            <img class="img-fluid" src="assets/img/Customer Service Page.png" alt="Customer Service Page">
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Screenshot End -->

        <!-- Process Start -->
        <div class="container-fluid py-5">
            <div class="container py-5 px-lg-6" style="margin-bottom: 50px">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">How It Works</h5>
                    <h1 class="mb-5">3 Simple Steps</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-camera fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Upload Your Photo</h5>
                            <p class="mb-0">Upload a clear photo of your face. The app will analyze your face shape to provide the best eyeglass frame recommendations.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-search fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Browse & Choose Frames</h5>
                            <p class="mb-0">Browse through the recommended frames based on your face shape and personal preferences. You can filter results to find the perfect style.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-cart-plus fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Order & Enjoy</h5>
                            <p class="mb-0">Once you've found the perfect frames, you can purchase them directly through the app, with fast delivery straight to your door!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->

        <!-- Download Start -->
        <div class="container-fluid py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="assets/img/Pages.png" alt="App Screenshot">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Download</h5>
                        <h1 class="mb-4">Get Ready for the Future of Eyewear Shopping</h1>
                        <p class="mb-4">The Glassify app is coming soon! With our app, you can easily find the perfect eyeglass frames that suit your face shape and preferences. Stay tuned for the official release and be the first to experience the convenience of shopping for glasses from home!</p>
                        <div class="row g-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <a class="d-flex bg-primary-gradient rounded py-3 px-4">
                                    <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Coming Soon</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <a class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                    <i class="fab fa-google-play fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Coming Soon</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <h3 class="text-primary-gradient fw-medium">Try it Now</h3>
                            <p>Scan the QR code below to try our app directly!</p>
                            <div class="d-flex justify-content-center">
                                <img src="assets/img/qr-code.png" alt="QR Code" class="img-fluid" style="width: 250px; height: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Download End -->

        <!-- Contact Start -->
        <div class="container-fluid py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                    <h1 class="mb-5">Meet Our Team</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Our team is dedicated to providing the best experience for you. Here are the members of our team:</p>
                            <div class="row g-3 text-center">
                                <!-- Member 1 -->
                                <div class="col-md-3">
                                    <div class="team-member">
                                        <img src="assets/img/falah.jpg" alt="Falah" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                                        <h5 class="mb-2">Ahmad Khoirul Falah</h5>
                                        <p class="text-muted">UI/UX Designer & BackEnd Engineer</p>
                                    </div>
                                </div>
                                <!-- Member 2 -->
                                <div class="col-md-3">
                                    <div class="team-member">
                                        <img src="assets/img/azka.jpg" alt="Azka" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                                        <h5 class="mb-2">Azka Anasiyya Haris</h5>
                                        <p class="text-muted">Project Manager</p>
                                    </div>
                                </div>
                                <!-- Member 3 -->
                                <div class="col-md-3">
                                    <div class="team-member">
                                        <img src="assets/img/fadly.png" alt="Fadly" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                                        <h5 class="mb-2">Fadly Nugraha Jati</h5>
                                        <p class="text-muted">Flutter Developer</p>
                                    </div>
                                </div>
                                <!-- Member 4 -->
                                <div class="col-md-3">
                                    <div class="team-member">
                                        <img src="assets/img/hilmi.jpg" alt="Hilmi" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                                        <h5 class="mb-2">Hilmi Irfan Naafi'udin</h5>
                                        <p class="text-muted">Machine Learning</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <p>&copy; Glassify 2024, All Right Reserved. Designed By Bubadibako Inc.</p> 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>
</html>