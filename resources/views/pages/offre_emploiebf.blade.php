@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')
<x-sidebar/>
<!-- tpm-header-area end -->
@include('components.headerbf')

<!-- Start Breadcrumb area  -->
<div class="breadcrumb-area bg_image tmp-section-gap breadcrumb-bg position-relative" style="background-image: url('{{ asset('assets/images/product/19.jpg') }}'); background-size: cover; background-position: center; min-height: 550px;">
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
            
            <a href="{{ route('offre_emploie') }}" class="text-white text-decoration-none">NOS OFFRES D'EMPLOIE</a>
        </li>
    </ul>
</div>


<div class="tpm-services-process-area tmp-section-gap bg-working-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head">
                    <div class="section-sub-title center-title">
                        <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                        <span class="subtitle">NOS OFFRES D'EMPLOI</span>
                    </div>
                    <h2 class="title split-collab">Découvrez nos offres d’emploi</h2>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                            <a href="#"><img src="{{ asset('assets/images/product/20.png') }}" alt="Business consulting services"></a>
                            <div class="number-bg-round">
                                <span>01</span>
                            </div>
                        </div>
                        <div class="services-content services-content-style-1 text-center">
                            <h5 class="title">Ingénieur Géologue</h5>
                            <p class="description text-justify">
                                Supervise les campagnes d'exploration, analyse les données géologiques et identifie les zones exploitables de manière sécurisée.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                            <a href="#"><img src="{{ asset('assets/images/product/21.png') }}" alt="Business consulting services"></a>
                            <div class="number-bg-round">
                                <span>02</span>
                            </div>
                        </div>
                        <div class="services-content services-content-style-1 text-center">
                            <h5 class="title">Technicien Maintenance</h5>
                            <p class="description text-justify">
                                Assure l’entretien, la réparation et le bon fonctionnement des équipements mécaniques et électriques du site minier.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                            <a href="#"><img src="{{ asset('assets/images/product/22.png') }}" alt="Business consulting services"></a>
                            <div class="number-bg-round">
                                <span>03</span>
                            </div>
                        </div>
                        <div class="services-content services-content-style-1 text-center">
                            <h5 class="title">Conducteur d’Engins</h5>
                            <p class="description text-justify">
                                Opère des machines lourdes (chargeuses, pelles hydrauliques, camions bennes) pour l'extraction et le transport des matériaux.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@include('components.footerbf')
<!-- End Footer Area  -->

@endsection