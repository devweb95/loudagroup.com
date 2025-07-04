@extends('layouts.layout2')


@php

    $bodyClass='index-five';

@endphp

@section('content')

 <!-- tpm-header-area start -->
    

    <x-sidebar/>
    <!-- tpm-header-area end -->
    @include('components.header')

    <!-- Start Breadcrumb area  -->
    <div class="breadcrumb-area bg_image tmp-section-gap breadcrumb-bg position-relative" style="background-image: url('{{ asset('assets/images/product/black-man-using-walkie-talkie-container-terminal-industrial-worker-is-controlling-loading.jpg') }}'); background-size: cover; background-position: center; min-height: 550px;">
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
                
                <a href="{{ route('contact') }}" class="text-white text-decoration-none">CONTACT</a>
            </li>
        </ul>
    </div>

    
    <h1 class="tmp-section-gap"style="color: #2170b8; text-align: center;">BURKINA FASO</h1>
    <section class="contact-page-wrap section-padding ">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12" onclick="window.location.href='mailto:contactbf@loudagroup.com'" style="cursor: pointer;">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Adresse email</h4>
                                <span>Contactez nous par email</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <!--  <p> <a href="mailto:contactbf@loudagroup.com">contactbf@loudagroup.com</a> </p> -->

                                <p> <a href="mailto:contactbf@loudagroup.com">contactbf@loudagroup.com</a>
                                
                        
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12" onclick="window.location.href='tel:+22603140322'" style="cursor: pointer;">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Numéro de téléphone</h4>
                                <span>Appelez nous 24h/24</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>
                                    <a class="contact-info" href="tel:+22603140322">
                                        <i class="fas fa-phone-alt fa-lg"></i> &nbsp;  &nbsp;+22603140322
                                    </a>
                                    &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;
                                    <a class="contact-info" href="https://wa.me/+22603140322" target="_blank">
                                        <i class="fab fa-whatsapp fa-2x text-success"></i>&nbsp; +22603140322
                                    </a>
                                </p>
                            
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right "></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{--
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-contact-card card3">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="title">
                                    <h4>Adresse</h4>
                                    <span>Retrouvez nous à :</span>
                                </div>
                            </div>
                            <div class="bottom-part">                            
                                <div class="info">
                                    <p>{{}} </p>
                <!-- <p>New York, US</p> -->
            </div>
            <div class="icon">
                <i class="fal fa-arrow-right"></i>
            </div>
        </div>
        </div>
        </div>
        --}}
        </div>

        {{--
        <div class="row pt-5">
            <div class="block-contents mb-30 pt-60">
                <div class="section-title text-center">
                    <h5 class="text-center text-normal">Laissez un message</h5>
                    <span class="text-normal">remplir le formulaire</span>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form class="row needs-validation" id="contact-form" method="POST" action="{{ route('message_submit') }}">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="fname" class="text-normal">Nom complet<span class="text-danger">*</span></label>
                                <input type="text" id="fname" name="name" placeholder="Entrez votre nom" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email" class="text-normal">Adresse email<span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Entrez votre mail" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone" class="text-normal">Téléphone</label>
                                <input type="text" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subject" class="text-normal">Sujet<span class="text-danger">*</span></label>
                                <input type="text" id="subject" name="subject" placeholder="Entrez le sujet" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="message" class="text-normal">Votre message<span class="text-danger">*</span></label>
                                <textarea id="message" name="message" placeholder="Entrez le message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 text-center">
                            <input class="submit-btn" type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        --}}

        <div class="row pt-5">

            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jo’Fé Digital&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/"></a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none ;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        width: 100% ;
                        height: 400px ;
                    }
                </style>
            </div>
        </div>

        </div>
    </section>

    <h1 class="tmp-section-gap"style="color: #2170b8; text-align: center;">COTE D'IVOIRE</h1>
    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12" onclick="window.location.href='mailto:contactbf@loudagroup.com'" style="cursor: pointer;">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Adresse email</h4>
                                <span>Contactez nous par email</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p> <a href="mailto:contactci@loudagroup.com">contactci@loudagroup.com</a> </p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12" onclick="window.location.href='tel:+2250708000110'" style="cursor: pointer;">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Numéro de téléphone</h4>
                                <span>Appelez nous 24h/24</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>
                                    <a class="contact-info" href="tel:+2250708000110">
                                        <i class="fas fa-phone-alt fa-lg"></i> &nbsp;  &nbsp;+2250708000110
                                    </a>
                                    &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;
                                    <a class="contact-info" href="https://wa.me/+2250708000110" target="_blank">
                                        <i class="fab fa-whatsapp fa-2x text-success"></i>&nbsp; +2250708000110
                                    </a>
                                </p>
                            
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right "></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{--
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-contact-card card3">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="title">
                                    <h4>Adresse</h4>
                                    <span>Retrouvez nous à :</span>
                                </div>
                            </div>
                            <div class="bottom-part">                            
                                <div class="info">
                                    <p>{{$contact->adresse}} </p>
                <!-- <p>New York, US</p> -->
            </div>
            <div class="icon">
                <i class="fal fa-arrow-right"></i>
            </div>
        </div>
        </div>
        </div>
        --}}
        </div>

        {{--
        <div class="row pt-5">
            <div class="block-contents mb-30 pt-60">
                <div class="section-title text-center">
                    <h5 class="text-center text-normal">Laissez un message</h5>
                    <span class="text-normal">remplir le formulaire</span>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form class="row needs-validation" id="contact-form" method="POST" action="{{ route('message_submit') }}">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="fname" class="text-normal">Nom complet<span class="text-danger">*</span></label>
                                <input type="text" id="fname" name="name" placeholder="Entrez votre nom" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email" class="text-normal">Adresse email<span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Entrez votre mail" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone" class="text-normal">Téléphone</label>
                                <input type="text" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subject" class="text-normal">Sujet<span class="text-danger">*</span></label>
                                <input type="text" id="subject" name="subject" placeholder="Entrez le sujet" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="message" class="text-normal">Votre message<span class="text-danger">*</span></label>
                                <textarea id="message" name="message" placeholder="Entrez le message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 text-center">
                            <input class="submit-btn" type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        --}}

        <div class="row pt-5">

            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=5%C2%B023'11.8%22N%204%C2%B000'02.0%22W&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe><a href="http://vin-odometer.info"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        width: 100% !;
                        height: 400px !;
                    }
                </style>
            </div>
        </div>

        </div>
    </section>


   
    @include('components.footer')
    <!-- End Footer Area  -->
    
    <style>
        /*
Theme Name: Transland
Author: Modina Theme
Author URI: https://themeforest.net/user/modinatheme/
Description: Transport & Logistics HTML  Template
Version: 1.0.0
*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap");
* {
-webkit-box-sizing: border-box;
        box-sizing: border-box;
margin: 0;
padding: 0;
}

body,
html {
height: 100%;
zoom: 90%;
}

html {
scroll-behavior: smooth;
}

html, body, div, span, img,
ol, ul, li, a, p, h1, h2, h3,
h4, h5, h6, option, legend, label,
table, th, td, tr, article, aside,
caption, figure, footer, header, hgroup,
mark, nav, section, time, audio, video {
margin: 0;
padding: 0;
border: 0;
outline: 0;
}

img {
max-width: 100%;
}

a:hover, a:focus, a:active {
text-decoration: none;
outline: none !;
border: 0;
}

input:focus {
outline: none;
}

input::-moz-focus-inner {
border: 0;
display: none;
}

input::-webkit-focus-inner {
border: 0;
display: none;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
-webkit-box-shadow: 0 0 0px 1000px rgba(119, 255, 210, 0.788) inset !;
}

input:focus, textarea:focus, select:focus {
outline: none;
}

::-webkit-input-placeholder {
color: #666;
opacity: 1;
/* Firefox */
}

:-ms-input-placeholder {
color: #666;
opacity: 1;
/* Firefox */
}

::-ms-input-placeholder {
color: #666;
opacity: 1;
/* Firefox */
}

::placeholder {
color: #666;
opacity: 1;
/* Firefox */
}

:-ms-input-placeholder {
/* Internet Explorer 10-11 */
color: #666;
}

::-ms-input-placeholder {
/* Microsoft Edge */
color: #666;
}

table {
border-collapse: collapse;
}

html {
margin: 0;
padding: 0;
width: 100%;
height: 100%;
overflow-y: scroll;
overflow-x: hidden;
}

ul, li {
margin: 0;
padding: 0;
}

figure {
margin: 0px;
}

form {
position: relative;
}

.form-control:focus {
outline: none !;
border: none !;
-webkit-box-shadow: 0 0 0;
        box-shadow: 0 0 0;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
font-size: inherit;
color: inherit;
}

h1:hover a, h2:hover a, h3:hover a, h4:hover a, h5:hover a, h6:hover a {
font-size: inherit;
color: inherit;
}

hr {
margin: 0;
padding: 0;
border-color: #000;
}

ul {
list-style-type: none;
}

li {
list-style: none;
position: relative;
}

a,
button {
position: relative;
}

a:hover, a:focus,
button:hover,
button:focus {
outline: 0;
text-decoration: none;
}

input, textarea, button {
border: 0px;
}

/* ------------------------------------------------------------------
    Template All Variables Defined - Value Change with Your's Need
-------------------------------------------------------------------- */
/* --------------------------------------------
    Template Default Fonts & Fonts Styles
---------------------------------------------- */
body {
font-family: "Roboto", sans-serif;
font-size: 18px;
font-weight: 400;
line-height: 28px;
color: #666;
background-color: #fff;
}

h1,
h2,
h3,
h4,
h5,
h6 {
font-family: "Poppins", cursive;
margin: 0px;
margin-bottom: 15px;
font-weight: 700;
color: #1270b6;
line-height: 145%;
}

h1 {
font-size: 60px;
line-height: 1.17;
}

@media (max-width: 991px) {
h1 {
    font-size: 42px;
}
}

h2 {
font-size: 30px;
}

h3 {
font-size: 24px;
}

h4 {
font-size: 22px;
}

h5 {
font-size: 20px;
}

h6 {
font-size: 18px;
}

a {
text-decoration: none;
outline: none !;
cursor: pointer;
font-size: 16px;
line-height: 28px;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
color: #1270b6;
}

p {
margin: 0px;
}

.fs-lg {
font-size: 80px;
text-transform: uppercase;
line-height: 1.14;
}

@media (min-width: 767px) and (max-width: 991px) {
.fs-lg {
    font-size: 42px;
}
}

@media (max-width: 767px) {
.fs-lg {
    font-size: 36px;
}
}

.coverbg {
background-repeat: no-repeat;
background-position: 50% 50%;
background-size: cover !;
}

.mx-auto {
margin: 0 auto;
}

.align-center {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
}

.align-center:before, .align-center:after {
content: none;
}

.align-center-h {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
}

.align-center-h:before, .align-center-h:after {
content: none;
}

.align-center-v {
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
}

.align-center-v:before, .align-center-v:after {
content: none;
}

.align-center-v-b {
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: end;
-ms-flex-align: end;
align-items: flex-end;
}

.align-center-v-b:before, .align-center-v-b:after {
content: none;
}

.justify-content-center {
-webkit-box-pack: center !;
-ms-flex-pack: center !;
justify-content: center !;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
}

.justify-content-center:before, .justify-content-center:after {
content: none;
}

.eq-height {
display: -webkit-box;
display: -moz-flexbox;
display: -ms-flexbox;
display: -o-flexbox;
display: flex;
-ms-flex-wrap: wrap;
-o-flex-wrap: wrap;
flex-wrap: wrap;
}

.eq-height:before, .eq-height:after {
content: none;
}

/* ----------------------------------
    Template Helps Classes - Styles
------------------------------------ */
.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white a {
color: #fff !;
}

.mlm-30 {
margin-left: -30px;
}

/* padding left */
.pl-5 {
padding-left: 5px;
}

.pl-10 {
padding-left: 10px;
}

.pl-15 {
padding-left: 15px;
}

.pl-20 {
padding-left: 20px;
}

.pl-25 {
padding-left: 25px;
}

.pl-30 {
padding-left: 30px;
}

.pl-35 {
padding-left: 35px;
}

.pl-40 {
padding-left: 40px;
}

.pl-45 {
padding-left: 45px;
}

.pl-50 {
padding-left: 50px;
}

.pl-60 {
padding-left: 60px;
}

.pl-65 {
padding-left: 65px;
}

.pl-70 {
padding-left: 70px;
}

.pl-75 {
padding-left: 75px;
}

.pl-80 {
padding-left: 80px;
}

.pl-90 {
padding-left: 90px;
}

.pl-100 {
padding-left: 100px;
}

.pl-110 {
padding-left: 110px;
}

.pl-115 {
padding-left: 115px;
}

.pl-120 {
padding-left: 120px;
}

.pl-125 {
padding-left: 125px;
}

.pl-130 {
padding-left: 130px;
}

.pl-140 {
padding-left: 140px;
}

.pl-150 {
padding-left: 150px;
}

/* padding right */
.pr-5 {
padding-right: 5px;
}

.pr-5i {
padding-right: 5px !;
}

@media (max-width: 767px) {
.pr-5i {
    padding-right: 15px !;
}
}

.pr-10 {
padding-right: 10px;
}

.pr-15 {
padding-right: 15px;
}

.pr-20 {
padding-right: 20px;
}

.pr-25 {
padding-right: 25px;
}

.pr-30 {
padding-right: 30px;
}

.pr-35 {
padding-right: 35px;
}

.pr-40 {
padding-right: 40px;
}

.pr-45 {
padding-right: 45px;
}

.pr-50 {
padding-right: 50px;
}

.pr-60 {
padding-right: 60px;
}

.pr-70 {
padding-right: 70px;
}

.pr-75 {
padding-right: 75px;
}

.pr-80 {
padding-right: 80px;
}

.pr-90 {
padding-right: 90px;
}

.pr-100 {
padding-right: 100px;
}

.pr-110 {
padding-right: 110px;
}

.pr-115 {
padding-right: 115px;
}

.pr-120 {
padding-right: 120px;
}

.pr-125 {
padding-right: 125px;
}

.pr-130 {
padding-right: 130px;
}

.pr-140 {
padding-right: 140px;
}

.pr-150 {
padding-right: 150px;
}

/* padding top */
.pt-5 {
padding-top: 5px;
}

.pt-10 {
padding-top: 10px;
}

.pt-15 {
padding-top: 15px;
}

.pt-20 {
padding-top: 20px;
}

.pt-25 {
padding-top: 25px;
}

.pt-30 {
padding-top: 30px;
}

.pt-35 {
padding-top: 35px;
}

.pt-40 {
padding-top: 40px;
}

.pt-45 {
padding-top: 45px;
}

.pt-50 {
padding-top: 50px;
}

.pt-60 {
padding-top: 60px;
}

.pt-65 {
padding-top: 65px;
}

.pt-70 {
padding-top: 70px;
}

.pt-75 {
padding-top: 75px;
}

.pt-80 {
padding-top: 80px;
}

.pt-90 {
padding-top: 90px;
}

.pt-100 {
padding-top: 100px;
}

.pt-110 {
padding-top: 110px;
}

.pt-115 {
padding-top: 115px;
}

.pt-120 {
padding-top: 120px;
}

.pt-125 {
padding-top: 125px;
}

.pt-130 {
padding-top: 130px;
}

.pt-140 {
padding-top: 140px;
}

.pt-150 {
padding-top: 150px;
}

/* padding bottom */
.pb-5 {
padding-bottom: 5px;
}

.pb-10 {
padding-bottom: 10px;
}

.pb-15 {
padding-bottom: 15px;
}

.pb-20 {
padding-bottom: 20px;
}

.pb-25 {
padding-bottom: 25px;
}

.pb-30 {
padding-bottom: 30px;
}

.pb-35 {
padding-bottom: 35px;
}

.pb-40 {
padding-bottom: 40px;
}

.pb-45 {
padding-bottom: 45px;
}

.pb-50 {
padding-bottom: 50px;
}

.pb-60 {
padding-bottom: 60px;
}

.pb-65 {
padding-bottom: 65px;
}

.pb-70 {
padding-bottom: 70px;
}

.pb-75 {
padding-bottom: 75px;
}

.pb-80 {
padding-bottom: 80px;
}

.pb-90 {
padding-bottom: 90px;
}

.pb-100 {
padding-bottom: 100px;
}

.pb-110 {
padding-bottom: 110px;
}

.pb-115 {
padding-bottom: 115px;
}

.pb-120 {
padding-bottom: 120px;
}

.pb-125 {
padding-bottom: 125px;
}

.pb-130 {
padding-bottom: 130px;
}

.pb-140 {
padding-bottom: 140px;
}

.pb-150 {
padding-bottom: 150px;
}

/* margin left */
.ml-5 {
margin-left: 5px;
}

.ml-10 {
margin-left: 10px;
}

.ml-15 {
margin-left: 15px;
}

.ml-20 {
margin-left: 20px;
}

.ml-25 {
margin-left: 25px;
}

.ml-30 {
margin-left: 30px;
}

.ml-35 {
margin-left: 35px;
}

.ml-40 {
margin-left: 40px;
}

.ml-45 {
margin-left: 45px;
}

.ml-50 {
margin-left: 50px;
}

.ml-60 {
margin-left: 60px;
}

.ml-70 {
margin-left: 70px;
}

.ml-75 {
margin-left: 75px;
}

.ml-80 {
margin-left: 80px;
}

.ml-90 {
margin-left: 90px;
}

.ml-100 {
margin-left: 100px;
}

.ml-110 {
margin-left: 110px;
}

.ml-115 {
margin-left: 115px;
}

.ml-120 {
margin-left: 120px;
}

.ml-125 {
margin-left: 125px;
}

.ml-130 {
margin-left: 130px;
}

.ml-140 {
margin-left: 140px;
}

.ml-150 {
margin-left: 150px;
}

/* margin right */
.mr-5 {
margin-right: 5px;
}

.mr-10 {
margin-right: 10px;
}

.mr-15 {
margin-right: 15px;
}

.mr-20 {
margin-right: 20px;
}

.mr-25 {
margin-right: 25px;
}

.mr-30 {
margin-right: 30px;
}

.mr-35 {
margin-right: 35px;
}

.mr-40 {
margin-right: 40px;
}

.mr-45 {
margin-right: 45px;
}

.mr-50 {
margin-right: 50px;
}

.mr-60 {
margin-right: 60px;
}

.mr-70 {
margin-right: 70px;
}

.mr-75 {
margin-right: 75px;
}

.mr-80 {
margin-right: 80px;
}

.mr-90 {
margin-right: 90px;
}

.mr-100 {
margin-right: 100px;
}

.mr-110 {
margin-right: 110px;
}

.mr-115 {
margin-right: 115px;
}

.mr-120 {
margin-right: 120px;
}

.mr-125 {
margin-right: 125px;
}

.mr-130 {
margin-right: 130px;
}

.mr-140 {
margin-right: 140px;
}

.mr-150 {
margin-right: 150px;
}

.mtm-10 {
margin-top: -10px;
}

.mtm-20 {
margin-top: -20px;
}

.mtm-30 {
margin-top: -30px;
}

.mtm-40 {
margin-top: -40px;
}

.mtm-50 {
margin-top: -50px;
}

/* margin top */
.mt-5 {
margin-top: 5px;
}

.mt-10 {
margin-top: 10px;
}

.mt-15 {
margin-top: 15px;
}

.mt-20 {
margin-top: 20px;
}

.mt-25 {
margin-top: 25px;
}

.mt-30 {
margin-top: 30px;
}

.mt-35 {
margin-top: 35px;
}

.mt-40 {
margin-top: 40px;
}

.mt-45 {
margin-top: 45px;
}

.mt-50 {
margin-top: 50px;
}

.mt-60 {
margin-top: 60px;
}

.mt-70 {
margin-top: 70px;
}

.mt-75 {
margin-top: 75px;
}

.mt-80 {
margin-top: 80px;
}

.mt-90 {
margin-top: 90px;
}

.mt-100 {
margin-top: 100px;
}

.mt-110 {
margin-top: 110px;
}

.mt-115 {
margin-top: 115px;
}

.mt-120 {
margin-top: 120px;
}

.mt-125 {
margin-top: 125px;
}

.mt-130 {
margin-top: 130px;
}

.mt-140 {
margin-top: 140px;
}

.mt-150 {
margin-top: 150px;
}

/* margin bottom */
.mb-5 {
margin-bottom: 5px;
}

.mb-10 {
margin-bottom: 10px;
}

.mb-15 {
margin-bottom: 15px;
}

.mb-20 {
margin-bottom: 20px;
}

.mb-25 {
margin-bottom: 25px;
}

.mb-30 {
margin-bottom: 30px;
}

.mb-35 {
margin-bottom: 35px;
}

.mb-40 {
margin-bottom: 40px;
}

.mb-45 {
margin-bottom: 45px;
}

.mb-50 {
margin-bottom: 50px;
}

.mb-55 {
margin-bottom: 55px;
}

.mb-60 {
margin-bottom: 60px;
}

.mb-70 {
margin-bottom: 70px;
}

.mb-75 {
margin-bottom: 75px;
}

.mb-80 {
margin-bottom: 80px;
}

.mb-90 {
margin-bottom: 90px;
}

.mb-100 {
margin-bottom: 100px;
}

.mb-110 {
margin-bottom: 110px;
}

.mb-115 {
margin-bottom: 115px;
}

.mb-120 {
margin-bottom: 120px;
}

.mb-125 {
margin-bottom: 125px;
}

.mb-130 {
margin-bottom: 130px;
}

.mb-140 {
margin-bottom: 140px;
}

.mb-150 {
margin-bottom: 150px;
}

.mmb10 {
margin-bottom: -10px;
}

/* background */
.bg-cover {
background-repeat: no-repeat;
background-size: cover;
position: relative;
background-position: center;
}

.bg-center {
background-position: center;
}

.bg-contain {
background-repeat: no-repeat;
background-size: contain;
background-position: center;
position: relative;
}

.bg-right {
background-repeat: no-repeat;
background-position: right;
}

.bg-left {
background-repeat: no-repeat;
background-position: left;
}

.bg-bottom {
background-repeat: no-repeat;
background-position: bottom;
}

.bg-top {
background-repeat: no-repeat;
background-position: top;
}

.bg-100 {
background-size: 100% 100%;
}

.mmb-100 {
margin-bottom: -100px;
}

.mmb-80 {
margin-bottom: -80px;
}

.lr-9 {
margin-left: -9px;
margin-right: -9px;
}

.lr-9 [class*="col"] {
padding-left: 9px;
padding-right: 9px;
}

.checked-list {
margin-top: 30px;
}

@media (max-width: 767px) {
.checked-list {
    margin-top: 20px;
}
}

.checked-list.color li::before {
color: #fd7062;
}

.checked-list.right li {
padding-left: 0px;
padding-right: 30px;
}

.checked-list.right li::before {
right: 0;
left: auto;
}

.checked-list li {
margin-top: 10px;
position: relative;
font-size: 18px;
padding-left: 30px;
}

.checked-list li.no::before, .checked-list li.not::before {
content: "\f00d";
}

.checked-list li::before {
position: absolute;
left: 0;
top: 0;
font-family: "Font Awesome 5 Pro";
content: "\f00c";
color: #4ab9cf;
}

.bg-overlay {
position: relative;
z-index: 1;
}

.bg-overlay::before {
position: absolute;
left: 0;
content: "";
top: 0;
width: 100%;
height: 100%;
opacity: .2;
background-color: #1270b6;
z-index: -1;
}

.fix {
position: relative;
overflow: hidden;
z-index: 1;
}

.shape {
position: absolute;
}

@media (max-width: 1191px) {
.shape {
    display: none;
    opacity: 0;
}
}

.navbar-brand {
padding: 0;
margin-right: 0;
}

.scroll-up {
position: fixed;
background: #00baa3;
border-radius: 50%;
bottom: 0px;
color: #fff;
font-size: 18px;
height: 40px;
line-height: 44px;
right: 20px;
text-align: center;
width: 40px;
-webkit-box-shadow: 0px 5px 15px 0px rgba(1, 29, 80, 0.1);
        box-shadow: 0px 5px 15px 0px rgba(1, 29, 80, 0.1);
-webkit-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
opacity: 0;
visibility: hidden;
z-index: 990;
}

.scroll-up i {
color: #fff;
}

.scroll-up:hover {
background-color: #f86048;
color: #fff;
}

.scroll-up.active {
opacity: 1;
visibility: visible;
bottom: 20px;
}

@media only screen and (max-width: 991px) {
.scroll-up {
    font-size: 15px;
    height: 30px;
    line-height: 32px;
    right: 30px;
    width: 30px;
}
}

button {
border: none;
}

section {
position: relative;
z-index: 1;
}

section.pt-235 {
padding-top: 225px;
}

@-webkit-keyframes sticky {
0% {
    opacity: 0;
    margin-top: -120px;
}
50% {
    opacity: 0;
    margin-top: -60px;
}
100% {
    opacity: 1;
    margin-top: 0;
}
}

@keyframes sticky {
0% {
    opacity: 0;
    margin-top: -120px;
}
50% {
    opacity: 0;
    margin-top: -60px;
}
100% {
    opacity: 1;
    margin-top: 0;
}
}

.equal {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.equal > [class*='col-'] {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
}

@media (max-width: 414px) {
.d-none-mobile {
    display: none !;
}
}

.overlay {
-webkit-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
width: 40%;
opacity: 0;
visibility: hidden;
}

.overlay.active {
position: fixed;
right: 0;
top: 0;
height: 100%;
width: 100%;
content: "";
background-color: #000;
z-index: 99;
opacity: .5;
visibility: visible;
}

@-webkit-keyframes left-to-right {
0% {
    background-position: left center;
}
100% {
    background-position: right center;
}
}

@keyframes left-to-right {
0% {
    background-position: left center;
}
100% {
    background-position: right center;
}
}

@-webkit-keyframes right-to-left {
0% {
    background-position: right center;
}
100% {
    background-position: left center;
}
}

@keyframes right-to-left {
0% {
    background-position: right center;
}
100% {
    background-position: left center;
}
}

@-webkit-keyframes left-to-center {
0% {
    background-position: left center;
}
100% {
    background-position: center center;
}
}

@keyframes left-to-center {
0% {
    background-position: left center;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes right-to-center {
0% {
    background-position: right center;
}
100% {
    background-position: center center;
}
}

@keyframes right-to-center {
0% {
    background-position: right center;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes top-to-bottom {
0% {
    background-position: center top;
}
100% {
    background-position: center bottom;
}
}

@keyframes top-to-bottom {
0% {
    background-position: center top;
}
100% {
    background-position: center bottom;
}
}

@-webkit-keyframes top-to-center {
0% {
    background-position: center top;
}
100% {
    background-position: center center;
}
}

@keyframes top-to-center {
0% {
    background-position: center top;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes bottom-to-top {
0% {
    background-position: center bottom;
}
100% {
    background-position: center top;
}
}

@keyframes bottom-to-top {
0% {
    background-position: center bottom;
}
100% {
    background-position: center top;
}
}

@-webkit-keyframes bottom-to-center {
0% {
    background-position: center bottom;
}
100% {
    background-position: center center;
}
}

@keyframes bottom-to-center {
0% {
    background-position: center bottom;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes top-left-to-bottom-right {
0% {
    background-position: left top;
}
100% {
    background-position: right bottom;
}
}

@keyframes top-left-to-bottom-right {
0% {
    background-position: left top;
}
100% {
    background-position: right bottom;
}
}

@-webkit-keyframes top-left-to-center {
0% {
    background-position: left top;
}
100% {
    background-position: center center;
}
}

@keyframes top-left-to-center {
0% {
    background-position: left top;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes top-right-to-bottom-left {
0% {
    background-position: right top;
}
100% {
    background-position: left bottom;
}
}

@keyframes top-right-to-bottom-left {
0% {
    background-position: right top;
}
100% {
    background-position: left bottom;
}
}

@-webkit-keyframes top-right-to-center {
0% {
    background-position: right top;
}
100% {
    background-position: center center;
}
}

@keyframes top-right-to-center {
0% {
    background-position: right top;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes bottom-left-to-top-right {
0% {
    background-position: left bottom;
}
100% {
    background-position: right top;
}
}

@keyframes bottom-left-to-top-right {
0% {
    background-position: left bottom;
}
100% {
    background-position: right top;
}
}

@-webkit-keyframes bottom-left-to-center {
0% {
    background-position: left bottom;
}
100% {
    background-position: center center;
}
}

@keyframes bottom-left-to-center {
0% {
    background-position: left bottom;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes bottom-right-to-top-left {
0% {
    background-position: right bottom;
}
100% {
    background-position: left top;
}
}

@keyframes bottom-right-to-top-left {
0% {
    background-position: right bottom;
}
100% {
    background-position: left top;
}
}

@-webkit-keyframes bottom-right-to-center {
0% {
    background-position: right bottom;
}
100% {
    background-position: center center;
}
}

@keyframes bottom-right-to-center {
0% {
    background-position: right bottom;
}
100% {
    background-position: center center;
}
}

@-webkit-keyframes zoomIn {
0% {
    background-position: right center;
}
100% {
    background-position: left center;
}
}

@keyframes zoomIn {
0% {
    background-position: right center;
}
100% {
    background-position: left center;
}
}

.animation_left-to-right {
background-position: left center;
}

.active .animation_left-to-right {
-webkit-animation: left-to-right 5s ease 0s 1 normal forwards running;
        animation: left-to-right 5s ease 0s 1 normal forwards running;
}

.animation_right-to-left {
background-position: right center;
}

.active .animation_right-to-left {
-webkit-animation: right-to-left 5s ease 0s 1 normal forwards running;
        animation: right-to-left 5s ease 0s 1 normal forwards running;
}

.animation_left-to-center {
background-position: left center;
}

.active .animation_left-to-center {
-webkit-animation: left-to-center 5s ease 0s 1 normal forwards running;
        animation: left-to-center 5s ease 0s 1 normal forwards running;
}

.animation_right-to-center {
background-position: right center;
}

.active .animation_right-to-center {
-webkit-animation: right-to-center 5s ease 0s 1 normal forwards running;
        animation: right-to-center 5s ease 0s 1 normal forwards running;
}

.animation_top-to-bottom {
background-position: center top;
}

.active .animation_top-to-bottom {
-webkit-animation: top-to-bottom 5s ease 0s 1 normal forwards running;
        animation: top-to-bottom 5s ease 0s 1 normal forwards running;
}

.animation_top-to-center {
background-position: center top;
}

.active .animation_top-to-center {
-webkit-animation: top-to-center 5s ease 0s 1 normal forwards running;
        animation: top-to-center 5s ease 0s 1 normal forwards running;
}

.animation_bottom-to-top {
background-position: center bottom;
}

.active .animation_bottom-to-top {
-webkit-animation: bottom-to-top 5s ease 0s 1 normal forwards running;
        animation: bottom-to-top 5s ease 0s 1 normal forwards running;
}

.animation_bottom-to-center {
background-position: center bottom;
}

.active .animation_bottom-to-center {
-webkit-animation: bottom-to-center 5s ease 0s 1 normal forwards running;
        animation: bottom-to-center 5s ease 0s 1 normal forwards running;
}

.animation_top-left-to-bottom-right {
background-position: left top;
}

.active .animation_top-left-to-bottom-right {
-webkit-animation: top-left-to-bottom-right 5s ease 0s 1 normal forwards running;
        animation: top-left-to-bottom-right 5s ease 0s 1 normal forwards running;
}

.animation_top-left-to-center {
background-position: left top;
}

.active .animation_top-left-to-center {
-webkit-animation: top-left-to-center 5s ease 0s 1 normal forwards running;
        animation: top-left-to-center 5s ease 0s 1 normal forwards running;
}

.animation_top-right-to-bottom-left {
background-position: right top;
}

.active .animation_top-right-to-bottom-left {
-webkit-animation: top-right-to-bottom-left 5s ease 0s 1 normal forwards running;
        animation: top-right-to-bottom-left 5s ease 0s 1 normal forwards running;
}

.animation_top-right-to-center {
background-position: right top;
}

.active .animation_top-right-to-center {
-webkit-animation: top-right-to-center 5s ease 0s 1 normal forwards running;
        animation: top-right-to-center 5s ease 0s 1 normal forwards running;
}

.animation_bottom-left-to-top-right {
background-position: left bottom;
}

.active .animation_bottom-left-to-top-right {
-webkit-animation: bottom-left-to-top-right 5s ease 0s 1 normal forwards running;
        animation: bottom-left-to-top-right 5s ease 0s 1 normal forwards running;
}

.animation_bottom-left-to-center {
background-position: left bottom;
}

.active .animation_bottom-left-to-center {
-webkit-animation: bottom-left-to-center 5s ease 0s 1 normal forwards running;
        animation: bottom-left-to-center 5s ease 0s 1 normal forwards running;
}

.animation_bottom-right-to-top-left {
background-position: right bottom;
}

.active .animation_bottom-right-to-top-left {
-webkit-animation: bottom-right-to-top-left 5s ease 0s 1 normal forwards running;
        animation: bottom-right-to-top-left 5s ease 0s 1 normal forwards running;
}

.animation_bottom-right-to-center {
background-position: right bottom;
}

.active .animation_bottom-right-to-center {
-webkit-animation: bottom-right-to-center 5s ease 0s 1 normal forwards running;
        animation: bottom-right-to-center 5s ease 0s 1 normal forwards running;
}

/* Alignments
--------------------------------------------- */
.alignleft {
/*rtl:ignore*/
float: left;
/*rtl:ignore*/
margin-right: 1.5em;
margin-bottom: 1.5em;
}

.alignright {
/*rtl:ignore*/
float: right;
/*rtl:ignore*/
margin-left: 1.5em;
margin-bottom: 1.5em;
}

.aligncenter {
clear: both;
display: block;
margin-left: auto;
margin-right: auto;
margin-bottom: 1.5em;
}

nav .breadcrumb {
list-style: none;
}

nav .breadcrumb li {
list-style: none;
}

.no-padding .col-12 {
padding: 0;
}

.mask-outline {
background-repeat: no-repeat;
background-position: center;
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
}

.mask-outline h1 {
font-size: 200px;
margin-bottom: 0;
line-height: 1;
}

@media (max-width: 991px) {
.mask-outline h1 {
    font-size: 150px;
}
}

@media (max-width: 576px) {
.mask-outline h1 {
    font-size: 100px;
}
}

.mask-outline h2 {
font-size: 115px;
margin-bottom: 0;
line-height: 1;
}

.mask-outline h3 {
font-size: 80px;
margin-bottom: 0;
line-height: 1;
}

.fix {
overflow: hidden;
}

.whatsapp{
background-color: #ffffff;
border-radius: 50%;
bottom: 20px;
/* color: #ffffff; */
/* font-size: 22px; */
height: 50px;
width: 50px;
/* line-height: 44px; */
left: 20px;
text-align: center;
}

#scrollUp {
background-color: #1270b6;
border-radius: 50%;
bottom: 20px;
color: #ffffff;
font-size: 22px;
height: 40px;
line-height: 44px;
right: 20px;
text-align: center;
width: 40px;
-webkit-box-shadow: 0px 5px 15px 0px rgba(1, 29, 80, 0.1);
        box-shadow: 0px 5px 15px 0px rgba(1, 29, 80, 0.1);
font-weight: 400;
-webkit-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
}

#scrollUp:hover {
background-color: #4ab9cf;
}

@media only screen and (max-width: 991px) {
#scrollUp {
    font-size: 15px;
    height: 30px;
    line-height: 32px;
    right: 30px;
    width: 30px;
}
}

@-webkit-keyframes stroke {
52% {
    -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
    stroke-dashoffset: 0;
}
52.1% {
    -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
    stroke-dashoffset: 0;
}
100% {
    -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
    stroke-dashoffset: 126;
}
}

@keyframes stroke {
52% {
    -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
    stroke-dashoffset: 0;
}
52.1% {
    -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
    stroke-dashoffset: 0;
}
100% {
    -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
    stroke-dashoffset: 126;
}
}

@-webkit-keyframes arrow {
0%,
100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
}
23% {
    -webkit-transform: translateX(17px);
            transform: translateX(17px);
    opacity: 1;
}
24%,
80% {
    -webkit-transform: translateX(-22px);
            transform: translateX(-22px);
    opacity: 0;
}
81% {
    opacity: 1;
    -webkit-transform: translateX(-22px);
            transform: translateX(-22px);
}
}

@keyframes arrow {
0%,
100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
}
23% {
    -webkit-transform: translateX(17px);
            transform: translateX(17px);
    opacity: 1;
}
24%,
80% {
    -webkit-transform: translateX(-22px);
            transform: translateX(-22px);
    opacity: 0;
}
81% {
    opacity: 1;
    -webkit-transform: translateX(-22px);
            transform: translateX(-22px);
}
}

@-webkit-keyframes arrowUp {
0%,
100% {
    -webkit-transform: rotate(-40deg) scaleX(1);
            transform: rotate(-40deg) scaleX(1);
}
20%,
80% {
    -webkit-transform: rotate(0deg) scaleX(0.1);
            transform: rotate(0deg) scaleX(0.1);
}
}

@keyframes arrowUp {
0%,
100% {
    -webkit-transform: rotate(-40deg) scaleX(1);
            transform: rotate(-40deg) scaleX(1);
}
20%,
80% {
    -webkit-transform: rotate(0deg) scaleX(0.1);
            transform: rotate(0deg) scaleX(0.1);
}
}

@-webkit-keyframes arrowDown {
0%,
100% {
    -webkit-transform: rotate(40deg) scaleX(1);
            transform: rotate(40deg) scaleX(1);
}
20%,
80% {
    -webkit-transform: rotate(0deg) scaleX(0.1);
            transform: rotate(0deg) scaleX(0.1);
}
}

@keyframes arrowDown {
0%,
100% {
    -webkit-transform: rotate(40deg) scaleX(1);
            transform: rotate(40deg) scaleX(1);
}
20%,
80% {
    -webkit-transform: rotate(0deg) scaleX(0.1);
            transform: rotate(0deg) scaleX(0.1);
}
}

@-webkit-keyframes zoomInImage {
from {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
    -webkit-transition: 1s;
    transition: 1s;
}
to {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
    -webkit-transition: 1s;
    transition: 1s;
}
}

@keyframes zoomInImage {
from {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
    -webkit-transition: 1s;
    transition: 1s;
}
to {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
    -webkit-transition: 1s;
    transition: 1s;
}
}

.zoomInImage {
-webkit-animation-name: zoomInImage;
        animation-name: zoomInImage;
}

@-webkit-keyframes zoomBg {
from {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
}
to {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
}
}

@keyframes zoomBg {
from {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
}
to {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
}
}

.zoomBg {
-webkit-animation-name: zoomMe;
        animation-name: zoomMe;
}

@-webkit-keyframes zoomOutImage {
from {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
    -webkit-transition: 1s;
    transition: 1s;
}
to {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
    -webkit-transition: 1s;
    transition: 1s;
}
}

@keyframes zoomOutImage {
from {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
    -webkit-transition: 1s;
    transition: 1s;
}
to {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
    -webkit-transition: 1s;
    transition: 1s;
}
}

.zoomOutImage {
-webkit-animation-name: zoomOutImage;
        animation-name: zoomOutImage;
-webkit-transition: 1s;
transition: 1s;
}

@-webkit-keyframes playVideo {
0% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3);
}
40% {
    -webkit-box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
}
80% {
    -webkit-box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
}
100% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
}
}

@keyframes playVideo {
0% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3);
}
40% {
    -webkit-box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
}
80% {
    -webkit-box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
}
100% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
}
}

@-webkit-keyframes dimond {
0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
}
100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
}
}

@keyframes dimond {
0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
}
100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
}
}

@-webkit-keyframes bounce {
0%,
100% {
    -webkit-transform: scale(0);
}
50% {
    -webkit-transform: scale(1);
}
}

@keyframes bounce {
0%,
100% {
    transform: scale(0);
    -webkit-transform: scale(0);
}
50% {
    transform: scale(1);
    -webkit-transform: scale(1);
}
}

@-webkit-keyframes movebounce {
0% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
50% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
}
100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
}

@keyframes movebounce {
0% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
50% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
}
100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
}

@-webkit-keyframes bounceUp {
0% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
50% {
    -webkit-transform: translateY(40px);
    transform: translateY(40px);
}
100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
}

@keyframes bounceUp {
0% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
50% {
    -webkit-transform: translateY(40px);
    transform: translateY(40px);
}
100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
}
}

@-webkit-keyframes moveleftbounce {
0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
}
50% {
    -webkit-transform: translateX(40px);
    transform: translateX(40px);
}
100% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
}
}

@keyframes moveleftbounce {
0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
}
50% {
    -webkit-transform: translateX(40px);
    transform: translateX(40px);
}
100% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
}
}

@-webkit-keyframes moverightbounce {
0% {
    margin-left: 0px;
}
50% {
    margin-left: 30px;
}
100% {
    margin-left: 0px;
}
}

@keyframes moverightbounce {
0% {
    margin-left: 0px;
}
50% {
    margin-left: 30px;
}
100% {
    margin-left: 0px;
}
}

.rotateme {
-webkit-animation-name: rotateme;
animation-name: rotateme;
-webkit-animation-duration: 20s;
animation-duration: 20s;
-webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite;
-webkit-animation-timing-function: linear;
animation-timing-function: linear;
}

@keyframes guraguri {
from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
}
to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
}

@-webkit-keyframes guraguri {
from {
    -webkit-transform: rotate(0deg);
}
to {
    -webkit-transform: rotate(360deg);
}
}

@-webkit-keyframes rotate3d {
0% {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
}
100% {
    -webkit-transform: rotateY(360deg);
    transform: rotateY(360deg);
}
}

@keyframes rotate3d {
0% {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
}
100% {
    -webkit-transform: rotateY(360deg);
    transform: rotateY(360deg);
}
}

@keyframes move_wave {
0% {
    -webkit-transform: translateX(0) translateZ(0) scaleY(1);
            transform: translateX(0) translateZ(0) scaleY(1);
}
50% {
    -webkit-transform: translateX(-25%) translateZ(0) scaleY(0.55);
            transform: translateX(-25%) translateZ(0) scaleY(0.55);
}
100% {
    -webkit-transform: translateX(-50%) translateZ(0) scaleY(1);
            transform: translateX(-50%) translateZ(0) scaleY(1);
}
}

@-webkit-keyframes move_wave {
0% {
    -webkit-transform: translateX(0) translateZ(0) scaleY(1);
            transform: translateX(0) translateZ(0) scaleY(1);
}
50% {
    -webkit-transform: translateX(-25%) translateZ(0) scaleY(0.55);
            transform: translateX(-25%) translateZ(0) scaleY(0.55);
}
100% {
    -webkit-transform: translateX(-50%) translateZ(0) scaleY(1);
            transform: translateX(-50%) translateZ(0) scaleY(1);
}
}

/* ----------------------------------
All Aniamtion Styles
------------------------------------ */
@-webkit-keyframes spinner {
to {
    -webkit-transform: rotateZ(360deg);
    transform: rotateZ(360deg);
}
}

@keyframes spinner {
to {
    -webkit-transform: rotateZ(360deg);
    transform: rotateZ(360deg);
}
}

@-webkit-keyframes letters-loading {
0%,
75%,
100% {
    opacity: 0;
    -webkit-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
}
25%,
50% {
    opacity: 1;
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
}
}

@keyframes letters-loading {
0%,
75%,
100% {
    opacity: 0;
    -webkit-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
}
25%,
50% {
    opacity: 1;
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
}
}

/* ------------------------------------------------------------------
Template Default Button, Input Styles - Value Change with Your's Need
-------------------------------------------------------------------- */
.btnd, .theme-btn, .theme-button .elementor-button .elementor-button-content-wrapper, .video-btn {
line-height: 1;
display: inline-block;
-webkit-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
text-transform: capitalize;
position: relative;
z-index: 1;
}

.theme-btn {
color: #FFF;
padding: 21px 30px;
font-size: 16px;
/* font-weight: 700; */
color: #FFF;
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.theme-btn.border-style {
position: relative;
z-index: 2;
}

.theme-btn.border-style::before {
position: absolute;
left: 10px;
top: 10px;
content: "";
width: 100%;
height: 100%;
background: transparent;
border: 1px solid #fff;
opacity: .2;
z-index: -1;
}

@media (max-width: 580px) {
.theme-btn {
    padding: 16px 35px;
    font-size: 14px;
}
}

@media (max-width: 480px) {
.theme-btn {
    padding: 15px 30px;
}
}

.theme-btn.no-fil {
background-color: transparent;
border-color: rgba(255, 255, 255, 0.2);
-webkit-box-shadow: inherit;
        box-shadow: inherit;
margin-left: 15px;
}

@media (max-width: 500px) {
.theme-btn.no-fil {
    margin-left: 0;
}
}

.theme-btn.no-fil:hover {
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
}

.theme-btn.black {
background-color: #1270b6;
border-color: #1270b6;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
}

.theme-btn.black:hover {
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
}

.theme-btn.minimal-btn {
color: #727475;
border: 1px solid #ebebeb;
background: transparent;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
}

.theme-btn:hover {
background-color: #1270b6;
border: 1px solid #1270b6;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
color: #FFF;
}

.theme-button .elementor-button {
background-color: transparent !;
font-size: inherit !;
padding: 0px !;
border-radius: 0px !;
color: unset !;
fill: unset !;
}

.theme-button .elementor-button .elementor-button-content-wrapper {
color: #FFF;
padding: 20px 49px;
border-radius: 30px;
font-size: 16px;
font-weight: 700;
-webkit-box-shadow: 0px 8px 16px 0px rgba(239, 201, 76, 0.3);
        box-shadow: 0px 8px 16px 0px rgba(239, 201, 76, 0.3);
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

@media (max-width: 580px) {
.theme-button .elementor-button .elementor-button-content-wrapper {
    padding: 16px 35px;
}
}

@media (max-width: 480px) {
.theme-button .elementor-button .elementor-button-content-wrapper {
    padding: 15px 30px;
    font-size: 15px;
}
}

.theme-button .elementor-button .elementor-button-content-wrapper.no-fil {
background-color: transparent;
border-color: rgba(255, 255, 255, 0.2);
-webkit-box-shadow: inherit;
        box-shadow: inherit;
margin-left: 15px;
}

@media (max-width: 500px) {
.theme-button .elementor-button .elementor-button-content-wrapper.no-fil {
    margin-left: 0;
}
}

.theme-button .elementor-button .elementor-button-content-wrapper.no-fil:hover {
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
}

.theme-button .elementor-button .elementor-button-content-wrapper.black {
background-color: #1270b6;
border-color: #1270b6;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
}

.theme-button .elementor-button .elementor-button-content-wrapper.black:hover {
background-color: #4ab9cf;
border: 1px solid #4ab9cf;
}

.theme-button .elementor-button .elementor-button-content-wrapper.minimal-btn {
color: #727475;
border: 1px solid #ebebeb;
background: transparent;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
}

.theme-button .elementor-button .elementor-button-content-wrapper:hover {
background-color: #1270b6;
border: 1px solid #1270b6;
-webkit-box-shadow: inherit;
        box-shadow: inherit;
color: #FFF;
}

.video-btn {
font-size: 16px;
font-weight: 700;
color: #4ab9cf;
}

.video-btn i {
margin-right: 10px;
}

.video-play-btn .play-video {
border-radius: 50%;
width: 120px;
height: 120px;
background-color: #fff;
color: #fd7062;
line-height: 122px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
text-align: center;
-webkit-animation: playVideo infinite 3.5s;
        animation: playVideo infinite 3.5s;
display: inline-block;
margin: 0px auto;
font-size: 18px;
-webkit-box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.04);
        box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.04);
}

@media (max-width: 767px) {
.video-play-btn .play-video {
    width: 80px;
    height: 80px;
    line-height: 80px;
}
}

.video-play-btn .play-video:hover {
color: #1270b6;
-webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.video-play-btn .play-text {
font-weight: 700;
}

.cat-btn {
font-size: 16px;
line-height: 1;
padding: 20px 30px;
font-weight: 700;
border-style: solid;
border-width: 1px;
border-color: rgba(255, 255, 255, 0.2);
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
background: transparent;
display: inline-block;
margin-right: 10px;
margin-top: 30px;
}

.cat-btn i {
margin-right: 10px;
}

.cat-btn.color {
background-color: #00baa3;
border-color: #00baa3;
color: #fff;
}

.cat-btn:hover {
background-color: #00baa3;
border-color: #00baa3;
border-style: solid;
border-width: 1px;
}




/* ----------------------------------
    Template Section Styles
------------------------------------*/
header {
position: relative;
z-index: 99;
}

header ul {
padding: 0;
margin: 0;
}

header.header-1.sticky {
top: 0 !;
width: 100%;
position: fixed !;
background: #fff;
-webkit-animation: sticky .8s ease-in-out;
        animation: sticky .8s ease-in-out;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
}

@media (max-width: 767px) {
header.header-1.sticky {
    position: relative;
}
}

header.header-1.sticky .main-menu ul li > a {
padding: 30px 20px;
}

header.header-1.sticky .main-menu ul ul li a {
padding: 10px 20px;
}

header.header-1.sticky .theme-btn {
padding: 17px 28px;
}

@media (max-width: 991px) {
header.header-1 {
    padding: 15px 0px;
}
}

header.header-1 .logo a {
display: block;
}

header.header-1 .main-menu ul {
line-height: 1;
}

header.header-1 .main-menu ul > li {
display: inline-block;
line-height: 1;
}

header.header-1 .main-menu ul > li li.menu-item-has-children > a:after {
font-family: "Font Awesome 5 Pro";
content: "\f105";
position: absolute;
right: 15px;
}

header.header-1 .main-menu ul > li > a {
display: inline-block;
/* font-weight: 700; */
text-transform: capitalize;
color: #1270b6;
line-height: 1;
padding: 38px 22px;
overflow: hidden;
text-align: left;
position: relative;
}

header.header-1 .main-menu ul > li > a span {
margin-left: 3px;
font-size: 14px;
}

@media (max-width: 1199px) {
header.header-1 .main-menu ul > li > a {
    padding: 26px 20px;
}
}

header.header-1 .main-menu ul > li:hover > a {
color: #4ab9cf;
}

header.header-1 .main-menu ul > li:hover > ul {
opacity: 1;
visibility: visible;
-webkit-transform: translateY(0);
        transform: translateY(0);
}

header.header-1 .main-menu ul > li:hover > ul li:hover a {
color: #1270b6;
}

header.header-1 .main-menu ul > li:hover > ul li:hover ul a:hover {
color: #fff;
}

header.header-1 .main-menu ul > li > ul {
position: absolute;
top: 100%;
width: 230px;
background-color: #4ab9cf;
left: 0;
z-index: 999;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
visibility: hidden;
opacity: 0;
-webkit-transform: translateY(40px);
        transform: translateY(40px);
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
padding: 10px 0px;
}

header.header-1 .main-menu ul > li > ul li {
display: block;
}

header.header-1 .main-menu ul > li > ul li a {
display: block;
color: #FFF;
padding: 10px 24px;
line-height: 1.5;
}

header.header-1 .main-menu ul > li > ul li a:hover {
color: #1270b6;
}

header.header-1 .main-menu ul > li > ul ul {
left: 100%;
top: 0;
}

header .logo_text {
text-transform: uppercase;
color: #1270b6;
font-size: 27px;
line-height: 1;
}

header.header-2 .middle-bar {
padding-top: 25px;
padding-bottom: 25px;
}

@media (max-width: 767px) {
header.header-2 .middle-bar {
    padding-top: 20px;
    padding-bottom: 20px;
}
}

header.header-2 .main-menu ul {
line-height: 1;
}

header.header-2 .main-menu ul > li {
display: inline-block;
line-height: 1;
}

header.header-2 .main-menu ul > li li.menu-item-has-children > a:after {
font-family: "Font Awesome 5 Pro";
content: "\f105";
position: absolute;
right: 15px;
}

header.header-2 .main-menu ul > li > a {
display: inline-block;
font-weight: 700;
text-transform: capitalize;
color: #FFF;
line-height: 1;
padding: 30px 20px;
overflow: hidden;
text-align: left;
position: relative;
margin-bottom: -3px;
}

header.header-2 .main-menu ul > li > a::before {
position: absolute;
left: 0;
bottom: 0;
content: "";
background-color: #4ab9cf;
width: 100%;
height: 0px;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
opacity: 0;
visibility: hidden;
}

header.header-2 .main-menu ul > li > a span {
margin-left: 3px;
font-size: 14px;
}

@media (max-width: 1199px) {
header.header-2 .main-menu ul > li > a {
    padding: 26px 20px;
}
}

header.header-2 .main-menu ul > li:hover > a {
color: #4ab9cf;
}

header.header-2 .main-menu ul > li:hover > a::before {
opacity: 1;
visibility: visible;
height: 4px;
}

header.header-2 .main-menu ul > li:hover > ul {
opacity: 1;
visibility: visible;
-webkit-transform: translateY(0);
        transform: translateY(0);
}

header.header-2 .main-menu ul > li:hover > ul li:hover a {
color: #1270b6;
}

header.header-2 .main-menu ul > li:hover > ul li:hover ul a:hover {
color: #fff;
}

header.header-2 .main-menu ul > li > ul {
position: absolute;
top: 100%;
width: 230px;
background-color: #4ab9cf;
left: 0;
z-index: 999;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
visibility: hidden;
opacity: 0;
-webkit-transform: translateY(40px);
        transform: translateY(40px);
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
padding: 10px 0px;
}

header.header-2 .main-menu ul > li > ul li {
display: block;
}

header.header-2 .main-menu ul > li > ul li a {
display: block;
color: #FFF;
padding: 12px 24px;
line-height: 1.5;
}

header.header-2 .main-menu ul > li > ul li a:hover {
color: #1270b6;
}

header.header-2 .main-menu ul > li > ul ul {
left: 100%;
top: 0;
}

header .main-menu-wrapper {
background-color: #1270b6;
}

header.header-3 .top-header {
background-color: #4ab9cf0f;
padding: 14px 0px;
}

@media (max-width: 767px) {
header.header-3 .top-header {
    padding: 10px 0px;
}
}

@media (max-width: 767px) {
header.header-3 .top-header .welcome-text {
    font-size: 13px;
}
}

header.header-3 .top-header .welcome-text a {
text-decoration: underline;
color: #1270b6;
margin-left: 5px;
}

@media (max-width: 767px) {
header.header-3 .top-header .welcome-text a {
    font-size: 13px;
}
}

header.header-3 .mobile-nav-bar {
display: none;
}

@media (max-width: 1340px) {
header.header-3 .mobile-nav-bar {
    display: block;
}
}

header.header-3 #hamburger {
display: block;
color: #1270b6;
}

header.header-3 .menu-top-bar {
position: relative;
padding: 20px 0px 15px;
overflow: hidden;
}

header.header-3 .side-toggle-menu {
top: 0;
right: 0;
width: 8%;
position: absolute;
background-color: #4ab9cf;
color: #fff;
height: 100%;
font-size: 32px;
text-align: center;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

header.header-3 .side-toggle-menu i {
position: absolute;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
left: 32%;
}

header.header-3 .side-toggle-menu:hover {
background-color: #1270b6;
color: #fff;
cursor: pointer;
}

header.header-3 .contact-info-grid {
display: -ms-grid;
display: grid;
-ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
grid-row: auto;
width: 92%;
padding-right: 30px;
}

header.header-3 .single-menu-box {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
padding-left: 30px;
position: relative;
}

@media (max-width: 1600px) {
header.header-3 .single-menu-box {
    padding-left: 15px;
}
}

@media (max-width: 1400px) {
header.header-3 .single-menu-box {
    padding-left: 30px;
}
}

header.header-3 .single-menu-box::before {
position: absolute;
width: 1px;
height: 400%;
top: 0;
left: 0;
content: "";
background-color: #e8e8eb;
-webkit-transform: translateY(-40%);
        transform: translateY(-40%);
}

header.header-3 .single-menu-box .icon {
float: left;
overflow: hidden;
font-size: 40px;
line-height: 1;
color: #1270b6;
margin-right: 20px;
}

@media (max-width: 1600px) {
header.header-3 .single-menu-box .icon {
    font-size: 32px;
    margin-right: 10px;
}
}

@media (max-width: 1400px) {
header.header-3 .single-menu-box .icon {
    font-size: 32px;
    margin-right: 20px;
}
}

header.header-3 .single-menu-box .content {
overflow: hidden;
}

header.header-3 .single-menu-box .content h3 {
font-size: 20px;
margin-bottom: 0;
}

header.header-3 .single-menu-box .content span {
font-size: 16px;
line-height: 1;
}

header.header-3 .middle-header-wrapper {
padding: 0px 70px;
}

@media (max-width: 1600px) {
header.header-3 .middle-header-wrapper {
    padding: 0px 30px;
}
}

@media (max-width: 1400px) {
header.header-3 .middle-header-wrapper {
    padding: 0px 15px;
}
}

@media (max-width: 1340px) {
header.header-3 .middle-header-wrapper {
    padding: 15px;
}
}

@media (max-width: 767px) {
header.header-3 .middle-header-wrapper {
    padding: 15px 0;
}
}

@media (max-width: 1340px) {
header.header-3 .header-menu-wrap {
    display: none;
}
}

header.header-3 .main-menu-wrapper {
background-color: #1270b6;
margin-bottom: -40px;
z-index: 999;
position: relative;
}

header.header-3 .main-menu ul {
line-height: 1;
}

header.header-3 .main-menu ul > li {
display: inline-block;
line-height: 1;
}

header.header-3 .main-menu ul > li > a {
display: inline-block;
font-size: 16px;
text-transform: capitalize;
line-height: 1;
padding: 30px;
overflow: hidden;
color: #fff;
font-weight: 500;
}

header.header-3 .main-menu ul > li > a i {
margin-left: 5px;
}

header.header-3 .main-menu ul > li:hover > a {
color: #fd7062;
}

header.header-3 .main-menu ul > li:hover > ul {
opacity: 1;
visibility: visible;
-webkit-transform: translateY(0);
        transform: translateY(0);
}

header.header-3 .main-menu ul > li > ul {
position: absolute;
top: 100%;
width: 230px;
background-color: #1270b6;
left: 0;
z-index: 999;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
visibility: hidden;
opacity: 0;
-webkit-transform: translateY(40px);
        transform: translateY(40px);
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
padding: 10px 0px;
}

header.header-3 .main-menu ul > li > ul li {
display: block;
}

header.header-3 .main-menu ul > li > ul li a {
display: block;
color: #fff;
padding: 12px 25px;
}

header.header-3 .main-menu ul > li > ul li a:hover {
color: #fd7062;
}

header.header-3 .main-menu ul > li > ul ul {
left: 100%;
top: 0;
}

@media (max-width: 1600px) {
header.header-3 .theme-btn {
    padding: 18px 32px;
}
}

@media (max-width: 1400px) {
header.header-3 .theme-btn {
    padding: 16px 30px;
    font-size: 13px;
}
}

@media (max-width: 1400px) {
header.header-3 .theme-btn {
    padding: 16px 22px;
    font-size: 12px;
}
}

header .header-right-element .theme-btn i {
margin-left: 4px;
}

header .header-right-element .search-btn {
margin-left: 10px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

header .header-right-element .search-btn:hover {
color: #fd7062;
}

header .header-right-element .search-box {
width: 0;
position: absolute;
right: 0;
-webkit-transform: translateY(15px);
        transform: translateY(15px);
opacity: 0;
visibility: hidden;
z-index: 1;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
-webkit-box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
        box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
}

header .header-right-element .search-box.show {
width: 320px;
opacity: 1;
visibility: visible;
}

header .header-right-element .search-box form input {
border: 0px;
width: 100%;
line-height: 1;
padding: 0px 20px;
color: #1270b6;
font-size: 16px;
height: 60px;
background-color: #fff;
}

header .header-right-element .search-box form button {
border: 0px;
position: absolute;
right: 0;
top: 0;
display: inline-block;
height: 60px;
background-color: #fd7062;
color: #fff;
text-align: center;
padding: 0px 25px;
font-size: 16px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

header .header-right-element .search-box form button:hover {
background-color: #4ab9cf;
color: #fff;
}

@media (max-width: 767px) {
.header-btn .theme-btn {
    padding: 13px 25px;
    font-size: 12px;
}
}

.top-bar-wrapper {
background-color: #1270b6;
padding: 10px 0px;
}

.top-bar-wrapper .top-left a {
color: #fff;
margin-right: 30px;
font-size: 15px;
}

@media (max-width: 991px) {
.top-bar-wrapper .top-left a {
    margin-right: 10px;
}
}

@media (max-width: 585px) {
.top-bar-wrapper .top-left a {
    font-size: 13px;
}
}

.top-bar-wrapper .top-left a i {
color: #4ab9cf;
padding-right: 8px;
}

.top-bar-wrapper .social-pages a {
color: #FFF;
margin-left: 15px;
font-weight: 400;
}

.top-bar-wrapper .social-pages a:hover {
color: #4ab9cf;
}

.multi_lang {
color: #FFF;
margin-left: 15px;
font-weight: 400;
}

.multi_lang:hover {
color: #4ab9cf;
}

.top-bar-header {
background: #74c0fc1c;
padding: 9px 0px;
}

@media (max-width: 767px) {
.top-bar-header {
    padding: 12px 0px;
}
.top-bar-header .d-flex.justify-content-end {
    -webkit-box-pack: center !;
        -ms-flex-pack: center !;
            justify-content: center !;
}
}

.top-bar-header .top-welcome-text {
text-transform: capitalize;
}

.top-bar-header .top-welcome-text p {
font-size: 16px;
font-weight: 500;
line-height: 1;
}

@media (max-width: 767px) {
.top-bar-header .top-welcome-text p {
    font-size: 14px;
}
}

.top-bar-header .social-links {
margin-left: 30px;
margin-right: 10px;
}

.top-bar-header .social-links a {
display: inline-block;
margin: 0px 6px;
color: #1270b6;
}

.top-bar-header .social-links a:hover {
color: #4ab9cf;
}

.top-bar-header .search-box {
overflow: hidden;
position: relative;
border-radius: 30px;
border: 1px solid #f9f9f9;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
}

.top-bar-header .search-box form {
position: relative;
}

.top-bar-header .search-box form input {
height: 36px;
width: 100%;
padding: 0px 15px;
font-size: 14px;
color: #1270b6;
}

.top-bar-header .search-box form button {
background: transparent;
position: absolute;
right: 10px;
color: #1270b6;
border: 0px;
top: 0;
line-height: 36px;
font-size: 14px;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

.top-bar-header .search-box form button:hover {
color: #4ab9cf;
}

.action-bar .single-info-element {
margin-bottom: 25px;
}

.action-bar .single-info-element .icon {
color: #FFF;
font-size: 26px;
margin-right: 12px;
}

.action-bar .single-info-element h5 {
font-size: 15px !;
font-weight: 600;
}

.action-bar .single-info-element span {
font-size: 15px !;
}

.action-bar .call-us .icon {
font-size: 26px;
}

.action-bar .call-us span {
font-size: 15px !;
}

.single-info-element {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
}

.single-info-element .icon {
float: left;
overflow: hidden;
margin-right: 15px;
font-size: 36px;
color: #fd7062;
}

.single-info-element .text {
overflow: auto;
}

.single-info-element .text h5 {
margin-bottom: 0px;
font-size: 16px;
text-transform: capitalize;
margin-top: -4px;
margin-bottom: -1px;
}

.single-info-element .text span {
font-size: 16px;
line-height: 1;
margin-top: -2px;
}

.call-us {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
}

.call-us .icon {
float: left;
overflow: hidden;
margin-right: 15px;
font-size: 36px;
color: #4ab9cf;
}

.call-us .text {
overflow: auto;
}

.call-us .text h5 {
margin-bottom: 3px;
text-transform: capitalize;
margin-top: -3px;
font-weight: 500;
font-size: 14px;
}

.call-us .text span {
font-size: 22px;
line-height: 1;
}

.marque {
margin: 10px;
position: relative;
background-repeat: no-repeat !;
background-size: contain !;
background-position: center;
width: 100%;
height: 30px;
border-radius: 7px;
}

.page-banner-wrap {
background-color: #1270b6;
padding-top: 115px;
padding-bottom: 105px;
position: relative;
z-index: 1;
background-repeat: no-repeat;
background-position: bottom;
background-size: cover;
}

@media (max-width: 991px) {
.page-banner-wrap {
    padding-top: 110px;
    padding-bottom: 90px;
}
}

@media (max-width: 767px) {
.page-banner-wrap {
    padding-top: 100px;
    padding-bottom: 80px;
}
}

@media (max-width: 500px) {
.page-banner-wrap {
    padding-top: 80px;
    padding-bottom: 70px;
}
}

.page-banner-wrap::before, .page-banner-wrap::after {
position: absolute;
left: 0;
content: "";
top: 0;
background: #1270b6;
width: 100%;
height: 100%;
opacity: .15;
z-index: -1;
}

.page-banner-wrap h1 {
text-transform: capitalize;
}

.breadcrumb-wrapper {
background-color: #f8f8f8;
padding: 20px 0px;
color: #4ab9cf;
}

.breadcrumb-wrapper a:hover {
color: #4ab9cf;
}

.breadcrumb-wrapper .breadcrumb {
background: transparent;
padding: 0;
margin: 0;
}

.breadcrumb-wrapper .breadcrumb .breadcrumb-item {
font-size: 15px;
font-weight: 500;
text-transform: capitalize;
}

.breadcrumb-wrapper .breadcrumb .breadcrumb-item a {
color: #4ab9cf;
font-weight: 500;
}

.breadcrumb-wrapper .breadcrumb .breadcrumb-item a:hover {
color: #1270b6;
}

.breadcrumb-wrapper .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
content: "\f054";
font-family: "Font Awesome 5 Pro";
font-size: 14px;
}

.mobile-nav {
position: fixed;
right: -380px;
top: 0;
width: 320px;
height: 100vh;
scroll-behavior: smooth;
overflow-y: scroll;
-webkit-transition: right .5s ease-in;
transition: right .5s ease-in;
background-color: #1270b6;
padding: 20px;
z-index: 9999;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
/* Vertical Menu Style */
}

.mobile-nav.show {
right: 0px;
}

.mobile-nav .close-nav {
border: 0;
background: transparent;
color: #fff;
border-radius: 30px;
font-size: 20px;
position: absolute;
left: 20px;
top: 10px;
}

.mobile-nav .sidebar-nav {
margin-top: 30px;
}

.mobile-nav .sidebar-nav ul {
margin: 0;
padding: 0;
list-style: none;
background-color: transparent;
}

.mobile-nav .sidebar-nav .metismenu {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
}

.mobile-nav .sidebar-nav .metismenu > li {
position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
    -ms-flex-direction: column;
        flex-direction: column;
}

.mobile-nav .sidebar-nav .metismenu a {
position: relative;
display: block;
padding: 10px 15px;
-webkit-transition: all .3s ease-out;
transition: all .3s ease-out;
text-decoration: none;
color: #fff;
outline-width: 0;
text-transform: capitalize;
border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.mobile-nav .sidebar-nav .metismenu ul a {
padding: 10px 15px 10px 35px;
position: relative;
}

.mobile-nav .sidebar-nav .metismenu ul a:hover {
padding-left: 40px;
}

.mobile-nav .sidebar-nav .metismenu ul a:hover::before {
background-color: #fff;
}

.mobile-nav .sidebar-nav .metismenu ul a::before {
position: absolute;
left: 15px;
width: 10px;
height: 10px;
border-radius: 50%;
border: 2px solid #fff;
content: "";
top: 50%;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
}

.mobile-nav .sidebar-nav .metismenu ul ul {
list-style-type: circle !;
}

.mobile-nav .sidebar-nav .metismenu ul ul a {
padding: 10px 15px 10px 45px;
}

.mobile-nav .sidebar-nav .metismenu a:hover,
.mobile-nav .sidebar-nav .metismenu a:focus,
.mobile-nav .sidebar-nav .metismenu a:active {
text-decoration: none;
color: #f8f9fa;
background: #1270b6;
}

#hamburger {
color: #1270b6;
font-size: 32px;
line-height: 1;
text-align: right;
display: none;
}

#hamburger i {
cursor: pointer;
}

@media (max-width: 991px) {
#hamburger {
    display: block;
}
}

.action-bar {
margin-top: 30px;
padding-left: 20px;
}

.action-bar a {
color: #fff;
display: block;
}

.action-bar a i {
margin-right: 10px;
}

.action-bar a.theme-btn {
text-align: center;
}

/* ---------------------------------
    Offset Canvas Menu Style 
------------------------------------*/
.offset-menu {
position: fixed;
height: 100vh;
top: 0;
z-index: 9999999;
opacity: 0;
visibility: hidden;
right: -30%;
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
background-color: #4ab9cf;
-webkit-box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
        box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
}

.offset-menu.show {
opacity: 1;
visibility: visible;
right: 0;
}

.offset-menu .offset-menu-wrapper {
width: 360px;
padding: 80px 30px;
}

.offset-menu .theme-btn {
padding: 20px 45px;
font-weight: 500;
margin-top: 40px;
}

.offset-menu .offset-menu-section {
margin-top: 40px;
}

.offset-menu .offset-menu-section h3, .offset-menu .offset-menu-section h4, .offset-menu .offset-menu-section h5 {
line-height: 1;
margin-bottom: 20px;
}

.offset-menu .offset-menu-section a {
margin-bottom: 10px;
}

.offset-menu .offset-menu-section ul li {
margin-bottom: 5px;
}

.offset-menu .offset-menu-section ul li span {
margin-right: 10px;
}

.offset-menu #offset-menu-close-btn {
position: fixed;
right: 30px;
font-size: 28px;
-webkit-transform: rotate(45deg);
        transform: rotate(45deg);
color: #fff;
cursor: pointer;
-webkit-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
z-index: 9;
top: 20px;
}

.offset-menu #offset-menu-close-btn:hover {
color: #1270b6;
}

.offset-menu .offset-menu-footer {
margin-top: 35px;
}

.offset-menu .offset-menu-social-icon a {
font-size: 16px;
background: #4ab9cf;
display: inline-block;
border-radius: 50%;
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
margin-right: 5px;
}

.offset-menu .offset-menu-social-icon a:hover {
background: #1270b6;
}

.offset-menu img {
display: inline-block;
background: #fff;
padding: 10px 20px;
}

/* ----------------------------------
Hero Section - Styles
------------------------------------ */
.hero-1 .single-slide {
padding-top: 160px;
padding-bottom: 200px;
background-position: top center;
overflow: hidden;
position: relative;
z-index: 1;
}

@media (max-width: 991px) {
.hero-1 .single-slide {
    padding-top: 140px;
    padding-bottom: 130px;
}
}

@media (max-width: 767px) {
.hero-1 .single-slide {
    padding-top: 100px;
    padding-bottom: 120px;
}
}

.hero-1 .single-slide .slide-bg {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: -1;
}

.hero-1 .single-slide .slide-bg::before, .hero-1 .single-slide .slide-bg::after {
position: absolute;
width: 100%;
left: 0;
top: 0;
height: 100%;
content: "";
background-color: #1270b6;
opacity: 0.15;
z-index: 2;
}

.hero-1 .single-slide .hero-contents {
position: relative;
z-index: 2;
}

.hero-1 .single-slide .hero-contents h1 {
text-transform: capitalize;
}

@media (max-width: 767px) {
.hero-1 .single-slide .hero-contents h1 {
    font-size: 40px;
}
}

.hero-1 .single-slide .hero-contents h1 span {
color: #fd7062 !;
text-decoration: underline;
}

.hero-1 .single-slide .hero-contents p {
margin-top: 50px;
display: block;
}

@media (max-width: 767px) {
.hero-1 .single-slide .hero-contents p {
    margin-top: 30px;
}
}

.hero-1 .slide-pop-video-box-wrapper {
position: absolute;
right: 0;
bottom: 0;
width: 400px;
height: 130px;
background-color: #fd7062;
}

@media (max-width: 767px) {
.hero-1 .slide-pop-video-box-wrapper {
    height: 90px;
    width: 300px;
}
}

.hero-1 .slide-pop-video-box-wrapper .text h6 {
margin-bottom: 0;
padding-left: 30px;
font-size: 16px;
text-transform: capitalize;
}

@media (max-width: 767px) {
.hero-1 .slide-pop-video-box-wrapper .text h6 {
    font-size: 13px;
    padding-left: 15px;
}
}

.hero-1 .slide-pop-video-box-wrapper .video-wrapper {
position: absolute;
right: 0;
top: 0;
height: 100%;
width: 45%;
z-index: 1;
}

.hero-1 .slide-pop-video-box-wrapper .video-wrapper a {
font-size: 18px;
}

.hero-1 .single-slide [data-animation-in] {
opacity: 0;
-webkit-animation-duration: 1s;
        animation-duration: 1s;
-webkit-transition: opacity 0.5s ease 0.3s;
transition: opacity 0.5s ease 0.3s;
-webkit-transition: 1s;
transition: 1s;
}

.hero-1 .slick-nav {
width: 44px;
height: 44px;
position: absolute;
cursor: pointer;
top: calc(50% - 44px);
}

.hero-1 .slick-nav.prev-arrow {
left: 3%;
-webkit-transform: scaleX(-1);
        transform: scaleX(-1);
z-index: 999;
}

.hero-1 .slick-nav.next-arrow {
left: auto;
right: 3%;
}

.hero-1 .slick-nav i {
display: block;
position: absolute;
margin: -10px 0 0 -10px;
width: 20px;
height: 20px;
left: 50%;
top: 50%;
}

.hero-1 .slick-nav i:before, .hero-1 .slick-nav i:after {
content: "";
width: 10px;
height: 2px;
border-radius: 1px;
position: absolute;
left: 50%;
top: 50%;
background: #fff;
margin: -1px 0 0 -5px;
display: block;
-webkit-transform-origin: 9px 50%;
        transform-origin: 9px 50%;
}

.hero-1 .slick-nav i:before {
-webkit-transform: rotate(-40deg);
        transform: rotate(-40deg);
}

.hero-1 .slick-nav i:after {
-webkit-transform: rotate(40deg);
        transform: rotate(40deg);
}

.hero-1 .slick-nav::before, .hero-1 .slick-nav::after {
content: "";
display: block;
position: absolute;
left: 1px;
right: 1px;
top: 1px;
bottom: 1px;
border-radius: 50%;
border: 2px solid rgba(255, 255, 255, 0.12);
}

.hero-1 .slick-nav svg {
width: 44px;
height: 44px;
display: block;
position: relative;
z-index: 1;
color: #fff;
stroke-width: 2px;
stroke-dashoffset: 126;
stroke-dasharray: 126 126 0;
-webkit-transform: rotate(0deg);
        transform: rotate(0deg);
}

.hero-1 .slick-nav.animate svg {
-webkit-animation: stroke 1s ease forwards 0.3s;
        animation: stroke 1s ease forwards 0.3s;
}

.hero-1 .slick-nav.animate i {
-webkit-animation: arrow 1.6s ease forwards;
        animation: arrow 1.6s ease forwards;
}

.hero-1 .slick-nav.animate i:before {
-webkit-animation: arrowUp 1.6s ease forwards;
        animation: arrowUp 1.6s ease forwards;
}

.hero-1 .slick-nav.animate i:after {
-webkit-animation: arrowDown 1.6s ease forwards;
        animation: arrowDown 1.6s ease forwards;
}

.hero-1 .animated {
-webkit-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}

.hero-2 .single-slide {
padding-top: 135px;
padding-bottom: 250px;
background-position: center;
z-index: 1;
position: relative;
}

@media (max-width: 991px) {
.hero-2 .single-slide {
    padding-top: 100px;
    padding-bottom: 200px;
}
}

@media (max-width: 767px) {
.hero-2 .single-slide {
    padding-top: 80px;
    padding-bottom: 160px;
}
}

.hero-2 .single-slide::before {
top: 0;
left: 0;
z-index: -1;
width: 100%;
height: 100%;
content: '';
position: absolute;
background: rgba(31, 66, 93, 0.6);
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.hero-2 .single-slide .hero-contents h1 {
color: #fff;
line-height: 1;
font-size: 100px;
text-transform: capitalize;
}

@media (max-width: 767px) {
.hero-2 .single-slide .hero-contents h1 {
    font-size: 60px;
}
}

.hero-2 .single-slide .hero-contents h1 span {
display: block;
color: #4ab9cf;
-webkit-text-fill-color: transparent;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #4ab9cf;
}

.hero-2 .single-slide .hero-contents p {
color: #fff;
margin-top: 30px;
}

@media (max-width: 767px) {
.hero-2 .single-slide .hero-contents p {
    font-size: 15px;
    margin-top: 20px;
    line-height: 25px;
}
}

.hero-2 .single-slide .hero-contents a {
margin-top: 30px;
background-color: #fd7062;
border-color: #fd7062;
}

@media (max-width: 767px) {
.hero-2 .single-slide .hero-contents a {
    font-size: 14px;
}
}

.hero-2 .single-slide .hero-contents a i {
margin-left: 6px;
}

.hero-2 .single-slide .hero-contents a:hover {
background-color: #4ab9cf;
border-color: #4ab9cf;
}

.hero-2 .site-watermark-icon {
position: absolute;
right: 10%;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
z-index: -1;
opacity: 0.5;
}

.hero-2 .single-slide [data-animation-in] {
opacity: 0;
-webkit-animation-duration: 1.5s;
        animation-duration: 1.5s;
-webkit-transition: opacity 0.5s ease 0.3s;
transition: opacity 0.5s ease 0.3s;
-webkit-transition: 1s;
transition: 1s;
}

.hero-2 .slick-nav {
width: 44px;
height: 44px;
position: absolute;
cursor: pointer;
top: calc(50% - 44px);
}

.hero-2 .slick-nav.prev-arrow {
left: 3%;
-webkit-transform: scaleX(-1);
        transform: scaleX(-1);
z-index: 999;
}

.hero-2 .slick-nav.next-arrow {
left: auto;
right: 3%;
}

.hero-2 .slick-nav i {
display: block;
position: absolute;
margin: -10px 0 0 -10px;
width: 20px;
height: 20px;
left: 50%;
top: 50%;
}

.hero-2 .slick-nav i:before, .hero-2 .slick-nav i:after {
content: "";
width: 10px;
height: 2px;
border-radius: 1px;
position: absolute;
left: 50%;
top: 50%;
background: #fff;
margin: -1px 0 0 -5px;
display: block;
-webkit-transform-origin: 9px 50%;
        transform-origin: 9px 50%;
}

.hero-2 .slick-nav i:before {
-webkit-transform: rotate(-40deg);
        transform: rotate(-40deg);
}

.hero-2 .slick-nav i:after {
-webkit-transform: rotate(40deg);
        transform: rotate(40deg);
}

.hero-2 .slick-nav::before, .hero-2 .slick-nav::after {
content: "";
display: block;
position: absolute;
left: 1px;
right: 1px;
top: 1px;
bottom: 1px;
border-radius: 50%;
border: 2px solid rgba(255, 255, 255, 0.12);
}

.hero-2 .slick-nav svg {
width: 44px;
height: 44px;
display: block;
position: relative;
z-index: 1;
color: #fff;
stroke-width: 2px;
stroke-dashoffset: 126;
stroke-dasharray: 126 126 0;
-webkit-transform: rotate(0deg);
        transform: rotate(0deg);
}

.hero-2 .slick-nav.animate svg {
-webkit-animation: stroke 1s ease forwards 0.3s;
        animation: stroke 1s ease forwards 0.3s;
}

.hero-2 .slick-nav.animate i {
-webkit-animation: arrow 1.6s ease forwards;
        animation: arrow 1.6s ease forwards;
}

.hero-2 .slick-nav.animate i:before {
-webkit-animation: arrowUp 1.6s ease forwards;
        animation: arrowUp 1.6s ease forwards;
}

.hero-2 .slick-nav.animate i:after {
-webkit-animation: arrowDown 1.6s ease forwards;
        animation: arrowDown 1.6s ease forwards;
}

.hero-2 .animated {
-webkit-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}

.hero-3 {
position: relative;
}

.hero-3 .single-slide {
padding: 200px 0px 185px;
overflow: hidden;
z-index: 1;
position: relative;
}

@media (max-width: 1300px) {
.hero-3 .single-slide {
    padding: 150px 0px 135px;
}
}

@media (max-width: 991px) {
.hero-3 .single-slide {
    padding: 100px 0px;
}
}

.hero-3 .single-slide::before {
top: 0;
left: 0;
z-index: -1;
width: 100%;
height: 100%;
content: '';
position: absolute;
background: rgba(31, 66, 93, 0.7);
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.hero-3 .single-slide .hero-contents {
position: relative;
}

.hero-3 .single-slide .hero-contents h1 {
color: #fff;
font-size: 90px;
margin-top: -10px;
line-height: 1.3;
text-transform: capitalize;
}

@media (max-width: 991px) {
.hero-3 .single-slide .hero-contents h1 {
    font-size: 70px;
}
}

@media (max-width: 767px) {
.hero-3 .single-slide .hero-contents h1 {
    font-size: 48px;
}
}

@media (max-width: 500px) {
.hero-3 .single-slide .hero-contents h1 {
    font-size: 40px;
}
}

.hero-3 .single-slide .hero-contents p {
color: #fff;
font-size: 20px;
font-weight: 500;
margin-bottom: 30px;
position: relative;
padding-left: 40px;
display: inline-block;
}

@media (max-width: 991px) {
.hero-3 .single-slide .hero-contents p {
    font-size: 18px;
}
}

@media (max-width: 767px) {
.hero-3 .single-slide .hero-contents p::before, .hero-3 .single-slide .hero-contents p::after {
    display: none !;
}
}

.hero-3 .single-slide .hero-contents p::before {
border-radius: 50%;
width: 9px;
height: 9px;
background-color: #fff;
content: "";
left: 6px;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
position: absolute;
display: inline-block;
}

.hero-3 .single-slide .hero-contents p::after {
border-radius: 50%;
width: 21px;
height: 21px;
background-color: transparent;
content: "";
left: 0;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
position: absolute;
display: inline-block;
border: 2px solid #fff;
}

.hero-3 .single-slide .hero-contents a {
margin-top: 35px;
margin-right: 20px;
color: #fff;
}

@media (max-width: 991px) {
.hero-3 .single-slide .hero-contents a {
    margin-top: 25px;
    margin-right: 15px;
}
}

@media (max-width: 767px) {
.hero-3 .single-slide .hero-contents a {
    margin-right: 5px;
}
}

.hero-3 .slick-dots {
position: absolute;
bottom: 25px;
list-style: none;
display: block;
text-align: center;
padding: 0;
margin: 0;
width: 100%;
}

.hero-3 .slick-dots li {
position: relative;
display: inline-block;
margin: 0 5px;
padding: 0;
cursor: pointer;
}

.hero-3 .slick-dots li button {
border: 0;
display: block;
outline: none;
line-height: 0px;
font-size: 0px;
color: transparent;
padding: 5px;
cursor: pointer;
-webkit-transition: all 0.3s ease;
transition: all 0.3s ease;
}

.hero-3 .slick-dots li button:hover, .hero-3 .slick-dots li button:focus {
outline: none;
}

.hero-3 .transland-dots .slick-dots li {
height: 3px;
width: 50px;
}

.hero-3 .transland-dots .slick-dots li button {
position: relative;
background-color: white;
opacity: 0.25;
width: 50px;
height: 3px;
padding: 0;
}

.hero-3 .transland-dots .slick-dots li button:hover, .hero-3 .transland-dots .slick-dots li button:focus {
opacity: 1;
}

.hero-3 .transland-dots .slick-dots li.slick-active button {
color: white;
opacity: 0.75;
}

.hero-3 .transland-dots .slick-dots li.slick-active button:hover, .hero-3 .transland-dots .slick-dots li.slick-active button:focus {
opacity: 1;
}

.hero-3 .single-slide [data-animation-in] {
opacity: 0;
-webkit-animation-duration: 1.8s;
        animation-duration: 1.8s;
-webkit-transition: opacity 0.6s ease 0.4s;
transition: opacity 0.6s ease 0.4s;
-webkit-transition: 1.2s;
transition: 1.2s;
}

.hero-3 .animated {
-webkit-transition: all 0.8s ease-in-out;
transition: all 0.8s ease-in-out;
}

.section-padding {
padding: 120px 0px;
padding-top: 50px;
}

@media (max-width: 1191px) {
.section-padding {
    padding: 100px 0px;
}
}

@media (max-width: 767px) {
.section-padding {
    padding: 80px 0px;
}
}

.section-title-2 {
padding-bottom: 10px;
}

.section-title-2 span {
text-transform: capitalize;
display: block;
color: #fd7062;
-webkit-text-fill-color: transparent;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #fd7062;
font-size: 24px;
font-weight: 700;
margin-bottom: 10px;
}

@media (max-width: 767px) {
.section-title-2 span {
    font-size: 22px;
    margin-bottom: 5px;
}
}

.section-title-2 h1 {
text-transform: capitalize;
}

@media (max-width: 767px) {
.section-title-2 h1 {
    font-size: 32px;
}
}

.block-contents .section-title {
position: relative;
margin-top: -10px;
}

.block-contents .section-title h5 {
font-size: 150px;
line-height: 1;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #1270b6;
-webkit-text-fill-color: transparent;
opacity: .10;
margin-bottom: 0;
position: absolute;
-webkit-transform: translateX(-50%);
        transform: translateX(-50%);
left: 50%;
top: -83px;
font-weight: 700;
text-transform: capitalize;
z-index: -1;
letter-spacing: -4px;
}

.block-contents .section-title h5.relative {
position: relative;
margin-bottom: -68px;
top: inherit;
}

@media (max-width: 991px) {
.block-contents .section-title h5.relative {
    margin-bottom: -55px;
}
}

@media (max-width: 767px) {
.block-contents .section-title h5.relative {
    margin-bottom: -45px;
}
}

.block-contents .section-title h5.textleft {
left: 0px !;
-webkit-transform: translateX(-5px);
        transform: translateX(-5px);
}

.block-contents .section-title h5.text-white {
-webkit-text-stroke-color: #FFF;
}

@media (max-width: 991px) {
.block-contents .section-title h5 {
    font-size: 100px;
    top: -45px;
}
}

@media (max-width: 767px) {
.block-contents .section-title h5 {
    font-size: 80px;
    top: -35px;
}
}

.block-contents .section-title > span {
/* font-weight: 700; */
text-transform: capitalize;
color: #fd7062;
font-size: 14px;
position: relative;
padding-left: 80px;
line-height: 1;
font-family: "Poppins", cursive;
}

.block-contents .section-title > span::before {
position: absolute;
left: 0;
width: 60px;
height: 2px;
background-color: #fd7062;
content: "";
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
}

.block-contents .section-title h2 {
font-size: 60px;
line-height: 1.3;
text-transform: capitalize;
}

@media (max-width: 1191px) {
.block-contents .section-title h2 {
    font-size: 46px;
}
}

@media (max-width: 767px) {
.block-contents .section-title h2 {
    font-size: 38px;
}
}

@media (max-width: 500px) {
.block-contents .section-title h2 {
    font-size: 32px;
}
}

.block-contents .section-title h2 span {
color: #4ab9cf;
}

.block-contents p {
margin-top: 15px;
}

.block-contents blockquote {
border-left: 5px solid #4ab9cf;
font-style: italic;
padding-left: 20px;
color: #1270b6;
font-size: 20px;
font-weight: 500;
margin-top: 30px;
margin-bottom: 20px;
}

.section-bg {
background-color: #f7f7f7;
}

.theme-bg {
background-color: #1270b6;
}

.theme-bg .section-title h5 {
-webkit-text-stroke-color: #FFF;
}

.theme-bg .section-title h2 {
color: #FFF;
}

.about-info-contents {
position: relative;
background-color: #f7f7f7;
padding: 30px;

/* padding-bottom: 70px; */
/* margin-top: 10px; */
}

.about-info-contents p {
margin-bottom: 15px;
}

@media (max-width: 767px) {
.about-img img {
    width: 70%;
}
}

.company-ceo {
background-color: #fff;
-webkit-box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.04);
        box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.04);
position: relative;
padding: 15px;
margin-right: 50px;
margin-top: -40px;
}

@media (max-width: 767px) {
.company-ceo {
    margin-right: 0;
}
}

.company-ceo .ceo-img {
width: 70px;
height: 70px;
float: left;
overflow: hidden;
background-color: #eee;
margin-right: 20px;
}

.company-ceo .ceo-info {
overflow: hidden;
}

.company-ceo .ceo-info h5 {
margin-bottom: 0;
}

.company-ceo .autograph-signature {
position: absolute;
right: 50px;
top: -30px;
}

@media (max-width: 767px) {
.company-ceo .autograph-signature {
    right: 0px;
    top: auto;
    bottom: -30px;
}
}

@media (max-width: 767px) {
.company-ceo .autograph-signature img {
    width: 70%;
    margin-right: -10px;
}
}

.about-img-gallery {
position: relative;
}

.about-img-gallery .about-img-left {
border-style: solid;
border-width: 6px;
border-color: white;
background-color: #ebebeb;
-webkit-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.2);
width: 188px;
height: 188px;
position: absolute;
z-index: 1;
top: -30px;
}

@media (max-width: 767px) {
.about-img-gallery .about-img-left {
    width: 120px;
    height: 120px;
}
}

.about-img-gallery .about-img-center {
width: 75%;
height: 550px;
position: relative;
z-index: 0;
background-color: #eee;
margin: 0px auto;
}

@media (max-width: 767px) {
.about-img-gallery .about-img-center {
    width: 85%;
}
}

.about-img-gallery .about-img-right {
border-style: solid;
border-width: 10px;
border-color: white;
background-color: #ebebeb;
-webkit-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.1);
width: 300px;
height: 300px;
position: absolute;
z-index: 1;
right: 0;
bottom: 0;
}

@media (max-width: 767px) {
.about-img-gallery .about-img-right {
    width: 180px;
    height: 180px;
}
}

.about-ceo {
margin-top: 40px;
position: relative;
}

.about-ceo .ceo-img {
width: 70px;
height: 70px;
float: left;
overflow: hidden;
background-color: #eee;
margin-right: 20px;
border-radius: 50%;
}

.about-ceo .ceo-info {
overflow: hidden;
}

.about-ceo .ceo-info h5 {
margin-bottom: 0;
}

.about-ceo .autograph-signature {
position: absolute;
right: 50px;
top: 0;
}

@media (max-width: 767px) {
.about-ceo .autograph-signature {
    right: 0px;
}
}

@media (max-width: 575px) {
.about-ceo .autograph-signature {
    position: relative;
}
.about-ceo .autograph-signature img {
    max-width: 30%;
    margin-top: 10px;
}
}

.single-request-element {
margin-top: 40px;
}

@media (max-width: 767px) {
.single-request-element {
    text-align: center;
    margin-top: 30px;
}
}

.single-request-element .icon {
font-size: 40px;
}

.single-request-element h6 {
margin-top: 20px;
margin-bottom: 0;
font-size: 17px;
text-transform: capitalize;
}

.single-features-box {
padding: 50px 40px;
position: relative;
overflow: hidden;
z-index: 1;
background-color: #fff;
}

.single-features-box:hover .icon {
color: #fd7062;
}

.single-features-box .icon {
color: #4ab9cf;
font-size: 54px;
line-height: 1;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

@media (max-width: 767px) {
.single-features-box .icon {
    font-size: 42px;
}
}

.single-features-box .contents h4 {
margin: 20px 0px;
}

.single-feature-item {
margin-top: 30px;
padding: 0px 40px;
}

.single-feature-item .icon {
margin-bottom: 30px;
}

@media (max-width: 767px) {
.single-feature-item .icon {
    margin-bottom: 20px;
}
}

.single-feature-item .content h2 {
font-size: 40px;
text-transform: capitalize;
margin-bottom: 0px;
}

@media (max-width: 767px) {
.single-feature-item .content h2 {
    font-size: 30px;
}
}

.single-feature-item .content span {
font-weight: 500;
font-size: 20px;
color: #4ab9cf;
}

@media (max-width: 767px) {
.single-feature-item .content span {
    font-size: 16px;
}
}

.single-feature-item .content p {
margin-top: 20px;
font-size: 16px;
}

@media (max-width: 767px) {
.single-feature-item .content p {
    font-size: 16px;
    margin-top: 15px;
}
}

.work-steps-list {
counter-reset: css-counter 0;
}

.work-steps-list .col-12, .work-steps-list .col-md-6 {
counter-increment: css-counter 1;
}

.work-steps-list .single-work-steps {
text-align: center;
padding: 0px 20px;
margin-top: 30px;
}

.work-steps-list .single-work-steps .icon {
width: 160px;
height: 160px;
line-height: 160px;
border-radius: 50%;
background-color: #fff;
position: relative;
margin: 0 auto;
display: inline-block;
-webkit-box-shadow: 0px 10px 40px 0px rgba(0, 0, 0, 0.06);
        box-shadow: 0px 10px 40px 0px rgba(0, 0, 0, 0.06);
margin-bottom: 30px;
}

.work-steps-list .single-work-steps .icon::before {
content: counter(css-counter);
position: absolute;
width: 50px;
height: 50px;
background: #fff;
border: 1px solid #4ab9cf;
border-radius: 50px;
color: #4ab9cf;
font-weight: 700;
font-size: 18px;
line-height: 50px;
text-align: center;
font-family: "Poppins", cursive;
right: 0;
}

.work-steps-list .single-work-steps .content h4 {
text-transform: capitalize;
}

.work-steps-list .single-work-steps .content p {
font-size: 16px;
}

.services-carousel-active {
/* overflow: hidden; */
/* the slides */
/* the parent */
}

@media (min-width: 1220px) {
.services-carousel-active {
    margin-right: calc(-100vw / 2 + 1100px / 2);
}
}

.services-carousel-active .slick-slide {
margin: 0 15px;
}

.services-carousel-active .slick-list {
margin: 0 -15px;
}

.services-carousel-nav-prev, .services-carousel-nav-next {
display: inline-block;
height: 60px;
width: 60px;
text-align: center;
color: #FFF;
background-color: #fd7062;
line-height: 60px;
font-size: 18px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
cursor: pointer;
}

@media (max-width: 767px) {
.services-carousel-nav-prev, .services-carousel-nav-next {
    width: 50px;
    height: 45px;
    line-height: 45px;
    font-size: 15px;
}
}

.services-carousel-nav-prev.slick-disabled, .services-carousel-nav-next.slick-disabled {
background-color: #b8b8b8 !;
}

.services-carousel-nav-prev:hover, .services-carousel-nav-next:hover {
background-color: #4ab9cf;
}

.single-service-card {
margin-top: 30px !;
}

.single-service-card .service-banner-img {
background-position: center;
height: 300px;
background-color: #eee;
}

.single-service-card .service-banner-img:hover {
transform: scale(1.2);
}

.single-service-card .content {
border-style: solid;
border-width: 1px;
border-color: #2f536e;
padding: 20px 30px;
border-top: 0px;
}

.single-service-card .content h3 {
color: #fff;
font-weight: 600;
}

.single-service-card .content p {
color: #f8f8f8;
font-size: 16px;
}

.single-freight-service {
padding: 50px;
padding-top: 45px;
background-color: #fff;
position: relative;
margin-top: 30px;
-webkit-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
z-index: 1;
}

.single-freight-service::before {
position: absolute;
left: 0;
bottom: 0;
width: 0%;
height: 2px;
opacity: 0;
visibility: hidden;
content: "";
background-color: #fd7062;
-webkit-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
}

.single-freight-service.active, .single-freight-service:hover {
-webkit-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.06);
        box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.06);
}

.single-freight-service.active::before, .single-freight-service:hover::before {
opacity: 1;
visibility: visible;
width: 100%;
}

.single-freight-service.active .icon, .single-freight-service:hover .icon {
right: 10px;
opacity: .95;
visibility: visible;
}

.single-freight-service h3 {
text-transform: capitalize;
}

.single-freight-service h3:hover a {
color: #4ab9cf;
}

.single-freight-service .icon {
font-size: 140px;
position: absolute;
right: 40px;
top: 10px;
z-index: -1;
color: #f7f7f7;
opacity: 0;
visibility: hidden;
-webkit-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
font-weight: 300;
}

.single-freight-service .checked-list {
margin-top: 25px;
}

.single-freight-service .checked-list li {
color: #1270b6;
font-size: 16px;
}

.single-our-service {
position: relative;
margin-top: 30px;
}

.single-our-service::before {
position: absolute;
left: 0;
bottom: 0;
content: "";
width: 100%;
height: 100%;
background-image: -webkit-gradient(linear, left bottom, left top, from(#4ab9cf), color-stop(65%, rgba(33, 30, 59, 0.5)), to(rgba(33, 30, 59, 0)));
background-image: linear-gradient(0deg, #4ab9cf 0%, rgba(33, 30, 59, 0.5) 65%, rgba(33, 30, 59, 0) 100%);
}

.single-our-service .thumb {
height: 370px;
position: relative;
background-color: #eee;
z-index: -1;
background-position: top center;
}

@media (max-width: 757px) {
.single-our-service .thumb {
    height: 270px;
}
}

.single-our-service .thumb::after {
position: absolute;
left: 0;
bottom: 0;
content: "";
width: 100%;
height: 100%;
background-image: -webkit-gradient(linear, left bottom, left top, from(#1270b6), color-stop(65%, rgba(31, 66, 93, 0.2)), to(rgba(31, 66, 93, 0)));
background-image: linear-gradient(0deg, #1270b6 0%, rgba(31, 66, 93, 0.2) 65%, rgba(31, 66, 93, 0) 100%);
z-index: -1;
}

.single-our-service .content {
margin-top: -90px;
position: relative;
z-index: 1;
padding: 30px;
padding-top: 0;
border: 1px solid rgba(31, 66, 93, 0.3);
border-top: 0px;
}

.single-our-service .content .icon {
font-size: 60px;
line-height: 1;
margin-bottom: 20px;
color: #fff;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.single-our-service .content h3 {
margin-bottom: 10px;
color: #fff;
text-transform: capitalize;
}

.single-our-service .content h3:hover a {
color: #1270b6;
}

@media (max-width: 757px) {
.single-our-service .content h3 {
    font-size: 20px;
}
}

.single-our-service .content p {
color: #fff;
}

@media (max-width: 757px) {
.single-our-service .content p {
    font-size: 15px;
}
}

.our-services-box {
background-color: #fff;
-webkit-box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.06);
        box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.06);
position: relative;
margin-top: -90px;
z-index: 4;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.our-services-box .border-right {
position: relative;
}

@media (max-width: 585px) {
.our-services-box .border-right::before {
    position: absolute;
    content: "";
    left: 50%;
    bottom: 0;
    width: 70%;
    height: 1px;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    background: #ebebeb;
}
}

.our-services-box .border-right::after {
position: absolute;
content: "";
right: 0;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
width: 1px;
height: 50%;
background: #ebebeb;
}

@media (max-width: 585px) {
.our-services-box .border-right::after {
    display: none;
}
}

@media (max-width: 767px) {
.our-services-box .border-right:nth-of-type(2)::after, .our-services-box .border-right:nth-of-type(4)::after {
    display: none;
}
}

@media (max-width: 1199px) {
.our-services-box .border-right:nth-of-type(3)::after {
    display: none;
}
}

.our-services-box .border-right:last-of-type::after, .our-services-box .border-right:last-of-type::before {
display: none;
}

.our-services-box .single-service-icon {
text-align: center;
position: relative;
z-index: 2;
padding: 35px 0px 30px;
}

.our-services-box .single-service-icon:hover, .our-services-box .single-service-icon.active {
background-color: #4ab9cf;
}

.our-services-box .single-service-icon:hover::before, .our-services-box .single-service-icon.active::before {
top: -30px;
}

.our-services-box .single-service-icon:hover::after, .our-services-box .single-service-icon.active::after {
bottom: -30px;
}

.our-services-box .single-service-icon:hover::before, .our-services-box .single-service-icon:hover::after, .our-services-box .single-service-icon.active::before, .our-services-box .single-service-icon.active::after {
opacity: 1;
visibility: visible;
}

.our-services-box .single-service-icon:hover .content, .our-services-box .single-service-icon.active .content {
margin-bottom: 0px;
margin-top: -35px;
}

.our-services-box .single-service-icon:hover .icon, .our-services-box .single-service-icon.active .icon {
color: #FFF;
}

.our-services-box .single-service-icon:hover h6, .our-services-box .single-service-icon.active h6 {
color: #FFF;
}

.our-services-box .single-service-icon:hover .service-link, .our-services-box .single-service-icon.active .service-link {
visibility: visible;
opacity: 1;
}

.our-services-box .single-service-icon::before {
position: absolute;
left: 0;
top: 0px;
height: 30px;
width: 100%;
background-color: #4ab9cf;
content: "";
visibility: hidden;
opacity: 0;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.our-services-box .single-service-icon::after {
position: absolute;
left: 0;
bottom: 0px;
height: 30px;
width: 100%;
background-color: #4ab9cf;
content: "";
visibility: hidden;
opacity: 0;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.our-services-box .single-service-icon .content {
margin-bottom: -30px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
position: relative;
}

.our-services-box .single-service-icon .icon {
color: #4ab9cf;
font-size: 60px;
line-height: 1;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.our-services-box .single-service-icon h6 {
font-size: 14px;
text-transform: capitalize;
margin-bottom: 0px;
}

.our-services-box .single-service-icon .service-link {
border-radius: 50%;
width: 40px;
height: 40px;
line-height: 40px;
font-size: 14px;
color: #1270b6;
background-color: #FFF;
display: inline-block;
opacity: 0;
visibility: hidden;
position: relative;
margin-bottom: -35px;
margin-top: 15px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.our-services-box .single-service-icon .service-link:hover {
color: #fd7062;
}

.service-details-wrapper h1, .service-details-wrapper h2, .service-details-wrapper h3, .service-details-wrapper h4, .service-details-wrapper h6, .service-details-wrapper h5 {
font-weight: 600;
}

.service-details-wrapper p {
margin-bottom: 15px;
}

.service-details-contents .service-feature-img {
margin-bottom: 30px;
}

.service-details-contents .contents .single-service-features {
text-align: center;
-webkit-box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
background-color: #fff;
padding: 30px 20px;
margin-bottom: 40px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.service-details-contents .contents .single-service-features:hover {
background-color: #fd7062;
}

.service-details-contents .contents .single-service-features:hover .icon {
color: #FFF;
}

.service-details-contents .contents .single-service-features:hover h5, .service-details-contents .contents .single-service-features:hover p {
color: #fff;
}

.service-details-contents .contents .single-service-features .icon {
color: #fd7062;
font-size: 40px;
margin-bottom: 15px;
}

.service-details-contents .contents .single-service-features h5 {
margin-bottom: 10px;
font-size: 18px;
}

.service-details-contents .contents .single-service-features p {
font-size: 15px;
margin-bottom: 0;
}

.service-details-contents .contents ul {
margin-bottom: 30px;
}

.service-details-contents .contents ul li {
font-size: 16px;
}

.service-details-contents .contents blockquote, .service-details-contents .contents .wp-block-quote {
background-color: #4ab9cf;
color: #FFF;
font-size: 26px;
line-height: 1.4;
font-family: "Poppins", cursive;
font-weight: 400;
padding: 60px;
text-align: center;
margin: 40px 0px;
position: relative;
z-index: 1;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
border-bottom: 5px solid #1270b6;
-webkit-box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
}

.service-details-contents .contents blockquote a, .service-details-contents .contents .wp-block-quote a {
color: #fff;
}

.service-details-contents .contents blockquote a:hover, .service-details-contents .contents .wp-block-quote a:hover {
color: #fd7062;
}

@media (max-width: 767px) {
.service-details-contents .contents blockquote, .service-details-contents .contents .wp-block-quote {
    padding: 30px 15px;
    font-size: 18px;
    line-height: 1.5;
}
}

.service-details-contents .contents blockquote::before, .service-details-contents .contents .wp-block-quote::before {
right: 30px;
font-size: 110px;
line-height: 1;
font-family: "Font Awesome 5 Pro";
position: absolute;
content: "\f10d";
bottom: -20px;
color: #fff;
z-index: -1;
opacity: .1;
font-weight: 900;
}

.service-details-contents .contents .service-contact-form {
margin-top: 30px;
padding: 40px 40px 50px;
background-color: #fff;
-webkit-box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 5px 6px 30px 0px rgba(0, 0, 0, 0.1);
}

@media (max-width: 767px) {
.service-details-contents .contents .service-contact-form {
    padding: 30px 15px;
}
}

.service-details-contents .contents .service-contact-form .contact-form {
padding-top: 0;
}

.service-details-contents .contents .service-contact-form .contact-form input, .service-details-contents .contents .service-contact-form .contact-form textarea {
padding: 20px 25px;
font-size: 16px;
}

.service-details-contents .contents .service-contact-form .contact-form textarea {
height: 150px;
}

.service-sidebar-wrapper .single-sidebar-widgets {
border: 2px solid #ebebeb;
padding-right: 20px;
padding-left: 20px;
margin-bottom: 40px;
}

.service-sidebar-wrapper .single-sidebar-widgets .wid-title {
margin-bottom: 30px;
}

.service-sidebar-wrapper .single-sidebar-widgets .wid-title1 {
margin-bottom: 10px;
}

.service-sidebar-wrapper .single-sidebar-widgets .wid-title h3 {
font-size: 22px;
text-transform: capitalize;
}

.service-sidebar-wrapper .single-sidebar-widgets .services-category-link a {
display: block;
color: #1270b6;
font-weight: 600;
position: relative;
padding-left: 30px;
font-size: 18px;
line-height: 1;
text-transform: capitalize;
margin: 15px 0px;
}

.service-sidebar-wrapper .single-sidebar-widgets .services-category-link a::before {
position: absolute;
left: 0;
content: "\f0da";
font-family: "Font Awesome 5 Pro";
color: #fd7062;
}

.service-sidebar-wrapper .single-sidebar-widgets .services-category-link a:last-of-type {
margin-bottom: 20px;
}

.service-sidebar-wrapper .single-sidebar-widgets .services-category-link a:hover {
color: #fd7062;
padding-left: 35px;
}

.service-sidebar-wrapper .doc-sidebar {
background-color: #ebebeb;
}

.service-sidebar-wrapper .doc-sidebar a {
display: block;
margin-bottom: 15px;
}

.service-sidebar-wrapper .doc-sidebar a i {
margin-right: 10px;
}

.service-sidebar-wrapper .doc-sidebar a:last-child {
margin-bottom: 0;
background-color: #fd7062;
border-color: #fd7062;
}

.service-sidebar-wrapper .help-line-card {
background-color: #1270b6;
padding: 30px;
}

.service-sidebar-wrapper .help-line-card .single-menu-box {
margin-top: 10px;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
position: relative;
}

.service-sidebar-wrapper .help-line-card .single-menu-box .icon {
float: left;
overflow: hidden;
font-size: 40px;
line-height: 1;
color: #FFF;
margin-right: 20px;
}

.service-sidebar-wrapper .help-line-card .single-menu-box .content {
overflow: hidden;
}

.service-sidebar-wrapper .help-line-card .single-menu-box .content p {
font-size: 21px;
margin-bottom: 0;
font-weight: 500;
}

.service-sidebar-wrapper .help-line-card .single-menu-box .content span {
font-size: 17px;
line-height: 1;
}

.single-testimonial-card {
/* background-color: #fff; */
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
padding: 0px 35px 60px;
margin-top: 80px;
}

@media (max-width: 767px) {
.single-testimonial-card {
    padding: 0px 30px 40px;
}
}

/* .single-testimonial-card:hover {
-webkit-box-shadow: 0px 10px 35px 0px rgba(38, 42, 76, 0.1);
        box-shadow: 0px 10px 35px 0px rgba(38, 42, 76, 0.1);
} */

.single-testimonial-card .client-img {
width: 100px;
height: 100px;
border-radius: 50%;
background-color: #f8f8f8;
-webkit-box-shadow: 0px 10px 35px 0px rgba(38, 42, 76, 0.1);
        box-shadow: 0px 10px 35px 0px rgba(38, 42, 76, 0.1);
margin: 0 auto;
display: inline-block;
margin-top: -50px;
position: relative;
z-index: 1;
}

.single-testimonial-card .client-info {
margin-top: 15px;
}

.single-testimonial-card .client-info h4 {
margin-bottom: 5px;
text-transform: capitalize;
}

.single-testimonial-card .feedback {
padding-top: 20px;
position: relative;
margin-top: 20px;
}

.single-testimonial-card .feedback::before {
position: absolute;
content: "\f10e";
left: 50%;
top: 0;
font-family: "Font Awesome 5 Pro";
color: #4ab9cf;
font-size: 20px;
font-weight: 400;
-webkit-transform: translateX(-50%);
        transform: translateX(-50%);
}

.single-testimonial-card .feedback p {
margin: 20px 0px;
}

.single-testimonial-card .feedback .star {
color: #fd7062;
line-height: 1;
}

.single-testimonial-card .feedback .star span {
margin: 0 1px;
}

.testimonial-carousel-active {
margin-top: -30px;
}

.testimonial-carousel-active .single-testimonial-card {
padding: 0px 20px 30px;
background-color: #fff;
}

.testimonial-carousel-active .slide-dots {
margin-bottom: -15px;
}

.slide-dots {
text-align: center;
}

.slide-dots li {
display: inline-block;
margin: 0 3px;
}

.slide-dots li button {
position: relative;
text-indent: -9999px;
border: 1px solid #4ab9cf;
border-radius: 30px;
width: 12px;
height: 12px;
background-color: transparent;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.slide-dots li button:hover {
background-color: #4ab9cf;
}

.slide-dots li.slick-active button {
background-color: #4ab9cf;
border-color: #4ab9cf;
}

.single-price-bar {
border-top: 1px solid #eaeaea;
padding: 35px 15px;
}

@media (max-width: 1199px) {
.single-price-bar {
    text-align: center;
}
.single-price-bar .package-name, .single-price-bar .package-price {
    margin-bottom: 20px;
}
.single-price-bar .package-features {
    margin-bottom: 30px;
}
.single-price-bar .package-features span {
    display: block;
    margin: 2px 0px;
}
.single-price-bar .package-features span::after {
    display: none;
}
}

.single-price-bar.active {
background: #4ab9cf;
border-color: #4ab9cf;
}

.single-price-bar.active h1, .single-price-bar.active h3, .single-price-bar.active h2, .single-price-bar.active h5, .single-price-bar.active h6, .single-price-bar.active a, .single-price-bar.active p, .single-price-bar.active span {
color: #fff !;
}

.single-price-bar.active .theme-btn:hover {
background-color: #fff;
border-color: #fff;
color: #4ab9cf !;
}

.single-price-bar .package-name h3 {
margin-bottom: 0;
text-transform: capitalize;
}

.single-price-bar .package-features span {
position: relative;
padding-right: 10px;
text-transform: capitalize;
}

.single-price-bar .package-features span::after {
position: absolute;
content: ",";
right: 0;
}

.single-price-bar .package-features span:last-of-type::after {
display: none;
}

.single-price-bar .package-price h2 {
margin-bottom: 0;
}

@media (max-width: 767px) {
.single-price-bar .package-price h2 {
    font-size: 20px;
}
}

.single-price-bar .package-price h2 span {
font-size: 56px;
margin-right: 15px;
}

@media (max-width: 1400px) {
.single-price-bar .package-price h2 span {
    font-size: 46px;
    margin-right: 10px;
}
}

@media (max-width: 767px) {
.single-price-bar .package-price h2 span {
    margin-right: 5px;
}
}

.single-price-bar .theme-btn:hover {
background: #fd7062;
border-color: #fd7062;
}

.single-price-bar .theme-btn i {
margin-left: 15px;
}

.single-pricing-plan {
background-color: #f7f7f7;
position: relative;
padding: 60px;
margin-top: 30px;
}

@media (max-width: 1199px) {
.single-pricing-plan {
    padding: 40px 30px;
}
}

.single-pricing-plan.plan-1 .theme-btn, .single-pricing-plan.plan-4 .theme-btn {
background-color: #fd7062;
border-color: #fd7062;
}

.single-pricing-plan.plan-1 .theme-btn:hover, .single-pricing-plan.plan-4 .theme-btn:hover {
background-color: #4ab9cf;
border-color: #4ab9cf;
}

.single-pricing-plan.plan-3 .theme-btn, .single-pricing-plan.plan-6 .theme-btn {
background-color: #1270b6;
border-color: #1270b6;
}

.single-pricing-plan.plan-3 .theme-btn:hover, .single-pricing-plan.plan-6 .theme-btn:hover {
background-color: #4ab9cf;
border-color: #4ab9cf;
}

.single-pricing-plan.active {
background-color: #1270b6;
}

.single-pricing-plan.active .theme-btn {
background-color: #4ab9cf;
border-color: #4ab9cf;
}

.single-pricing-plan.active .theme-btn:hover {
background-color: #fd7062;
border-color: #fd7062;
}

.single-pricing-plan.active .plan-title h2 {
color: #FFF !;
}

.single-pricing-plan.active .plan-value {
color: #fff;
}

.single-pricing-plan.active .plan-value span {
color: #fd7062;
}

.single-pricing-plan.active li {
color: #a5b8c7;
}

.single-pricing-plan .plan-title h2 {
text-transform: capitalize;
margin-top: -5px;
}

@media (max-width: 767px) {
.single-pricing-plan .plan-title h2 {
    font-size: 24px;
}
}

.single-pricing-plan .plan-value {
font-size: 16px;
text-transform: capitalize;
margin-bottom: 25px;
}

.single-pricing-plan .plan-value span {
display: block;
font-size: 80px;
font-family: "Poppins", cursive;
color: #1270b6;
line-height: 1;
font-weight: 400;
letter-spacing: -3px;
margin-bottom: 10px;
}

@media (max-width: 767px) {
.single-pricing-plan .plan-value span {
    font-size: 60px;
}
}

.single-pricing-plan .plan-buy-btn {
position: relative;
z-index: 1;
padding-top: 15px;
font-size: 16px;
}

.single-pricing-plan .plan-buy-btn::before {
position: absolute;
left: -15%;
top: 0;
background-color: #fff;
width: 130%;
height: 70%;
z-index: -1;
content: "";
}

@media (max-width: 767px) {
.single-pricing-plan .plan-buy-btn::before {
    left: -7%;
    width: 114%;
}
}

.single-pricing-plan .plan-buy-btn .theme-btn {
margin-top: 10px;
}

.single-pricing-plan .plan-buy-btn .theme-btn i {
margin-left: 8px;
}

.single-pricing-plan .plan-service-list {
margin-top: 40px;
display: block;
}

.single-pricing-plan .plan-service-list li {
margin-top: 12px;
position: relative;
font-size: 17px;
}

.single-pricing-plan .plan-service-list li.no::before, .single-pricing-plan .plan-service-list li.not::before {
content: "\f00d";
}

.single-pricing-plan .plan-service-list li::before {
position: absolute;
right: 0;
top: 0;
font-family: "Font Awesome 5 Pro";
content: "\f00c";
opacity: .5;
}

.cta-wrapper {
background-position: top;
}

@media (max-width: 767px) {
.cta-wrapper h1 {
    font-size: 32px;
    line-height: 1.3;
}
}

.cta-wrapper.style-2 {
z-index: 1;
position: relative;
}

.cta-wrapper.style-2::before {
top: 0;
left: 0;
z-index: -1;
width: 100%;
height: 100%;
content: '';
position: absolute;
background: rgba(31, 66, 93, 0.5);
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.cta-wrapper i {
margin-left: 6px;
}

@media (min-width: 1400px) {
.video-pop-up-wrapper {
    padding: 200px 0px;
}
}

.featured-video-wrapper {
padding: 150px 0px;
}

@media (max-width: 767px) {
.featured-video-wrapper {
    padding: 100px 0px;
}
}

.skills-video {
height: 430px;
}

.team-member-card {
height: 340px;
background-color: #eee;
position: relative;
background-position: top center;
margin-top: 30px;
}

.team-member-card:hover .profile-info-card {
right: -10px;
opacity: 1;
visibility: visible;
}

.team-member-card .profile-info-card {
background: #fd7062;
padding: 30px;
position: absolute;
right: 20px;
bottom: 30px;
opacity: 0;
visibility: hidden;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

.team-member-card .profile-info-card::before {
width: 0;
height: 0;
border-top: 10px solid #ffbdb7;
border-right: 10px solid transparent;
content: "";
right: 0;
position: absolute;
bottom: -10px;
}

.team-member-card .profile-info-card span {
font-size: 14px;
line-height: 1;
color: #fff;
}

.team-member-card .profile-info-card h5 {
color: #fff;
}

.team-member-card .profile-info-card h5:hover a {
color: #1270b6;
}

.team-member-card .profile-info-card .social-link {
margin-top: 15px;
}

.team-member-card .profile-info-card .social-link a {
line-height: 1;
margin-right: 15px;
font-size: 16px;
color: #fff;
display: inline-block;
}

.team-member-card .profile-info-card .social-link a:hover {
color: #1270b6;
}

.single-team-member {
-webkit-transition: all .35s ease-in-out;
transition: all .35s ease-in-out;
position: relative;
margin-top: 30px;
height: 400px;
width: 100%;
background-color: #f7f7f7;
overflow: hidden;
z-index: 1;
position: relative;
}

.single-team-member::before {
top: 0;
left: 0;
z-index: -1;
width: 100%;
height: 100%;
content: '';
position: absolute;
background: rgba(31, 66, 93, 0.1);
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

@media (max-width: 767px) {
.single-team-member {
    background-position: top center;
}
}

.single-team-member .social-icons {
position: absolute;
right: 30px;
top: 30px;
content: "";
overflow: hidden;
display: inline-block;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

.single-team-member .social-icons:hover .plus-icon {
background-color: #fd7062;
}

.single-team-member .social-icons:hover .plus-icon i {
-webkit-transform: rotate(45deg);
        transform: rotate(45deg);
color: #fff;
}

.single-team-member .social-icons:hover .top {
-webkit-transform: translateX(0);
        transform: translateX(0);
}

.single-team-member .social-icons:hover .right {
-webkit-transform: translateY(0);
        transform: translateY(0);
}

.single-team-member .social-icons .plus-icon {
position: absolute;
right: 0;
top: 0;
z-index: 2;
cursor: pointer;
}

.single-team-member .social-icons .plus-icon i {
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.single-team-member .social-icons .plus-icon, .single-team-member .social-icons a {
width: 50px;
height: 50px;
line-height: 50px;
text-align: center;
font-size: 16px;
display: inline-block;
background: #fff;
color: #4ab9cf;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.single-team-member .social-icons .plus-icon:hover, .single-team-member .social-icons a:hover {
background: #4ab9cf;
color: #fff;
}

.single-team-member .social-icons .top {
-webkit-transform: translateX(100%);
        transform: translateX(100%);
margin-right: 50px;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
height: 50px;
}

.single-team-member .social-icons .top > a {
margin-right: 10px;
}

.single-team-member .social-icons .right {
-webkit-transform: translateY(-100%);
        transform: translateY(-100%);
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
width: 50px;
float: right;
}

.single-team-member .social-icons .right a {
margin-top: 10px;
display: block;
}

.single-team-member .member-details {
position: absolute;
bottom: 30px;
left: 30px;
content: "";
}

.single-team-member .member-details h3 {
color: #4ab9cf;
background: #fff;
padding: 15px 25px;
text-transform: uppercase;
font-size: 20px;
margin-bottom: 0;
}

@media (max-width: 767px) {
.single-team-member .member-details h3 {
    font-size: 18px;
    padding: 15px 25px;
}
}

.single-team-member .member-details span {
padding: 8px 25px;
color: #fff;
font-weight: 500;
line-height: 1;
background: #4ab9cf;
display: inline-block;
}

@media (max-width: 767px) {
.single-team-member .member-details span {
    font-size: 14px;
    padding: 8px 16px;
}
}

.team-member-details-wrapper .container {
background-color: #f7f7f7;
-webkit-box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
        box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
padding: 50px;
}

@media (max-width: 767px) {
.team-member-details-wrapper .container {
    padding: 20px;
}
}

.team-member-details-wrapper .icon-box {
margin-top: 30px;
background-color: #fff;
padding: 85px 30px;
}

@media (max-width: 576px) {
.team-member-details-wrapper .icon-box {
    padding: 50px 20px;
}
}

.team-member-details-wrapper .icon-box .icon {
margin-bottom: 20px;
font-size: 80px;
color: #fd7062;
}

@media (max-width: 576px) {
.team-member-details-wrapper .icon-box .icon {
    font-size: 60px;
}
}

.team-member-details-wrapper .icon-box h2 {
font-size: 28px;
margin-bottom: 0;
}

@media (max-width: 576px) {
.team-member-details-wrapper .icon-box h2 {
    font-size: 24px;
}
}

.contact-form7-wrapper {
margin-top: 30px;
}

.contact-form7-wrapper .contact-form {
padding: 50px 30px;
background-color: #fff;
}

.contact-form7-wrapper .contact-form form textarea {
height: 150px;
text-transform: capitalize;
}

.biography-info {
background-color: #fff;
margin-top: 30px;
padding: 30px;
}

.biography-info p {
margin-bottom: 30px;
}

.biography-info .single-bio-data {
width: 50%;
display: -ms-grid;
display: grid;
-ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
grid-gap: 20px;
text-transform: capitalize;
margin-top: 5px;
}

@media (max-width: 767px) {
.biography-info .single-bio-data {
    width: 80%;
}
}

.biography-info .single-bio-data .key-data {
font-weight: 500;
position: relative;
}

.biography-info .single-bio-data .key-data::after {
position: absolute;
content: ":";
right: 10px;
}

.member-profile-wrapper {
background-color: #fff;
}

.member-profile-wrapper .member-profile-img {
height: 340px;
background-position: top;
}

@media (max-width: 767px) {
.member-profile-wrapper .member-profile-img {
    height: 300px;
}
}

@media (max-width: 585px) {
.member-profile-wrapper .member-profile-img {
    height: 280px;
}
}

.member-profile-wrapper .member-info {
max-width: 500px;
position: relative;
padding-bottom: 15px;
}

@media (max-width: 1100px) {
.member-profile-wrapper .member-info {
    max-width: 400px;
}
}

@media (max-width: 991px) {
.member-profile-wrapper .member-info {
    max-width: 320px;
}
}

@media (max-width: 767px) {
.member-profile-wrapper .member-info {
    max-width: 450px;
    margin: 0;
}
}

@media (max-width: 576px) {
.member-profile-wrapper .member-info {
    display: block;
    max-width: 100%;
}
}

@media (min-width: 1440px) {
.member-profile-wrapper .member-info::before {
    position: absolute;
    content: "";
    right: -8%;
    top: 0;
    height: 100%;
    width: 1px;
    background: #EBEDF2;
}
}

@media (max-width: 767px) {
.member-profile-wrapper .member-info {
    padding: 30px;
}
}

.member-profile-wrapper .member-info h2 {
font-size: 36px;
margin-bottom: 5px;
}

@media (max-width: 991px) {
.member-profile-wrapper .member-info h2 {
    font-size: 30px;
}
}

@media (max-width: 576px) {
.member-profile-wrapper .member-info h2 {
    font-size: 26px;
}
}

.member-profile-wrapper .member-info p {
margin-top: 30px;
}

@media (max-width: 767px) {
.member-profile-wrapper .member-info p {
    margin-top: 20px;
}
}

@media (max-width: 576px) {
.member-profile-wrapper .member-info p {
    margin-top: 10px;
}
}

.member-profile-wrapper .member-info .social-profiles {
margin-top: 20px;
}

.member-profile-wrapper .member-info .social-profiles a {
width: 50px;
height: 50px;
line-height: 50px;
text-align: center;
border: 1px solid #EBEDF2;
margin-right: 10px;
display: inline-block;
margin-top: 10px;
}

.member-profile-wrapper .member-contact-info {
margin-right: 50px;
}

@media (max-width: 767px) {
.member-profile-wrapper .member-contact-info {
    padding: 30px 20px;
    margin: 0;
}
}

@media (max-width: 576px) {
.member-profile-wrapper .member-contact-info {
    display: block;
    width: 100%;
    padding: 0 15px;
    padding-bottom: 50px;
}
}

@media (max-width: 1100px) {
.member-profile-wrapper .member-contact-info {
    margin-right: 20px;
    margin-left: 20px;
}
}

.member-profile-wrapper .member-contact-info .single-contact {
margin-top: 15px;
}

.member-profile-wrapper .member-contact-info h6 {
margin-bottom: 5px;
}

.skill-bars {
background-color: #fff;
margin-top: 30px;
padding: 30px;
padding-bottom: 70px;
}

.single-brand-logo {
height: 130px;
line-height: 130px;
background-color: #fff;
margin-top: 30px;
-webkit-box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.06);
        box-shadow: 0px 16px 32px 0px rgba(51, 51, 51, 0.06);
text-align: center;
}

.single-brand-logo img {
display: inline-block;
}

.single-funfact-item {
padding: 120px 0px;
overflow: hidden;
clear: both;
border-bottom: 1px solid #e5e5e5;
border-right: 1px solid #e5e5e5;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
}

@media (max-width: 1191px) {
.single-funfact-item {
    padding: 100px 0px;
}
}

@media (max-width: 991px) {
.single-funfact-item {
    padding: 80px 0px;
}
}

@media (max-width: 767px) {
.single-funfact-item {
    padding: 60px 0px;
}
}

.single-funfact-item .icon {
float: left;
overflow: hidden;
margin-right: 20px;
}

.single-funfact-item .countdown {
overflow: hidden;
}

.single-funfact-item .countdown h2 {
font-size: 60px;
line-height: 1;
}

@media (max-width: 767px) {
.single-funfact-item .countdown h2 {
    font-size: 42px;
}
}

.single-funfact-item .countdown > span {
display: block;
}

.tab-wrapper ul {
border-bottom: 1px solid #f7f7f7;
}

@media (min-width: 767px) {
.tab-wrapper ul {
    width: 80%;
}
}

.tab-wrapper ul li .nav-link {
position: relative;
color: #1270b6;
padding: 10px 0px;
font-family: "Poppins", cursive;
padding-right: 10px;
margin-right: 10px;
}

.tab-wrapper ul li .nav-link::before {
position: absolute;
left: 0;
bottom: 0;
content: "";
width: 0%;
height: 4px;
background-color: #4ab9cf;
opacity: 0;
visibility: hidden;
}

.tab-wrapper ul li .nav-link.active {
background-color: transparent;
color: #4ab9cf;
}

.tab-wrapper ul li .nav-link.active::before {
opacity: 1;
visibility: visible;
width: 100%;
}

.single-funfact-digit {
display: inline-block;
margin-right: 100px;
margin-top: 20px;
}

@media (max-width: 500px) {
.single-funfact-digit {
    margin-right: 20px;
}
}

.single-funfact-digit:last-of-type h2 {
color: #4ab9cf;
}

.single-funfact-digit h2 {
font-size: 80px;
line-height: 1;
color: #fd7062;
margin-bottom: 0;
position: relative;
display: inline-block;
}

@media (max-width: 500px) {
.single-funfact-digit h2 {
    font-size: 40px;
}
}

.single-funfact-digit h2::before {
position: absolute;
content: "%";
left: 100%;
top: 0;
}

.single-progress-bar {
font-family: "Poppins", cursive;
font-size: 16px;
position: relative;
overflow: hidden;
margin-top: 30px;
}


.project-details-contents {
border-bottom: 1px solid #EBEDF2;
}

.single-project-process {
text-align: center;
margin-top: 40px;
}

.single-project-process .content h5 {
margin-bottom: 10px;
}

.project-item-card {
position: relative;
overflow: hidden;
margin-top: 30px;
}

.project-item-card .project-thumb {
height: 350px;
position: relative;
display: block;
}

@media (max-width: 991px) {
.project-item-card .project-thumb {
    height: 300px;
}
}

@media (max-width: 767px) {
.project-item-card .project-thumb {
    height: 280px;
}
}

@media (max-width: 480px) {
.project-item-card .project-thumb {
    height: 250px;
}
}

.project-item-card .popup-link {
cursor: crosshair;
color: #fff;
}

.project-item-card .contents {
background-color: #fff;
position: absolute;
padding: 30px;
bottom: 0;
left: -50%;
opacity: 0;
visibility: hidden;
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
}

.project-item-card .contents .project-link {
position: absolute;
right: 20px;
top: 0;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
width: 54px;
height: 54px;
line-height: 54px;
text-align: center;
color: #fff;
background-color: #4ab9cf;
}

.project-item-card .contents .project-link:hover {
background-color: #1270b6;
}

.project-item-card .contents span {
color: #4ab9cf;
font-size: 14px;
font-weight: 500;
}

.project-item-card .contents h3 {
margin-bottom: 0;
}

@media (max-width: 767px) {
.project-item-card .contents h3 {
    font-size: 20px;
}
}

.project-item-card:hover .contents {
left: 0;
opacity: 1;
visibility: visible;
}

.project-item-box {
position: relative;
overflow: hidden;
margin-top: 30px;
display: block;
z-index: 1;
}

.project-item-box .project-thumb {
height: 500px;
display: block;
background-position: center;
cursor: crosshair;
}

.project-item-box .project-thumb::before {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 80%;
background-color: #1270b6;
opacity: .6;
content: "";
visibility: hidden;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

@media (max-width: 1191px) {
.project-item-box .project-thumb {
    height: 400px;
}
}

@media (max-width: 991px) {
.project-item-box .project-thumb {
    height: 320px;
}
}

@media (max-width: 767px) {
.project-item-box .project-thumb {
    height: 290px;
}
}

@media (max-width: 480px) {
.project-item-box .project-thumb {
    height: 260px;
}
}

.project-item-box .content-wrap {
position: absolute;
bottom: -40%;
left: 0;
-webkit-transition: all .5s ease-in-out;
transition: all .5s ease-in-out;
z-index: 2;
}

.project-item-box .contents {
width: 100%;
height: 100%;
padding: 30px;
}

.project-item-box .contents span {
color: #4ab9cf;
font-size: 14px;
font-weight: 500;
}

.project-item-box .contents h3 {
margin-bottom: 0;
color: #fff;
}

@media (max-width: 767px) {
.project-item-box .contents h3 {
    font-size: 20px;
}
}

.project-item-box .contents p {
color: #fff;
}

.project-item-box:hover .project-thumb::before {
visibility: visible;
height: 100%;
}

.project-item-box:hover .content-wrap {
bottom: 0;
opacity: 1;
visibility: visible;
}

.project-item-box:hover .project-link {
opacity: 1;
visibility: visible;
top: 20px;
}

.project-item-box .project-link {
position: absolute;
right: 20px;
top: -60px;
width: 54px;
height: 54px;
line-height: 54px;
text-align: center;
color: #fff;
background-color: #4ab9cf;
opacity: 0;
visibility: hidden;
-webkit-transition: all .6s ease-in-out;
transition: all .6s ease-in-out;
}

.project-item-box .project-link:hover {
background-color: #1270b6;
}

.portfolio-cat-filter button {
border: none;
background-color: #fff;
display: inline-block;
padding: 18px 38px;
line-height: 1;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
margin: 0px 5px;
font-weight: 700;
-webkit-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.06);
        box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.06);
font-family: "Poppins", cursive;
text-transform: uppercase;
font-size: 14px;
}

@media (max-width: 767px) {
.portfolio-cat-filter button {
    padding: 15px 25px;
    margin-bottom: 10px;
}
}

.portfolio-cat-filter button.active, .portfolio-cat-filter button:hover {
color: #fff;
background-color: #1270b6;
}

.elementor-accordion .elementor-tab-title {
padding: 22px 20px ;
font-weight: 500 ;
}

.elementor-accordion .elementor-tab-title .elementor-accordion-icon {
margin-top: 4px;
color: #1270b6 ;
}

.elementor-accordion .elementor-accordion-item {
border: 0px ;
margin-top: 15px;
background: #f8f8f8;
}

.elementor-accordion .elementor-tab-content {
padding: 10px 25px 30px ;
border-top: 0px ;
}

.elementor-tab-title a {
color: #1270b6 ;
}

.faq-content .accordion-item {
border: 0;
margin-top: 20px;
}

.faq-content .accordion-item .accordion-header .accordion-button {
font-weight: 700;
color: #1270b6;
letter-spacing: -.2px;
border: 0;
border-radius: 0;
-webkit-box-shadow: none;
        box-shadow: none;
background-color: transparent;
padding: 16px 20px;
}

.faq-content .accordion-item .accordion-header .accordion-button::after {
content: "\f067";
background: transparent;
font-family: "Font Awesome 5 Pro";
font-weight: 300;
-webkit-transition: all 0.3s ease-in-out !;
transition: all 0.3s ease-in-out ;
}

.faq-content .accordion-item .accordion-header .accordion-button:not(.collapsed)::after {
content: "\f068";
background: transparent;
font-family: "Font Awesome 5 Pro";
font-weight: 300;
}

.faq-content .accordion-item .accordion-collapse .accordion-body {
padding-right: 30px;
padding-top: 5px;
}

.faq-accordion-2 .accordion {
list-style-type: none;
counter-reset: css-counter 0;
}

@media (max-width: 500px) {
.faq-accordion-2 .accordion {
    padding: 30px 15px;
}
}

.faq-accordion-2 .accordion .accordion-item {
border: 0;
border-radius: 0;
counter-increment: css-counter 1;
position: relative;
z-index: 1;
padding-top: 20px;
background: transparent;
}

.faq-accordion-2 .accordion .accordion-item:first-of-type {
padding-top: 0;
}

.faq-accordion-2 .accordion .accordion-item::before {
position: absolute;
left: 25px;
top: 0;
content: "";
border: 1px dashed #4ab9cf;
width: 1px;
height: 100%;
z-index: -1;
-webkit-transform: translateX(-50%);
        transform: translateX(-50%);
opacity: .5;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header {
font-size: inherit;
line-height: inherit;
position: relative;
z-index: 1;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header:focus {
outline: 0;
border: 0;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button {
padding-left: 70px;
font-size: 20px;
font-weight: 600;
color: #1270b6;
overflow: hidden;
background-color: transparent;
padding-top: 10px;
}

@media (max-width: 500px) {
.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button {
    padding: 0px;
    padding-left: 60px;
}
}

.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button:focus {
outline: 0;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button:not(.collapsed) {
color: #1270b6;
background-color: transparent;
-webkit-box-shadow: none;
        box-shadow: none;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button::after {
display: none;
}

.faq-accordion-2 .accordion .accordion-item .accordion-header .accordion-button::before {
content: counter(css-counter);
position: absolute;
width: 50px;
height: 50px;
background: #fff;
border: 1px solid #ebedf2;
border-radius: 50px;
color: #4ab9cf;
font-weight: 700;
font-size: 18px;
line-height: 50px;
text-align: center;
left: 0;
}

.faq-accordion-2 .accordion .accordion-item .accordion-collapse .accordion-body {
padding-left: 70px;
}

@media (max-width: 500px) {
.faq-accordion-2 .accordion .accordion-item .accordion-collapse .accordion-body {
    padding-left: 60px;
}
}

.investors-inquire-card {
background: #fd7062;
padding: 40px;
}

.investors-inquire-card .investors-title {
border-bottom: 3px solid #FFF;
}

.investors-inquire-card .investors-title h2 {
font-size: 26px;
text-transform: capitalize;
position: relative;
}

.investors-inquire-card .investor-img {
width: 200px;
height: 200px;
border-radius: 50%;
line-height: 200px;
margin: 0px auto;
background-color: #fff;
margin-top: 30px;
margin-bottom: 10px;
}

.investors-inquire-card .investors-data h4 {
margin-bottom: 5px;
}

.investors-inquire-card .investors-data h6 {
font-weight: 500;
margin-bottom: 5px;
}

.investors-inquire-card .investors-data .investors-contact {
margin-top: 5px;
}

.investors-inquire-card .investors-data .investors-contact p i {
margin-right: 5px;
}

.investors-inquire-card .social-profile a {
display: inline-block;
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
border: 2px solid #fff;
border-radius: 30px;
margin: 0px 3px;
font-size: 14px;
margin-top: 5px;
}

.investors-inquire-card .social-profile a:hover {
background-color: #fff;
color: #fd7062;
}

.faq-wrapper {
position: relative;
z-index: 1;
}

.faq-wrapper .faq-banner-half {
position: absolute;
right: 0;
top: 0;
width: 48%;
height: 100%;
z-index: -1;
content: "";
}

.single-news-card {
position: relative;
z-index: 1;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
padding: 45px 50px 50px;
margin-top: 30px;
}

.single-news-card:hover::before, .single-news-card.active::before {
background: #1270b6;
opacity: .8;
}

.single-news-card:hover h6, .single-news-card:hover h5, .single-news-card:hover span, .single-news-card:hover a, .single-news-card:hover p, .single-news-card.active h6, .single-news-card.active h5, .single-news-card.active span, .single-news-card.active a, .single-news-card.active p {
color: #fff ;
}

.single-news-card::before {
position: absolute;
width: 100%;
height: 100%;
background: #fff;
content: "";
left: 0;
top: 0;
z-index: -1;
-webkit-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}

.single-news-card .contents .post-cat-date {
margin-bottom: 10px;
}

.single-news-card .contents .post-cat-date .post-cat {
margin-right: 10px;
}

.single-news-card .contents .post-cat-date .post-cat a {
display: inline-block;
position: relative;
color: #1270b6;
font-weight: 700;
font-size: 14px;
padding-right: 5px;
margin-top: -2px;
text-transform: capitalize;
}

.single-news-card .contents .post-cat-date .post-cat a::before {
position: absolute;
right: 0;
content: ",";
}

.single-news-card .contents .post-cat-date .post-cat a:last-of-type::before {
display: none;
}

.single-news-card .contents .post-cat-date .post-cat a:hover {
color: #fd7062;
}

.single-news-card .contents .post-cat-date .post-date {
font-size: 14px;
color: #fd7062;
font-weight: 700;
position: relative;
padding-left: 15px;
display: inline-block;
text-transform: capitalize;
}

.single-news-card .contents .post-cat-date .post-date::before {
position: absolute;
left: 0;
content: "/";
color: #d4d4d4;
}

.single-news-card .contents h5:hover a {
color: #fd7062;
}

.single-news-card .contents .post-author {
overflow: hidden;
clear: both;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
margin-top: 45px;
}

.single-news-card .contents .post-author .author-img {
border-radius: 50%;
width: 60px;
height: 60px;
float: left;
overflow: hidden;
background-color: #eee;
margin-right: 20px;
}

.single-news-card .contents .post-author .author-info {
overflow: hidden;
}

.single-news-card .contents .post-author .author-info h6 {
margin-bottom: 0;
line-height: 1;
}

.single-news-card .contents .post-author .author-info span {
font-size: 14px;
line-height: 1;
}

.single-blog-item {
background-color: #fff;
border: 1px solid #eaeaea;
position: relative;
margin-top: 30px;
}

.single-blog-item .post-featured-thumb {
height: 220px;
position: relative;
z-index: 1;
position: relative;
}

.single-blog-item .post-featured-thumb::before {
top: 0;
left: 0;
z-index: -1;
width: 100%;
height: 100%;
content: '';
position: absolute;
background: rgba(31, 66, 93, 0.1);
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.single-blog-item .post-featured-thumb .post-cat {
position: absolute;
left: 40px;
bottom: 0;
}

.single-blog-item .post-featured-thumb .post-cat a {
display: inline-block;
padding: 10px 20px;
text-transform: capitalize;
color: #fff;
background-color: #fd7062;
font-size: 14px;
line-height: 1;
font-weight: 700;
font-family: "Poppins", cursive;
}

.single-blog-item .post-featured-thumb .post-cat a:hover {
background-color: #4ab9cf;
}

.single-blog-item .content {
padding: 40px;
padding-top: 35px;
}

.single-blog-item .content h3:hover a {
color: #4ab9cf;
}

.single-blog-item .content p {
font-size: 16px;
line-height: 26px;
}

.single-blog-item .content .post-meta {
margin-top: 25px;
font-size: 16px;
text-transform: capitalize;
line-height: 1;
}

.single-blog-item .content .post-meta i {
margin-right: 6px;
color: #1270b6;
}

.single-blog-item .content .post-meta .post-date {
margin-right: 20px;
}

.single-blog-item .content .post-meta .post-author a {
font-size: 16px;
text-transform: capitalize;
font-weight: 600;
line-height: 1;
}

.single-blog-item .content .post-meta .post-author a:hover {
color: #4ab9cf;
}

.single-news-box {
position: relative;
margin-top: 50px;
}

.single-news-box .featured-thumb {
height: 240px;
background-color: #eee;
position: relative;
}

.single-news-box .featured-thumb .post-cat {
position: absolute;
right: 30px;
bottom: 0;
}

.single-news-box .featured-thumb .post-cat a {
display: inline-block;
padding: 10px 20px;
text-transform: capitalize;
color: #fff;
background-color: #fd7062;
font-size: 14px;
line-height: 1;
font-weight: 700;
font-family: "Poppins", cursive;
}

.single-news-box .featured-thumb .post-cat a:hover {
background-color: #4ab9cf;
}

.single-news-box .content {
padding: 25px 30px;
background-color: #f7f7f7;
}

.single-news-box .content i {
margin-right: 5px;
}

.single-news-box .content .meta {
font-size: 14px;
}

.single-news-box .content .meta .author a {
color: #666;
font-weight: 500;
font-size: 14px;
}

.single-news-box .content h3 {
font-size: 22px;
line-height: 140%;
color: #1270b6;
margin-top: 10px;
}

.single-news-box .content h3 a:hover {
color: #fd7062;
}

.single-news-box .content .read-btn {
margin-top: 20px;
display: block;
font-weight: 600;
color: #fd7062;
text-transform: capitalize;
}

.single-news-box .content .read-btn:hover {
color: #fd7062;
}

.border-wrap {
border: 2px solid #ededed;
}

.blog-wrapper h1, .blog-wrapper h2, .blog-wrapper h3, .blog-wrapper h4, .blog-wrapper h5, .blog-wrapper h6 {
font-weight: 600;
}

.blog-wrapper .border-wrap {
padding: 50px;
}

@media (max-width: 767px) {
.blog-wrapper .border-wrap {
    padding: 50px 15px;
}
}

.blog-wrapper .border-wrap .single-blog-post .post-content {
padding: 0px;
}

.blog-wrapper .single-blog-post {
margin-bottom: 40px;
position: relative;
}

.blog-wrapper .single-blog-post.post-details.format-quote .post-content {
position: relative;
background: transparent;
border: none;
}

.blog-wrapper .single-blog-post.post-details .post-content {
border: none;
}

.blog-wrapper .single-blog-post.post-details .post-content img {
margin-top: 20px;
margin-bottom: 20px;
}

.blog-wrapper .single-blog-post.post-details .post-content h1 {
font-size: 36px;
line-height: 1.4;
}

.blog-wrapper .single-blog-post.post-details .post-content h1, .blog-wrapper .single-blog-post.post-details .post-content h2, .blog-wrapper .single-blog-post.post-details .post-content h3, .blog-wrapper .single-blog-post.post-details .post-content h4, .blog-wrapper .single-blog-post.post-details .post-content h5, .blog-wrapper .single-blog-post.post-details .post-content h6 {
margin-top: 10px;
}

.blog-wrapper .single-blog-post.post-details .post-content table {
margin-top: 20px;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post.post-details .post-content h1 {
    font-size: 28px;
}
.blog-wrapper .single-blog-post.post-details .post-content h3 {
    font-size: 20px;
}
}

.blog-wrapper .single-blog-post.post-details blockquote, .blog-wrapper .single-blog-post.post-details .wp-block-quote {
background-color: #1270b6;
color: #fff;
font-size: 26px;
line-height: 1.4;
font-family: "Poppins", cursive;
font-weight: 400;
padding: 60px;
text-align: center;
margin: 40px 0px;
position: relative;
z-index: 1;
}

.blog-wrapper .single-blog-post.post-details blockquote a, .blog-wrapper .single-blog-post.post-details .wp-block-quote a {
color: #fff;
}

.blog-wrapper .single-blog-post.post-details blockquote a:hover, .blog-wrapper .single-blog-post.post-details .wp-block-quote a:hover {
color: #4ab9cf;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post.post-details blockquote, .blog-wrapper .single-blog-post.post-details .wp-block-quote {
    padding: 30px 15px;
    font-size: 18px;
    line-height: 1.5;
}
}

.blog-wrapper .single-blog-post.post-details blockquote::before, .blog-wrapper .single-blog-post.post-details .wp-block-quote::before {
right: 30px;
font-size: 110px;
line-height: 1;
font-family: "Font Awesome 5 Pro";
position: absolute;
content: "\f10d";
bottom: -20px;
color: #fff;
z-index: -1;
opacity: .1;
font-weight: 900;
}

.blog-wrapper .single-blog-post.format-video .post-featured-thumb, .blog-wrapper .single-blog-post.category-video-post .post-featured-thumb {
z-index: 1;
}

.blog-wrapper .single-blog-post.format-video .post-featured-thumb::before, .blog-wrapper .single-blog-post.category-video-post .post-featured-thumb::before {
position: absolute;
width: 100%;
height: 100%;
left: 0;
top: 0;
content: "";
background-color: #282835;
opacity: .3;
z-index: -1;
}

.blog-wrapper .single-blog-post.quote-post .post-content, .blog-wrapper .single-blog-post.format-quote .post-content {
position: relative;
background-color: #1270b6;
background-image: url("../img/quotepost.png");
border: none;
}

.blog-wrapper .single-blog-post.quote-post .quote-content, .blog-wrapper .single-blog-post.format-quote .quote-content {
overflow: hidden;
}

@media (max-width: 585px) {
.blog-wrapper .single-blog-post.quote-post .quote-content, .blog-wrapper .single-blog-post.format-quote .quote-content {
    text-align: center;
    font-size: 24px;
}
}

.blog-wrapper .single-blog-post.quote-post .quote-content .icon, .blog-wrapper .single-blog-post.format-quote .quote-content .icon {
font-size: 70px;
line-height: 80px;
float: left;
overflow: hidden;
margin-right: 30px;
}

@media (max-width: 585px) {
.blog-wrapper .single-blog-post.quote-post .quote-content .icon, .blog-wrapper .single-blog-post.format-quote .quote-content .icon {
    float: none;
    margin-bottom: 10px;
    margin-right: 0;
    font-size: 50px;
    line-height: 60px;
}
}

.blog-wrapper .single-blog-post.quote-post .quote-content .quote-text, .blog-wrapper .single-blog-post.format-quote .quote-content .quote-text {
overflow: hidden;
}

.blog-wrapper .single-blog-post.quote-post .quote-content h2, .blog-wrapper .single-blog-post.format-quote .quote-content h2 {
margin-top: -2px;
}

.blog-wrapper .single-blog-post:last-child {
margin-bottom: 0;
}

.blog-wrapper .single-blog-post .post-featured-thumb {
height: 400px;
width: 100%;
position: relative;
margin-bottom: -2px;
}

@media (max-width: 991px) {
.blog-wrapper .single-blog-post .post-featured-thumb {
    height: 280px;
}
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-featured-thumb {
    height: 230px;
}
}

.blog-wrapper .single-blog-post .post-featured-thumb .video-play-btn {
position: absolute;
left: 50%;
top: 50%;
-webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
z-index: 2;
}

.blog-wrapper .single-blog-post .post-featured-thumb .video-play-btn .play-video {
border-radius: 50%;
width: 80px;
height: 80px;
line-height: 80px;
font-size: 18px;
}

.blog-wrapper .single-blog-post .post-content {
padding: 50px;
border: 2px solid #ededed;
overflow: hidden;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
}

.blog-wrapper .single-blog-post .post-content h2 {
line-height: 1.4;
font-weight: 600;
}

.blog-wrapper .single-blog-post .post-content p {
font-size: 16px;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content {
    padding: 50px 10px;
}
}

@media (max-width: 414px) {
.blog-wrapper .single-blog-post .post-content h2 {
    font-size: 22px;
}
}

.blog-wrapper .single-blog-post .post-content .post-cat a {
color: #fff;
display: inline-block;
background-color: #4ab9cf;
padding: 14px 18px 12px;
line-height: 1;
font-size: 14px;
font-weight: 700;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
margin-bottom: 20px;
text-transform: capitalize;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .post-cat a {
    font-size: 12px;
}
}

.blog-wrapper .single-blog-post .post-content .post-cat a:hover {
background-color: #1270b6;
}

.blog-wrapper .single-blog-post .post-content ul {
margin-bottom: 0;
list-style-type: disc;
}

.blog-wrapper .single-blog-post .post-content ul ol {
margin-bottom: 0;
}

.blog-wrapper .single-blog-post .post-content ul ul {
margin-bottom: 0;
}

.blog-wrapper .single-blog-post .post-content ul li {
line-height: 1.5;
margin-top: 10px;
list-style-type: disc;
}

.blog-wrapper .single-blog-post .post-content ol {
margin-bottom: 0;
list-style-type: decimal;
}

.blog-wrapper .single-blog-post .post-content ol ul {
margin-bottom: 0;
}

.blog-wrapper .single-blog-post .post-content ol ol {
margin-bottom: 0;
}

.blog-wrapper .single-blog-post .post-content ol li {
line-height: 1.5;
margin-top: 10px;
list-style-type: decimal;
}

.blog-wrapper .single-blog-post .post-content p {
margin-top: 15px;
}

.blog-wrapper .single-blog-post .post-content .post-meta {
margin-top: 10px;
}

.blog-wrapper .single-blog-post .post-content .post-meta span {
color: #202426;
font-weight: 700;
font-size: 14px;
line-height: 1;
display: inline-block;
margin-right: 25px;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .post-meta span {
    font-size: 13px;
}
}

.blog-wrapper .single-blog-post .post-content .post-meta span i {
margin-right: 5px;
}

.blog-wrapper .single-blog-post .post-content .author-info {
overflow: hidden;
}

.blog-wrapper .single-blog-post .post-content .author-info .author-img {
height: 40px;
width: 40px;
line-height: 40px;
border-radius: 50%;
background-color: #f2f2f2;
margin-right: 15px;
float: left;
overflow: hidden;
background-position: center;
background-size: cover;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .author-info .author-img {
    margin-right: 5px;
}
}

.blog-wrapper .single-blog-post .post-content .author-info h5 {
display: inline-block;
line-height: 1;
font-size: 16px;
margin-top: 9px;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .author-info h5 {
    font-size: 14px;
}
}

.blog-wrapper .single-blog-post .post-content .post-link a {
font-weight: 700;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .post-link a {
    font-size: 14px;
}
}

.blog-wrapper .single-blog-post .post-content .post-link a i {
margin-right: 5px;
}

@media (max-width: 767px) {
.blog-wrapper .single-blog-post .post-content .post-link a i {
    margin-right: 3px;
}
}

@media (min-width: 991px) {
.main-sidebar {
    margin-left: 20px;
}
}

@media (max-width: 991px) {
.main-sidebar {
    margin-top: 40px;
}
}

.main-sidebar .single-sidebar-widget {
border: 2px solid #ededed;
-webkit-box-sizing: border-box;
        box-sizing: border-box;
padding: 30px;
margin-bottom: 40px;
}

.main-sidebar .single-sidebar-widget ul {
padding-left: 0;
}

.main-sidebar .single-sidebar-widget ul > li {
margin-bottom: 10px;
}

.main-sidebar .single-sidebar-widget ul > li a {
font-size: 18px;
text-transform: capitalize;
}

.main-sidebar .single-sidebar-widget ul > li a:hover {
color: #fd7062;
}

.main-sidebar .single-sidebar-widget ul ul {
padding-left: 20px;
}

.main-sidebar .single-sidebar-widget ul ul li {
margin-top: 5px;
}

.main-sidebar .single-sidebar-widget:last-child {
margin-bottom: 0;
}

.main-sidebar .single-sidebar-widget .wid-title {
margin-bottom: 25px;
position: relative;
padding-left: 45px;
}

.main-sidebar .single-sidebar-widget .wid-title h3 {
font-weight: 600;
font-size: 22px;
}

.main-sidebar .single-sidebar-widget .wid-title::before {
left: 0;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
content: "";
height: 4px;
width: 18px;
border-radius: 5px;
position: absolute;
background-color: #4ab9cf;
}

.main-sidebar .single-sidebar-widget .wid-title::after {
left: 22px;
top: 50%;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
content: "";
height: 4px;
width: 4px;
border-radius: 50%;
position: absolute;
background-color: #4ab9cf;
}

.main-sidebar .single-sidebar-widget .social-link a {
display: inline-block;
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
border-radius: 50%;
background-color: #f2f2f2;
font-size: 14px;
margin-right: 5px;
margin-bottom: 5px;
}

.main-sidebar .single-sidebar-widget .social-link a:hover {
background-color: #1270b6;
color: #fff;
}

.search_widget form {
width: 100%;
position: relative;
}

.search_widget form input {
background-color: #f8f8f8;
font-size: 15px;
padding: 20px;
width: 100%;
}

.search_widget form button {
position: absolute;
right: 0;
top: 0;
width: 70px;
font-size: 18px;
height: 100%;
background-color: #4ab9cf;
color: #fff;
text-align: center;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

.search_widget form button:hover {
background-color: #1270b6;
}

.popular-posts .single-post-item, .popular_posts .single-post-item {
overflow: hidden;
padding-bottom: 20px;
margin-bottom: 20px;
border-bottom: 1px solid #f2f2f2;
}

.popular-posts .single-post-item:last-child, .popular_posts .single-post-item:last-child {
margin-bottom: 0;
border: none;
padding-bottom: 0;
}

.popular-posts .single-post-item .thumb, .popular_posts .single-post-item .thumb {
width: 80px;
height: 80px;
border-radius: 50%;
background-color: #f2f2f2;
float: left;
overflow: hidden;
margin-right: 20px;
}

.popular-posts .single-post-item .post-content, .popular_posts .single-post-item .post-content {
overflow: hidden;
}

.popular-posts .single-post-item .post-content h5, .popular_posts .single-post-item .post-content h5 {
font-size: 16px;
line-height: 22px;
font-weight: 600;
margin-bottom: 0;
text-transform: capitalize;
}

.popular-posts .single-post-item .post-content h5:hover, .popular_posts .single-post-item .post-content h5:hover {
color: #4ab9cf;
}

.popular-posts .single-post-item .post-content .post-date, .popular_posts .single-post-item .post-content .post-date {
margin-top: 5px;
color: #1270b6;
font-weight: 700;
font-size: 14px;
}

.popular-posts .single-post-item .post-content .post-date i, .popular_posts .single-post-item .post-content .post-date i {
margin-right: 7px;
}

.widget_categories ul li {
display: block;
}

.widget_categories ul li:last-child a {
margin-bottom: 0;
}

.widget_categories ul li a {
position: relative;
background: #f8f8f8;
padding: 17px 30px;
line-height: 1;
font-size: 14px;
display: block;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
margin-bottom: 12px;
font-weight: 500;
}

.widget_categories ul li a:hover {
color: #fd7062;
}

.widget_categories ul li a span {
position: absolute;
width: 60px;
line-height: 55px;
height: 100%;
content: "";
background-color: #4ab9cf;
right: 0;
top: 0;
text-align: center;
color: #fff;
}

.tagcloud a {
display: inline-block;
padding: 11px 26px;
line-height: 1;
font-size: 14px;
font-weight: 700;
background: #f8f8f8;
margin-right: 5px;
text-transform: capitalize;
margin-bottom: 8px;
}

.tagcloud a:last-child {
margin-right: 0;
}

.tagcloud a:hover {
background-color: #4ab9cf;
color: #fff;
}

.widget_categories ul li {
display: block;
margin-bottom: 10px;
}

p.sticky-label {
position: absolute;
right: 0;
background: #1270b6;
color: #fff;
padding: 10px 40px;
z-index: -1;
top: 0;
font-weight: 700;
}

.page-nav-wrap ul li {
display: inline-block;
}

.page-nav-wrap ul li .page-numbers {
display: inline-block;
width: 60px;
height: 60px;
line-height: 60px;
border-radius: 50%;
background: #f6f6f6;
font-weight: 700;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
margin: 0 2px;
}

.page-nav-wrap ul li .page-numbers.current {
background-color: #1270b6;
color: #Fff;
}

@media (max-width: 767px) {
.page-nav-wrap ul li .page-numbers {
    margin-top: 10px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 14px;
}
}

.page-nav-wrap ul li .page-numbers i {
margin-top: 2px;
}

.page-nav-wrap ul li .page-numbers:hover {
background-color: #1270b6;
color: #fff;
}

.social-share a {
margin-left: 10px;
}

.tag-share-wrap {
padding-bottom: 50px;
}

.tag-share-wrap h4 {
margin-bottom: 25px;
}

@media (max-width: 767px) {
.tag-share-wrap h4 {
    margin-bottom: 10px;
    font-size: 18px;
}
}

@media (max-width: 767px) {
.tag-share-wrap .tagcloud {
    margin-bottom: 20px;
}
}

.comments-section-wrap {
overflow: hidden;
}

.comments-heading h3, .related-post-wrap h3, .comment-form-wrap h3 {
font-size: 26px;
}

@media (max-width: 767px) {
.comments-heading h3, .related-post-wrap h3, .comment-form-wrap h3 {
    font-size: 20px;
}
}

.comments-item-list .single-comment-item {
margin-top: 30px;
}

.comments-item-list .single-comment-item ul {
margin-bottom: 15px;
}

.comments-item-list .single-comment-item p, .comments-item-list .single-comment-item span {
font-size: 16px;
}

.comments-item-list .single-comment-item .author-img {
width: 100px;
height: 100px;
border-radius: 50%;
float: left;
overflow: hidden;
margin-right: 30px;
}

@media (max-width: 991px) {
.comments-item-list .single-comment-item .author-img {
    width: 80px;
    height: 80px;
    margin-right: 20px;
}
}

@media (max-width: 767px) {
.comments-item-list .single-comment-item .author-img {
    width: 70px;
    height: 70px;
    margin-right: 15px;
}
}

@media (max-width: 585px) {
.comments-item-list .single-comment-item .author-img {
    float: none;
    margin-bottom: 20px;
}
}

.comments-item-list .single-comment-item .author-info-comment {
overflow: auto;
padding-bottom: 25px;
border-bottom: 1px solid #e2e2e2;
}

.comments-item-list .single-comment-item .author-info-comment .info {
position: relative;
}

.comments-item-list .single-comment-item .author-info-comment .info h5 {
margin-bottom: 5px;
}

@media (max-width: 767px) {
.comments-item-list .single-comment-item .author-info-comment .info h5 {
    font-size: 16px;
}
}

.comments-item-list .single-comment-item .author-info-comment span {
color: #4ab9cf;
}

.comments-item-list .single-comment-item .author-info-comment .theme-btn {
padding: 7px 18px;
font-size: 14px;
position: absolute;
top: 50%;
right: 0;
-webkit-transform: translateY(-50%);
        transform: translateY(-50%);
}

@media (max-width: 767px) {
.comments-item-list .single-comment-item .author-info-comment .theme-btn {
    font-size: 12px;
}
}

.comments-item-list .single-comment-item .author-info-comment .theme-btn i {
margin-right: 5px;
}

.comments-item-list .single-comment-item .author-info-comment .theme-btn:hover a {
color: #fff;
}

.comments-item-list .single-comment-item .author-info-comment .comment-text {
margin-top: 15px;
}

.comment-form {
background-color: #f0f0f0;
padding: 50px;
width: 100%;
margin-top: 30px;
}

@media (max-width: 767px) {
.comment-form {
    padding: 30px;
}
}

@media (max-width: 585px) {
.comment-form {
    padding: 30px 15px;
}
}

.comment-form label {
margin-bottom: 4px;
}

.comment-form input, .comment-form textarea {
margin-bottom: 20px;
padding: 20px 30px;
line-height: 1;
font-size: 16px;
width: 100%;
}

@media (max-width: 585px) {
.comment-form input, .comment-form textarea {
    padding: 15px;
}
}

.comment-form textarea {
height: 200px;
line-height: 1.3;
}

@media (max-width: 767px) {
.comment-form textarea {
    height: 120px;
}
}

.comment-form .submit-btn {
display: inline-block;
background-color: #4ab9cf;
color: #fff;
line-height: 1;
text-transform: capitalize;
padding: 20px 60px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
margin-bottom: 0;
margin-top: 20px;
}

@media (max-width: 767px) {
.comment-form .submit-btn {
    padding: 20px 40px;
}
}

@media (max-width: 585px) {
.comment-form .submit-btn {
    padding: 15px 40px;
    font-size: 14px;
}
}

.comment-form .submit-btn:hover {
background-color: #1270b6;
}

.comment-form .submit-btn i {
margin-right: 10px;
}

.comment ul {
list-style-type: disc;
}

.comment ul ol {
margin-bottom: 0;
}

.comment ul li {
line-height: 1.5;
margin-top: 10px;
list-style-type: disc;
}

.comment ol ul {
margin-bottom: 0;
}

.comment ol ol {
margin-bottom: 0;
}

.comment ol li {
line-height: 1.5;
margin-top: 10px;
}

.site_info_widget .single-contact-info {
overflow: auto;
margin-bottom: 20px;
}

.site_info_widget .single-contact-info span {
display: block;
color: #1270b6;
}

.site_info_widget .single-contact-info .icon {
width: 40px;
height: 40px;
line-height: 40px;
color: #fff;
background-color: #fd7062;
float: left;
text-align: center;
overflow: hidden;
font-size: 16px;
margin-right: 20px;
}

.site_info_widget .single-contact-info:nth-child(2n) .icon {
background-color: #1270b6;
}

.site_info_widget .single-contact-info:nth-child(3n) .icon {
background-color: #4ab9cf;
}

.site_info_widget .social-link {
margin-top: 35px;
}

.site_info_widget .social-link a {
margin-right: 8px ;
}

/* ----------------------------------
    Contact Us Section Styles
------------------------------------ */
.request-a-quote-section {
position: relative;
}

.request-a-quote-section::before {
position: absolute;
left: 0;
height: 100%;
width: 100%;
content: "";
z-index: -1;
top: 0;
background: #1270b6;
opacity: 0.65;
}

.request-quote-form-wrapper {
padding: 40px 50px;
background-color: #fff;
-webkit-box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
        box-shadow: 0px 15px 40px 0px rgba(109, 109, 109, 0.06);
}

@media (max-width: 767px) {
.request-quote-form-wrapper {
    padding: 40px 30px;
}
}

.request-quote-form-wrapper h4,
.request-quote-form-wrapper h3 {
margin-bottom: 25px;
text-transform: capitalize;
}

.request-quote-form-wrapper .request-quote-form input,
.request-quote-form-wrapper .request-quote-form select {
width: 100%;
height: 50px;
font-size: 15px;
border: 1px solid #e2e2e2;
margin-bottom: 20px;
padding: 0 20px;
border-radius: 0;
}

.request-quote-form-wrapper .request-quote-form label {
font-size: 15px;
text-transform: capitalize;
}

.request-quote-form-wrapper .request-quote-form input[type='checkbox'],
.request-quote-form-wrapper .request-quote-form input[type='radio'] {
width: 20px;
height: 20px;
display: inline-block;
margin-right: 8px;
margin-bottom: 0;
border-color: #1270b6;
}

@media (max-width: 767px) {
.request-quote-form-wrapper .request-quote-form input[type='checkbox'],
.request-quote-form-wrapper .request-quote-form input[type='radio'] {
    width: 15px;
    height: 15px;
}
}

.request-quote-form-wrapper .request-quote-form input[type='submit'],
.request-quote-form-wrapper .request-quote-form .submit-btn {
border: 0px;
margin-top: 30px;
margin-bottom: 10px;
height: 60px;
font-size: 16px;
background-color: #1270b6;
}

@media (max-width: 767px) {
.request-quote-form-wrapper .request-quote-form input[type='submit'],
.request-quote-form-wrapper .request-quote-form .submit-btn {
    height: 50px;
    font-size: 14px;
}
}

.request-quote-form-wrapper .request-quote-form input[type='submit']:hover,
.request-quote-form-wrapper .request-quote-form .submit-btn:hover {
background: #4ab9cf;
}

.our-branch-wrapper {
position: relative;
z-index: 1;
}

.our-branch-wrapper .office-google-map-wrapper {
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 40%;
z-index: -1;
}

.our-branch-wrapper .office-google-map-wrapper iframe {
width: 100%;
height: 100%;
}

.single-branch-card {
padding: 40px;
padding-top: 0;
background: #fff;
-webkit-box-shadow: 0px 0px 50px 0px #0000001a;
        box-shadow: 0px 0px 50px 0px #0000001a;
position: relative;
margin-top: 90px;
}

.single-branch-card .country-flag {
width: 120px;
height: 120px;
line-height: 120px;
border-radius: 50%;
-webkit-box-shadow: 0px 0px 10px 0px #0000001a;
        box-shadow: 0px 0px 10px 0px #0000001a;
display: inline-block;
margin-bottom: 20px;
margin-top: -60px;
}

.single-branch-card .content h4 {
position: relative;
z-index: 1;
display: inline-block;
padding-right: 5px;
margin-bottom: 20px;
font-size: 25px;
}

.single-branch-card .content h4::before {
position: absolute;
content: "";
width: 100%;
height: 14px;
background-color: #c6f5ffd9;
left: 0;
bottom: 2px;
z-index: -1;
}

.single-branch-card .content p {
margin-bottom: 10px;
}

.single-branch-card .content p a {
font-size: inherit;
color: #4ab9cf;
}

.single-branch-card .content .branch-links {
margin-top: 15px;
}

.single-branch-card .content .branch-links a {
text-transform: uppercase;
font-weight: 700;
font-size: 15px;
}

.single-branch-card .content .branch-links a:hover {
padding-left: 5px;
color: #fd7062;
}

.single-branch-card .content .branch-links a i {
margin-left: 5px;
}

.nice-select {
margin-bottom: 20px;
width: 100%;
height: 50px;
border-radius: 0px;
line-height: 50px;
}

.contact-form {
padding-top: 40px;
}

@media (max-width: 585px) {
.contact-form {
    padding-top: 20px;
}
}

.contact-form .single-personal-info {
margin-bottom: 20px;
}

.contact-form input,
.contact-form textarea {
width: 100%;
background: #f8f8f8;
line-height: 1;
padding: 25px 30px;
border: 0px;
}

@media (max-width: 585px) {
.contact-form input,
.contact-form textarea {
    padding: 15px;
    font-size: 13px;
}
}

.contact-form textarea {
height: 220px;
}

@media (max-width: 767px) {
.contact-form textarea {
    height: 160px;
}
}

.contact-form label {
color: #202426;
font-weight: 700;
font-size: 14px;
margin-bottom: 10px;
text-transform: capitalize;
}

.contact-form label span {
color: #727475;
margin-left: 5px;
}

.contact-form input[type='submit'],
.contact-form .submit-btn {
background: #4ab9cf;
color: #fff;
font-weight: 700;
line-height: 1;
padding: 25px 40px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
width: 280px;
}

.contact-form input[type='submit'].active, .contact-form input[type='submit']:hover,
.contact-form .submit-btn.active,
.contact-form .submit-btn:hover {
background-color: #1270b6;
}

.contact-form input[type='submit'] i,
.contact-form .submit-btn i {
margin-right: 8px;
}

@media (max-width: 400px) {
.contact-form input[type='submit'],
.contact-form .submit-btn {
    width: 100%;
}
}

.single-contact-card {
background-color: #f8f8f8;
padding: 40px;
margin-bottom: 30px;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}

@media (max-width: 585px) {
.single-contact-card {
    padding: 30px;
}
}

.single-contact-card:hover {
background-color: #fd7062;
}

.single-contact-card:hover .icon {
color: #fff ;
background-color: #1270b6 ;
}

.single-contact-card:hover .bottom-part .icon {
color: #1270b6 ;
background-color: #fff ;
}

.single-contact-card:hover p,
.single-contact-card:hover span, .single-contact-card:hover h4 {
color: #fff;
}

.single-contact-card .top-part {
overflow: hidden;
}

.single-contact-card .top-part .icon {
width: 70px;
height: 70px;
font-size: 20px;
line-height: 70px;
border-radius: 50%;
background-color: #fff;
text-align: center;
float: left;
color: #1270b6;
overflow: hidden;
margin-right: 20px;
}

.single-contact-card .top-part .title {
overflow: hidden;
}

.single-contact-card .bottom-part {
margin-top: 25px;
overflow: hidden;
}

.single-contact-card .bottom-part .icon {
width: 50px;
height: 50px;
font-size: 14px;
line-height: 50px;
border-radius: 50%;
background-color: #fff;
text-align: center;
float: right;
overflow: hidden;
margin-left: 20px;
}

.single-contact-card .bottom-part .info {
display: inline-block;
overflow: hidden;
}

.contact-map-wrap iframe {
height: 450px;
}

@media (max-width: 991px) {
.contact-map-wrap iframe {
    height: 300px;
}
}

@media (max-width: 58px) {
.contact-map-wrap iframe {
    height: 260px;
}
}

footer ul {
margin: 0px;
padding: 0px;
list-style: none;
}

footer ul li {
list-style: none;
}

footer .footer-widgets-wrapper {
padding: 60px 0px 100px;
}

@media (max-width: 991px) {
footer .footer-widgets-wrapper {
    padding: 40px 0px 80px;
}
}

footer .single-footer-wid {
margin-top: 40px;
}

footer .single-footer-wid .wid-title {
margin-bottom: 25px;
}

@media (min-width: 767px) {
footer .single-footer-wid .wid-title {
    margin-top: 20px;
}
}

footer .single-footer-wid .wid-title h6 {
font-weight: 600;
color: #fff;
font-size: 17px;
}

footer .single-footer-wid ul li a {
margin-top: 8px;
color: #9dacb8;
display: block;
font-size: 15px;
}

footer .single-footer-wid ul li a:hover {
color: #fd7062;
}

footer.footer-2 {
background-color: #4ab9cf;
}

footer.footer-2.bg-overlay::before {
opacity: .9;
}

footer.footer-2 .footer-bottom {
background: transparent;
}

footer.footer-2 .footer-bottom .bottom-content-wrapper {
background: #4ab9cf;
}

footer .footer-bottom {
background-color: #1270b6;
}

@media (max-width: 767px) {
footer .footer-bottom {
    text-align: center;
}
}

footer .footer-bottom .bottom-content-wrapper {
background-color: #fd7062;
padding: 35px 50px;
}

@media (max-width: 767px) {
footer .footer-bottom .bottom-content-wrapper {
    padding: 30px;
}
}

footer .footer-bottom .bottom-content-wrapper p, footer .footer-bottom .bottom-content-wrapper b, footer .footer-bottom .bottom-content-wrapper strong {
color: #FFF;
font-size: 16px;
text-transform: capitalize;
}

footer .footer-bottom .bottom-content-wrapper a {
font-weight: 500;
}

footer .footer-bottom .bottom-content-wrapper ul li {
display: inline-block;
}

footer .footer-bottom .bottom-content-wrapper ul li:first-of-type a {
margin-left: 0;
}

footer .footer-bottom .bottom-content-wrapper ul li a {
display: inline-block;
margin-left: 15px;
font-size: 15px;
color: #fff;
text-transform: capitalize;
}

footer .footer-bottom .social-links a {
display: inline-block;
margin-right: 15px;
color: #fff;
}

footer .footer-bottom .social-links a:hover {
color: #1270b6;
}

footer .footer-bottom .social-links a:last-of-type {
margin-left: 0;
}

.get-in-touch .single-contact-info {
font-size: 15px;
margin-top: 5px;
}

.get-in-touch .single-contact-info .icon {
float: left;
overflow: hidden;
margin-right: 15px;
color: #fd7062;
}

.get-in-touch .single-contact-info .icon.id2 {
color: #4ab9cf;
}

.get-in-touch .single-contact-info .icon.id3 {
color: #FAA21A;
}

.get-in-touch .single-contact-info .contact-info {
overflow: hidden;
color: #9dacb8;
}

.about-transland {
margin-top: 40px;
}

.about-transland a {
display: block;
}

.about-transland p {
color: #9dacb8;
font-size: 15px;
margin-top: 20px;
}

.footer-social-icon {
margin-top: 25px;
}

.footer-social-icon a {
display: inline-block;
width: 40px;
height: 40px;
line-height: 42px;
text-align: center;
background-color: #4ab9cf;
color: #FFF;
font-size: 16px;
margin-right: 5px;
}

.newsletter_widget .newsletter_box {
position: relative;
margin-top: 30px;
}

.newsletter_widget .newsletter_box input {
border: 0px;
border-radius: 0;
width: 100%;
position: relative;
background-color: #2c4c63;
height: 64px;
padding-left: 25px;
padding-right: 15px;
line-height: 64px;
font-size: 14px;
color: #4ab9cf;
}

.newsletter_widget .newsletter_box input::-webkit-input-placeholder {
color: #7d8995;
}

.newsletter_widget .newsletter_box input:-ms-input-placeholder {
color: #7d8995;
}

.newsletter_widget .newsletter_box input::-ms-input-placeholder {
color: #7d8995;
}

.newsletter_widget .newsletter_box input::placeholder {
color: #7d8995;
}

.newsletter_widget .newsletter_box button {
height: 100%;
color: #fff;
display: inline-block;
font-size: 18px;
line-height: 1;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
background: #4ab9cf;
position: absolute;
right: 0;
top: 0;
width: 70px;
}

.newsletter_widget .newsletter_box button:hover {
background-color: #fd7062;
color: #fff;
}

.text-normal{
text-transform: none;
}
/*# sourceMappingURL=style.css.map */ 
</style>


@endsection






