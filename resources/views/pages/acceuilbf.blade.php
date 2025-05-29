@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.headerbf')

    <!-- Slider -->
    @include('pages.sliderbf')
    <!-- Slider end -->
    @include('pages.aboutbf')
    
    <!-- Service -->
    @include('pages.services')

    <!-- REALISATION -->
    @include('pages.realisation')
    <!-- REALISATION end -->

     <!-- clients Area  -->
     @include('pages.clients')

    <!-- Start Footer Area  -->
    
    @include('components.footerbf')
    <!-- End Footer Area  -->
   

@endsection

