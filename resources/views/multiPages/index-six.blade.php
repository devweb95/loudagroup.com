@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.header')

    <!-- Slider -->
    @include('pages.slider')
    <!-- Slider end -->
    @include('pages.about')
    
    <!-- Service -->
    @include('pages.services')

    <!-- REALISATION -->
    @include('pages.realisation')
    <!-- REALISATION end -->

     <!-- clients Area  -->
     @include('pages.clients')

    <!-- Start Footer Area  -->
    
    @include('components.footer')
    <!-- End Footer Area  -->
   

@endsection

