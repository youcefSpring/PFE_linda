@extends('header')

		<!--/ End Header -->
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
                                            <li class="active"><a href="{{route('/')}}"><i class="fa fa-home"></i>Acceuil</a></li>

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
        <!-- <img src="{{asset('/condidats/11/5.png')}}" alt=""> -->
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-4">
						<h2>Conndidat</h2>
					</div>
					<!-- <div class="col-lg-6 col-md-6 col-12">
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="contact.html">contact</a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->

		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<!-- <div class="col-lg-6 offset-lg-3 col-12">
						<div class="section-title bg">
							<h2>Contact <span>Us</span></h2>
							<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
							<div class="icon"><i class="fa fa-paper-plane"></i></div>
						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-head">
							<!-- Contact Form -->
							<form class="form" action="{{ route('admin.storeCondidate')}}" enctype="multipart/form-data" method="POST">
                                @csrf
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="name">Nom & Prénom</label>
										<div class="form-group">
											<i class="fa fa-user"></i>
											<input name="name" type="text" placeholder="Nom et prénom" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="nationality">Nationalité</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="nationality" type="text" placeholder="Nationalité" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="date_n">Date de naissance</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="date_n" type="date" placeholder="Date de naissance" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="lieu_n">Lieu de naissance</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="lieu_n" type="text" placeholder="Lieu de naissance" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="phone">Numéro de téléphone</label>
										<div class="form-group">
											<i class="fa fa-phone"></i>
											<input name="phone" type="number" placeholder="Numéro de téléphone" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="address">Adresse</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="address" type="text" placeholder="Adresse" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="email">Email</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="email" type="text" placeholder="Email" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="l_motivation">Lettre de motivation</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="l_motivation" type="file" placeholder="Lettre de motivation" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="f_voeux">Fiche de voeux</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="f_voeux" type="file" placeholder="Email" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="r_bac">Relevet du Bac</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="r_bac" type="file" placeholder="Relevet du Bac" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="c_diplome">Copie du Diplôme (DUEA, License LMD, Master, Ingénieur, ENS, Sc médicale)</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="c_diplome" type="file" placeholder="Copie du Diplôme" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="c_relevet">Copie des relevets cursus universitaire</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="c_relevet" type="file" placeholder="Copie des relevets cursus universitaire" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="autorisation">Autorisation de l'organisme employeur (les sortants ENS aussi)</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="autorisation" type="file" placeholder="Autorisation employeur" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="type_inscription">Type d'inscription</label>
										<div class="form-group">
											<select name="type_inscription" id="type_inscription" class="form-control">
                                                <option value="">Sélectionnez type d'inscription</option>
                                                <option value="Inscription en L1 (2 ème diplôme)">Inscription en L1 (2 ème diplôme)</option>
                                                <option value="L3 (DUEA , ENS bac+3)">L3 (DUEA , ENS bac+3)</option>
                                                <option value="M1 (L3, ENS bac+4, M1)">M1 (L3, ENS bac+4, M1)</option>
                                                <option value="M2 (ENS bac+(, Ingénieur)">M2 (ENS bac+(, Ingénieur)</option>
                                            </select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<div class="button">
												<button type="submit" class="btn primary">Envoyer</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Contact Form -->
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

		<!-- Clients CSS -->

		<!--/ End Clients CSS -->

		<!-- Footer -->
		<footer class="footer section">
			<!-- Footer Top -->

			<!--/ End Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Copyright -->
							<div class="copyright">
								<p>© Copyright Eduland 2019. Design & Development by <a href="http://themelamp.com">www.themelamp.com</a>, Theme Release By <a href="http://codeglim.com">www.codeglim.com</a></p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Bottom -->
		</footer>
		<!--/ End Footer -->

		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Final Countdown JS -->
		<script src="js/finalcountdown.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Nice Select JS -->
		<script src="js/niceselect.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/cube-portfolio.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Gmaps JS-->
		<script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>
