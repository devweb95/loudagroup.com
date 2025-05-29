@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.headerci')

    <!-- Start Breadcrumb area  -->
    <div class="breadcrumb-area bg_image tmp-section-gap breadcrumb-bg position-relative" style="background-image: url('{{ asset('assets/images/product/15.jpg') }}'); background-size: cover; background-position: center; min-height: 550px;">
        <!-- Surcouche opaque -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4); z-index: 1;"></div>
      
        <!-- Contenu par-dessus -->
        <div class="container position-relative" style="z-index: 2;">
          <div class="row">
            <div class="col-lg-6">
              <!-- Ton contenu ici -->
            </div>
          </div>
        </div>
      </div>
      
    
    

    <div class="text-white py-1 px-4" style="
    background-color: rgba(33, 112, 184, 0.85); 
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    ">
        <ul class="list-inline m-0">
            <li class="list-inline-item">
                <a href="/" class="text-white text-decoration-none">ACCUEIL</a>
            </li>
            <li class="list-inline-item text-white">
                <i class="fa-solid fa-angle-right text-white mx-2"></i>
                
                <a href="{{ route('notre_group') }}" class="text-white text-decoration-none">LOUDA SERVICES</a>
            </li>
        </ul>
    </div>

     <!-- REALISATION -->
    <div class="tmp-product-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">PRODUIT DE LOUDA SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Plongez au cœur de l’innovation avec les produits</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <!-- product swiper area start -->
                    <div class="product-swiper-area-one">

                        <div class="swiper mySwiper-portfolio-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Bulldozers.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title">Bulldozers</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Camions bennes.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title">Camions bennes</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                    
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Chargeuses sur pneus.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title">Chargeuses</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Compacteurs pour le compactage  des sols et routes_.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title">Compacteurs pour le compactage</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Niveleuses.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title">Niveleuses</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        
                                        <img src="{{ asset('assets/images/product/RECO FÉVRIER LOUDA-Tractopelles.png') }}" alt="corporate_business">

                                        <div class="inner-content">
                                            <h5 class="title"> Tractopelles</h5>
                                            <span class="designation"></span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
                            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
                        </div>
                    </div>
                    <!-- product swiper area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- REALISATION end -->


    <div class="position-relative ">
        <div class="text-white fw-bold fs-3 py-3 px-5 w-100 position-relative text-center"
            style="background-color: rgba(33, 112, 184, 0.85);">
            <span>
                📄 CLIQUEZ ICI POUR TÉLÉCHARGER NOTRE CATALOGUE LOUDA INDUSTRY
            </span>
            <a href="{{ asset('storage/catalogue.pdf') }}" download class="stretched-link"></a>
        </div>
    </div>

    <style>
        .scrolling-wrapper {
        width: 100%;
        }
    
        .scrolling-text {
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        position: relative;
        }
    
        .scrolling-text span {
        display: inline-block;
        padding-left: 100%;
        animation: scroll-left 10s linear infinite;
        }
    
        @keyframes scroll-left {
        0% {
            transform: translateX(0%);
        }
        100% {
            transform: translateX(-100%);
        }
        }
    
        .stretched-link::after {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        content: "";
        }
    
        a.text-decoration-none:hover {
        text-decoration: none;
        cursor: pointer;
        }
    </style>
  
  
      
    

    
    @include('pages.clients')
    
    
    @include('components.footerci')
    <!-- End Footer Area  -->
   

@endsection

