@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.headerbf')

    <!-- Start Breadcrumb area  -->
   
    <div class="breadcrumb-area tmp-section-gap breadcrumb-bg position-relative" style="background-image: url('{{ asset('assets/images/product/08.png') }}'); background-size: cover; background-position: center; min-height: 550px;">
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
                
                <a href="{{ route('notre_group') }}" class="text-white text-decoration-none">NOTRE GROUPE</a>
            </li>
        </ul>
    </div>

   
    <!-- Script d'initialisation -->
    

    @include('pages.ce_que_nous_faison')
    @include('pages.clients')
    
    @include('components.footerbf')
    <!-- End Footer Area  -->
   

@endsection

