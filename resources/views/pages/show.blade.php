<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revetive</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-inline-block">
                            <span class="mai-mail fg-primary"></span> <a
                                href="mailto:contact@mail.com">contact@mail.com</a>
                        </div>
                        <div class="d-inline-block ml-2">
                            <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+0011223495</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right d-none d-md-block">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-youtube"></span></a>
                            <a href="#"><span class="mai-logo-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .top-bar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a href="index" class="navbar-brand">Reve<span class="text-primary">Tive.</span></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                        <li class="nav-item">
                            <a href="../" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="../services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="../portfolio" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item active">
                            <a href="../blog" class="nav-link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="../contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- .container -->
        </nav> <!-- .navbar -->
    </header>

    <main>
        <div class="page-section pt-4">
            <div class="container">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-4">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $article->exerpt }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrap">
                            <div class="post-thumbnail">
                                <img src="../assets/img/bg_image_1.jpg" alt="">
                            </div>
                            <h1 class="post-title">{{ $article->title }}</h1>
                            <div class="post-meta">
                                <div class="post-author">
                                    <span class="text-grey">By</span> <a href="#">Admin</a>
                                </div>
                                <span class="gap">|</span>
                                <div class="post-date">
                                    <a href="#">{{ $article->created_at }}</a>
                                </div>
                                <span class="gap">|</span>
                                <div>
                                    <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>
                                </div>

                            </div>
                            <div class="post-content">
                                <p>{{ $article->body }}</p>

                                <div class="post-tags">
                                    <p class="mb-2">Tags:</p>
                                    <a href="#" class="tag-link">LifeStyle</a>
                                    <a href="#" class="tag-link">Food</a>
                                    <a href="#" class="tag-link">Coronavirus</a>
                                </div>
                            </div>
                        </div> <!-- .blog-single-wrap -->
                    </div>


                </div>

            </div>
        </div> <!-- .container -->
        </div> <!-- .page-section -->
    </main>


    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-3">
                    <h3>Reve<span class="fg-primary">Tive.</span></h3>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Contact Information</h5>
                    <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                    <p>Email: example@mail.com</p>
                    <p>Phone: +00 112323980</p>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">News & Feed</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Newsletter</h5>
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                    </form>
                </div>
            </div>

            <hr>

            <div class="row mt-4">
                <div class="col-md-6">
                    <p>Copyright 2020. This template designed by <a href="https://macodeid.com">MACode ID</a></p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="sosmed-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                        <a href="#"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
