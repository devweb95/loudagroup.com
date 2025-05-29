@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.headerci')


<!-- tpm-header-area start -->

    <!-- Start faq area  -->
    <div class="faq-area faq-style-two faq-bg-image-2 tmp-section-gap" style="background-image: url('{{ asset('assets/images/product/16.jpg') }}'); background-size: cover; background-position: center; min-height: 550px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-inner">
                        <div class="faq-content">
                            <div class="vedio-play vedio-play-large">

                                <div class="vedio-icone">
                                    
                                </div>

                            </div>

                            <div class="vedio-play vedio-play-large">

                                <div class="vedio-icone">
                                    <a class="video-play-button play-video" href="#">
                                        <span style="border-left-color: var(--color-primary);"></span>
                                    </a>
                                    <div class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>

                            </div>

                            <!-- video icon -->

                            <!-- video icon -->
                            <div class="title">
                                 
                            </div>
                            <div class="title"> </div>
                            <p class="description">
                                
                            </p>
                            <div class="title">Actualités de Louda</div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End faq area  -->

    <!-- faq area start -->
    <div class="tmp-faq-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-faq">
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/faq/03.png') }}" alt="business_faq">
                        </div>
                        <div class="row g-0 align-items-center" style="min-height: 400px;">
                            <div class="col-lg-5">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/product/491336506_604523495963552_2893066856121557783_n.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 pl--50 pl_sm--15">
                                <div class="faq-accordion faq-accordion-style-two">
                                    <div class="accordion" id="accordionExample">
                                        <div class="section-head text-align-left">
                                            <span class="subtitle color-gradiant">ACTUALITÉ</span>
                                            <h2 class="title split-collab">Louda renforce son offre</br>logistique et opérationnelle</h2>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingOne">
                                                <div class="accordion-button" data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                    
                                                    <div class="accordion-button-right">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="description text-justify">
                                                        Dans le cadre de son expansion au Burkina Faso, <strong>Louda Group</strong> consolide ses services avec le développement d’un modèle d’approvisionnement à source unique et la mise en service de nouveaux engins pour la location. Grâce à ces investissements, Louda propose désormais une couverture logistique plus étendue, une meilleure réactivité sur les sites miniers et une optimisation des délais de livraison. Cette évolution s’inscrit dans notre volonté d'accompagner nos partenaires industriels avec des solutions fiables, flexibles et adaptées aux réalités du terrain.
                                                    </p>                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingTwo">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <div class="accordion-button-left">
                                                    </div>
                                                    <div class="accordion-button-right">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingThree">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <div class="accordion-button-left">
                                                        
                                                        
                                                    </div>
                                                    <div class="accordion-button-right">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

   
      <!-- Tmp Blog Area Start  -->
      <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant">ACTUALITÉ</span>
                            <h2 class="title split-collab">Fils d'actualité</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                


                <div class="row g-5">
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
                                    <a href="#"><img src="{{ asset('assets/images/product/18.jpg') }}" alt="Business Consulting Blog"></a>
                                   
                                </div>
                                <div class="blog-content">
                                    
                                    <div class="blog-head">
                                        <span class="name">28/08/2023</span>
                                        <span class="designation">Orpaillage</span>
                                    </div>
                                    <div class="blog-body">
                                        <a href="#" class="title-area">
                                            <h4 class="title">Les femmes du secteur minier commencent le travail de reconversion.</h4>
                                        </a>
                                        <a class="btn-read-more" href="">
                                            <span class="read-more-text">Lire </span>
                                            <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="single-blog">
                            <div class="blog-inner">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/portfolio/bOyJENMk5Tz5UMwGdVvl.jpg') }}" alt="Business Consulting Blog"></a>
                                   
                                </div>
                                <div class="blog-content">
                                    
                                    <div class="blog-head">
                                        <span class="name">28/08/2023</span>
                                        <span class="designation">
                                            Embattled Avocet</span>
                                    </div>
                                    <div class="blog-body">
                                        <a href="#" class="title-area">
                                            <h4 class="title">Embattled Avocet achève la vente de ses actifs au Burkina Faso</h4>
                                        </a>
                                        <a class="btn-read-more" href="#">
                                            <span class="read-more-text">Lire</span>
                                            <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="single-blog">
                            <div class="blog-inner">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/portfolio/RYeirbSNridE0NoWSp6o.jpg') }}" alt="Business Consulting Blog"></a>
                                   
                                </div>
                                <div class="blog-content">
                                    
                                    <div class="blog-head">
                                        <span class="name">28/08/2023</span>
                                        <span class="designation">Mine</span>
                                    </div>
                                    <div class="blog-body">
                                        <a href="#" class="title-area">
                                            <h4 class="title">Au Côte d’Ivoire, des réquisitions d’or pour soutenir l’effort de guerre.</h4>
                                        </a>
                                        <a class="btn-read-more" href="#">
                                            <span class="read-more-text">Lire</span>
                                            <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Blog Area Start  -->


    @include('components.footerci')


   
   

@endsection