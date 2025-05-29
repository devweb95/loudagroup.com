@extends('layouts.layout1')
@extends('layouts.slide1')
@php
    $title = 'Responsabilitée Social';
    $subtitle = 'RSE';
@endphp


@section('content')

@include('pages.ce_que_nous_faison')

<!-- tpm-header-area start -->




    <!-- faq area start -->
    <div class="tmp-faq-area-three tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-faq">
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/faq/03.png') }}" alt="business_faq">
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-5">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/portfolio/portfolio-10.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 pl--50 pl_sm--15">
                                <div class="faq-accordion faq-accordion-style-two">
                                    <div class="accordion" id="accordionExample">
                                        <div class="section-head text-align-left mb--30">
                                            <span class="subtitle color-gradiant">ACTUALITEE</span>
                                            <h2 class="title split-collab">Louda renforce son offre</br>logistique et opérationnelle</h2>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingOne">
                                                <div class="accordion-button" data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                    <div class="accordion-button-left">
                                                        <i class="fa-regular fa-question"></i>
                                                        <span>Comment Louda s’adapte-t-il aux besoins du secteur minier burkinabè</span>
                                                    </div>
                                                    <div class="accordion-button-right">
                                                        <i class="fa-sharp fa-light fa-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="description">
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

    
    <!-- Start Portfolio Area  -->
     <!--   <div class="portfolio-area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant"></span>
                            <h2 class="title color-white split-collab"></h2>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--10">
                <div class="col-lg-6 col-md-6 col-sm-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        
                        <img src="{{ asset('assets/images/portfolio/c4.jpg') }}" alt="corporate business">

                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                       
                        <img src="{{ asset('assets/images/portfolio/c1.jpg') }}" alt="corporate business">

                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        
                        <img src="{{ asset('assets/images/portfolio/c3.jpg') }}" alt="business Corporate portfolio">

                        
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    -->
    <!-- End Portfolio Area  -->

    <!-- Start Skill Area  -->
    <div class="skill-area tmp-section-gap ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="skill-inner pr--30">
                        <div class="section-head pb--30  text-align-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="subtitle" style="color: #2170b8; text-transform: uppercase; font-size: 24px;">Notre engagement RSE</span>
                            <h2 class="title split-collab"></h2>
                        </div>
        
                        <p class="description">
                            Chez <strong>Louda Group</strong>, nous croyons qu’une croissance durable passe par un engagement fort envers les communautés, l’environnement et les principes éthiques. Notre stratégie RSE s’intègre pleinement à nos opérations pour créer un impact positif et durable là où nous intervenons.
                        </p>

                        <p class="description">
                            <strong>• Soutien aux communautés locales</strong> : Louda mène des actions concrètes dans les zones où elle opère, notamment à travers des projets de développement local, le soutien à l’éducation et la formation des jeunes, ainsi que la création d’opportunités d’emploi.
                            <br><strong>• Respect de l’environnement</strong> : Nous intégrons des pratiques responsables dans notre logistique et nos opérations, avec une attention particulière à la gestion des déchets, à la réduction de l’empreinte carbone et à la préservation des ressources naturelles.
                            <br><strong>• Sécurité & conditions de travail</strong> : Nous plaçons la santé, la sécurité et le bien-être de nos collaborateurs au cœur de nos priorités, en assurant des formations régulières, des équipements adaptés et un environnement de travail sain et sécurisé.
                        </p>


                       
                    </div>
                </div>

                <div class="col-lg-6 pl--60 pl_sm--10" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="skill-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/b5.jpg') }}" alt="about">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Skill Area  -->

     <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant">ACTUALITE</span>
                            <h2 class="title split-collab">Fils d'actualité</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/portfolio/mZzFKdzrXPrAiymeiIn9.jpg') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">28/08/2023</span>
                                    <span class="designation">Orpaillage</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Les femmes du secteur minier commencent le travail de reconversion.</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
                                        <span class="read-more-text">Lire </span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/portfolio/bOyJENMk5Tz5UMwGdVvl.jpg') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">28/08/2023</span>
                                    <span class="designation">
                                        Embattled Avocet</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Embattled Avocet achève la vente de ses actifs au Burkina Faso</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
                                        <span class="read-more-text">Lire</span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/portfolio/RYeirbSNridE0NoWSp6o.jpg') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">28/08/2023</span>
                                    <span class="designation">Mine</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Au Burkina Faso, des réquisitions d’or pour soutenir l’effort de guerre.</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
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
    <!-- Tmp Blog Area Start  -->



    @include('pages.clients')
   


@endsection