@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.headerci')

    <!-- Slider -->
    @include('pages.sliderci')
    <!-- Slider end -->
    @include('pages.aboutci')
    
    <!-- Service -->
    @include('pages.services')

    <!-- REALISATION -->
    @include('pages.realisation')
    <!-- REALISATION end -->

     <!-- clients Area  -->
     @include('pages.clients')

    <!-- Start Footer Area  -->
    
    @include('components.footerci')
    <!-- End Footer Area  -->
   

@endsection

