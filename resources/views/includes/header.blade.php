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

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a href="/" class="navbar-brand">Reve<span class="text-primary">Tive.</span></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                        <li class="{{ Request::path() === '/' ? 'active' : '' }}">
                            <a href="/" accesskey="1" class="nav-link">Home</a>
                        </li>
                        <li class="{{ Request::path() === 'about' ? 'active' : '' }}">
                            <a href="about" accesskey="2" class="nav-link">About</a>
                        </li>
                        <li class="{{ Request::path() === 'services' ? 'active' : '' }}">
                            <a href="services" accesskey="3" class="nav-link">Services</a>
                        </li>
                        <li class="{{ Request::path() === 'project' ? 'active' : '' }}">
                            <a href="project" accesskey="4" class="nav-link">Projects</a>
                        </li>
                        <li class="{{ Request::path() === 'blog' ? 'active' : '' }}">
                            <a href="blog" accesskey="5" class="nav-link">Blog</a>
                        </li>
                        <li class="{{ Request::path() === 'contact' ? 'active' : '' }}">
                            <a href="contact" accesskey="6" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- .container -->
        </nav> <!-- .navbar -->
