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
                            <div class="mobile-menu"></div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <div class="menu-bar">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-collapse">
                                        <!-- Main Menu -->
                                        <ul id="nav" class="nav menu navbar-nav">
                                            <li class="active"><a href="{{route('/')}}"><i class="fa fa-home"></i>Acceuil</a></li>



                                             <li><a href="{{ route('conditions') }}"><i class="fa fa-address-book"></i>Candidature aux études universitaires</a> </li>
                                             <li><a href="{{ route('conge') }}"><i class="fa fa-address-book"></i>Congé Académique</a> </li>
                                             <li><a href="{{route('login')}}"><i class="fa fa-sign-in"></i>Connexion</a> </li>
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

