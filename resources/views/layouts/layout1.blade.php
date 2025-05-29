<!DOCTYPE html>
<html lang="en">

<x-head/>

<body @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': '');@endphp>

    <!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header-four header--sticky">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                <p class="left-top" href="mailto:procurement@loudagroup.com"><i class="fa-light fa-envelope"></i> procurement@loudagroup.com</p>
                            
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">Ouagadougou, BURKINA FASO</a>
                                </div>
                               
                            </div>
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Suivez-nous sur</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mida-area style-two ">
                        <div class="logo-area-start">
                           
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/LOGO@300x.png') }}" alt="logo" width="150" height="auto">

                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                            <x-menuList/>
                        </div>
                        <!-- <a href="#" class="tmp-btn btn-primary">Get Consulting</a> -->
                        <div class="actions-area">

                            <a href="mailto:procurement@loudagroup.com" class="tmp-btn btn-primary">Obtenir Un Devis</a>
                            <!-- <div class="menu-button" id="search">
                        <i class="fa-light fa-grid-2"></i>
                        </div> -->
                            <div class="tmp-side-collups-area" id="side-collups">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#fff"></rect>
                                    <rect y="7" width="20" height="2" fill="#fff"></rect>
                                    <rect width="20" height="2" fill="#fff"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->

  
    <!-- End Breadcrumb area  -->
    <!-- End Breadcrumb area  -->

    @yield('content')

    <x-footer/>

    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10" data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>

    <x-loader/>

   <x-scripts/>

</body>

</html>