 <!-- tpm-header-area end -->

 <div id="side-hide">
        <div class="top-area">
            <a href="{{ route('index') }}" class="logo-area">
                <img src="{{ asset('assets/images/logo/LOGO@300x.png') }}" alt="logo">
            </a>
            <div class="close-icon-area">
                <div id="close-slide__main">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
        <div class="body">

            <div class="image-area-feature">
                <img src="{{ asset('assets/images/sidebar/01.jpg') }}" alt="sidebar">
            </div>
            <h5 class="title mt--30">Transforming your ideas into digital reality</h5>
            <p class="disc">
                Sed ut perspiciatis unde omnis natus error voluptatem santium doloremque laudantium, totam rem aperiam, eaque.
            </p>
            <div class="short-contact-area-side-collups">
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-solid fa-phone"></i>
                    <div class="information">
                        <span>Call Now</span>
                        <a href="#" class="number">+92 (8800) - 98670</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-light fa-envelope"></i>
                    <div class="information">
                        <span>Envoyez-nous un mail</span>
                        <a href="#" class="number">procurement@loudagroup.com</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <div class="information">
                        <span>Our Address</span>
                        <a href="#" class="number">Ouagadougou, BURKINA FASO</a>
                    </div>
                </div>
                <!-- single contact information end -->
            </div>
            <!-- social area start -->
            <ul class="social-icons solid-social-icons rounded-social-icons">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
            <!-- social area end -->
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">QUI SOMMES-NOUS</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('index') }}">Notre Groupe</a></li>
                            <li><a href="{{ route('index-two') }}">Notre objectif et nos principes</a></li>
                            <li><a href="{{ route('index-three') }}">Nos entreprises</a></li>
                            <li><a href="{{ route('index-four') }}">Direction</a></li>
                            <li><a href="{{ route('index-five') }}">Conseil d'administration</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="main">About Us</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="{{ route('service') }}">Service</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('service-details') }}">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="{{ route('blog') }}">Blog</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('blog-col-1') }}">Blog Col 1</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('blog-col-2') }}">Blog Col 2</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('blog-details') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="{{ route('appoinment') }}">Appoinment</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('project') }}">Project</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('projects-details') }}">Project Details</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('team') }}">Team</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('team-details') }}">Team Details</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('pricing') }}">Pricing</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('faq') }}">Faq</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('notFound') }}">404 Page</a></li>

                            <!-- <li class="has-droupdown third-lvl">
                            <a class="main" href="#">Team</a>
                            <ul class="submenu-third-lvl mm-collapse">
                                <li><a href="{{ route('team-1') }}"></a>Team One</li>
                                <li><a href="{{ route('team-2') }}"></a>Team Two</li>
                                <li><a href="{{ route('team-details') }}"></a>Team Details</li>
                            </ul>
                        </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- tpm-header-area end -->