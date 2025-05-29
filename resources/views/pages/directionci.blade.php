
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
    <div class="breadcrumb-area bg_image tmp-section-gap breadcrumb-bg position-relative" style="background-image: url('{{ asset('assets/images/product/direction.jpg') }}'); background-size: cover; background-position: center; min-height: 550px;">
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
                
                <a href="{{ route('notre_group') }}" class="text-white text-decoration-none">DIRECTION</a>
            </li>
        </ul>
    </div>

    
    

    <!-- Service -->
    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business_Consulting_services">
                            <span>DIRECTIONS</span>
                        </div>
                        <h2 class="title split-collab">Membres de la direction de Louda Côte d’Ivoire</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                       
                        <img src="{{ asset('assets/images/team/dg.jpg') }}" alt="Corporate team">
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <h6 class="name">Clade Owen</h6>
                                <div class="designation">CEO &amp; Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                       
                        <img src="{{ asset('assets/images/team/dg.jpg') }}" alt="Corporate team">
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <h6 class="name">Clade Owen</h6>
                                <div class="designation">CEO &amp; Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-team">
                       
                        <img src="{{ asset('assets/images/team/dg.jpg') }}" alt="Corporate team">
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <h6 class="name">Clade Owen</h6>
                                <div class="designation">CEO &amp; Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('components.footerci')
    <!-- End Footer Area  -->
   

@endsection

