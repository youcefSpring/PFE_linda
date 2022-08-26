@extends('header')
<body>

        <!-- Header -->
        <header class="header">
            <!-- Header Inner -->
            <div class="header-inner overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Logo -->
                            <div class="logo">
                                <img src="{{ asset('front/image/said.png')}}" alt="#" width=90 px;>
                            </div>
                            <!--/ End Logo -->

                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <div class="menu-bar">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-collapse">
                                        <!-- Main Menu -->
                                        <ul id="nav" class="nav menu navbar-nav">
                                            <li class="active"><a href="index.html"><i class="fa fa-home"></i>Acceuil</a></li>

                                            <li><a href="{{route('login')}}"><i class="fa fa-address-book"></i>Connexion</a> </li>

                                             <li><a href="{{ route('condidat') }}"><i class="fa fa-address-book"></i>Candidateur</a> </li>
                                             <li><a href="{{ route('conge') }}"><i class="fa fa-address-book"></i>Cangé Académique</a> </li>


                                        </ul>
                                        <!-- End Main Menu -->
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Header Inner -->
        </header>
        <!--/ End Header -->
        <!-- Slider Area -->
        <section class="home-slider ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider overlay">
                    <div class="slider-image" style="background-image:url('image/imgumbb.png')"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-10 col-12">
                                <!-- Slider Content -->
                                <div class="slider-content">
                                    <h1 class="slider-title"><span> la plateforme E-Pédagogique de l'université M'hamed Bougara de Boumerdes</span>UMBB Online <b>PEdagogic</b></h1>
                                    <p class="slider-text"> une plateforme numérique dédiée à la gestion des activités pédagogiques à l’université  de Boumerdès.
                Cette plateforme est extensible à plusieurs actions pédagogiques :
              Candidature aux études universitaires en vue de l’obtention du diplôme de licence et master,
               demande de congé académique.</p>

                                </div>
                                <!--/ End Slider Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
            </div>
        </section>
        <!--/ End Slider Area -->
    </body>
   </html>
