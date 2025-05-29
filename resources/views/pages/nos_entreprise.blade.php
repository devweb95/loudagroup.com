@extends('layouts.layout1')
@extends('layouts.slide1')
@php
    $title = 'Les Entreprises de LOUDA';
    $subtitle = 'Nos Entreprises';
@endphp


@section('content')

<!-- tpm-header-area start -->
    

 
    <!-- tpm-header-area end -->

    @include('pages.ce_que_nous_faison')
    
    <!-- Service -->
    <div class="service-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business_Consulting_services">
                            <span>NOS Entreprises dans le mondes</span>
                        </div>
                        <h2 class="title split-collab">LOUDA pocède plusieurs filiale dans le monde</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <!--
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-6.svg') }}" alt="corporate_Business_Services_agency">
                            </div>
                            <div class="content">
                                <h2 class="title">Precision Build Solutions</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-1.svg') }}" alt="corporate_Business_Services_agency">

                            </div>
                            <div class="content">
                                <h2 class="title">Elite Construction Care</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-2.svg') }}" alt="corporate_Business_Services_Agency">

                            </div>
                            <div class="content">
                                <h2 class="title">Masterful Buildcraft</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-7.svg') }}" alt="corporate_Business_Services_agency">
                            </div>
                            <div class="content">
                                <h2 class="title">BuildWise Elite Builders</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-8.svg') }}" alt="corporate_Business_Services_agency">

                            </div>
                            <div class="content">
                                <h2 class="title">ApexConstruct Expert Team</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner agency-service">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/agency-9.svg') }}" alt="corporate_Business_Services_Agency">

                            </div>
                            <div class="content">
                                <h2 class="title">BuildMaven Building</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-two"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details') }}" class="over_link"></a>
                        </div>
                    </div>
                -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/blog/burkina.png') }}" alt="Business Consulting Blog"></a>
                            
                            </div>
                            <div class="blog-content">
                                
                                <div class="blog-body">
                                    <a href="{{ route('index') }}" class="title-area">
                                        <h4 class="title">Louda Burkina Faso</h4>
                                    </a>
                                    <p class="description">
                                        Spécialisée dans le commerce international, Louda Burkina Faso relie les marchés locaux aux opportunités mondiales. Grâce à notre expertise et à un réseau solide, nous proposons des produits de qualité et des solutions adaptées aux besoins de nos partenaires.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Lire la suite</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-6 col-12"> <!-- ~16.6% en grand écran -->
 
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/blog/cote.png') }}" alt="Business Consulting Blog"></a>
                            
                            </div>
                            <div class="blog-content">
                                
                                <div class="blog-body">
                                    <a href="{{ route('index') }}" class="title-area">
                                        <h4 class="title">Louda Côte d’Ivoire
                                        </h4>
                                    </a>
                                    <p class="description">
                                        Louda Côte d’Ivoire œuvre dans le négoce, le courtage et le commerce international. Nous connectons le marché ivoirien aux échanges mondiaux en offrant des services sur mesure et une expertise reconnue.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Lire la suite</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
    </div>

    @include('pages.clients')

@endsection