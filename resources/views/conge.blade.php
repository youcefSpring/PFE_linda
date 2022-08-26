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
                                            <li class="active"><a href="index.html"><i class="fa fa-home"></i>Acceuil</a></li>

                                            <li><a href="{{route('login')}}"><i class="fa fa-address-book"></i>Connexion</a> </li>

                                             <li><a href="{{ route('condidat') }}"><i class="fa fa-address-book"></i>Candidateur</a> </li>
                                             <li><a href="{{ route('condidat') }}"><i class="fa fa-address-book"></i>Cangé Académique</a> </li>

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
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h2>Congé académiques</h2>
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
					<div class="col-lg-8 col-md-8 col-12">
						<div class="form-head">
							<!-- Contact Form -->
							<form class="form" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<i class="fa fa-user"></i>
											<input name="first-name" type="text" placeholder="First name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="last-name" type="text" placeholder="Last name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="email" type="email" placeholder="Email address">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="url" type="url" placeholder="Website url">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group message">
											<i class="fa fa-pencil"></i>
											<textarea name="message" placeholder="Type your message"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<div class="button">
												<button type="submit" class="btn primary">Send Message</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Contact Form -->
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="contact-right">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-map"></i></div>
								<h3>Our Collage Location</h3>
								<p>60 Grant ave. Central New Road 0708, United states of America</p>
							</div>
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<h3>contact information</h3>
								<p><a href="mailto:info@example.com">support@yourwebsite.com</a></p>
								<p>+123 456-7890</p>
							</div>
							<!-- Contact-Info -->
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
			<div class="footer-top overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<!-- About -->
							<div class="single-widget about">
								<h2>About Eduland</h2>
								<ul class="list">
									<li><i class="fa fa-phone"></i>Phone: +123 456-7890 </li>
									<li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@youremail.com">Info@youremail.com</a></li>
									<li><i class="fa fa-map-o"></i>Address: 123, Jolfikar state, Us</li>
								</ul>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="active"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
							<!--/ End About -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Useful Links -->
							<div class="single-widget list">
								<h2>Useful Links</h2>
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="#">Home</a></li>
									<li><i class="fa fa-angle-right"></i><a href="#">About Eduland</a></li>
									<li><i class="fa fa-angle-right"></i><a href="#">Our Courses</a></li>
									<li><i class="fa fa-angle-right"></i><a href="#">Upcoming Events</a></li>
									<li><i class="fa fa-angle-right"></i><a href="#">Faq's</a></li>
								</ul>
							</div>
							<!--/ End Useful Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Useful Links -->
							<div class="single-widget opening-times">
								<h2>Opening Hourse</h2>
								<ul class="list">
									<li><span>Saturday - Sunday</span><div class="value">09am - 05pm</div></li>
									<li><span>Monday - Twisday</span><div class="value">10AM - 02PM</div></li>
									<li><span>Widnesday</span><div class="value">10AM - 12PM</div></li>
									<li><span>Thursday</span><div class="value">08AM - 05PM</div></li>
									<li><span>Friday</span><div class="value off">closed</div></li>
								</ul>
							</div>
							<!--/ End Useful Links -->
						</div>
					</div>
				</div>
			</div>
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
        <script src="{{ asset('front/js/jquery.min.js')}}"></script>
        <script src="{{ asset('front/js/jquery-migrate.min.js')}}"></script>
		<!-- Colors JS-->
        <script src="{{ asset('front/js/colors.js')}}"></script>
		<!-- Popper JS-->
        <script src="{{ asset('front/js/popper.min.js')}}"></script>
		<!-- Bootstrap JS-->
        <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
		<!-- Owl Carousel JS-->
        <script src="{{ asset('front/js/owl.carousel.min.js')}}"></script>
		<!-- Jquery Steller JS -->
		<script src="{{ asset('front/js/jquery.stellar.min.js')}}"></script>
		<!-- Final Countdown JS -->
		<script src="{{ asset('front/js/finalcountdown.min.js')}}"></script>
		<!-- Fancy Box JS-->
		<script src="{{ asset('front/js/facnybox.min.js')}}"></script>
		<!-- Magnific Popup JS-->
		<script src="{{ asset('front/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Circle Progress JS -->
		<script src="{{ asset('front/js/circle-progress.min.js')}}"></script>
		<!-- Nice Select JS -->
		<script src="{{ asset('front/js/niceselect.js')}}"></script>
		<!-- Jquery Steller JS-->
        <script src="{{ asset('front/js/jquery.stellar.min.js')}}"></script>
		<!-- Jquery Steller JS-->
        <script src="{{ asset('front/js/cube-portfolio.min.js')}}"></script>
		<!-- Slick Nav JS-->
        <script src="{{ asset('front/js/slicknav.min.js')}}"></script>
		<!-- Easing JS-->
        <script src="{{ asset('front/js/easing.min.js')}}"></script>
		<!-- Waypoints JS-->
        <script src="{{ asset('front/js/waypoints.min.js')}}"></script>
		<!-- Counter Up JS -->
		<script src="{{ asset('front/js/jquery.counterup.min.js')}}"></script>
		<!-- Scroll Up JS-->
        <script src="{{ asset('front/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Gmaps JS-->
		<script src="{{ asset('front/js/gmaps.min.js')}}"></script>
		<!-- Main JS-->
        <script src="{{ asset('front/js/main.js')}}"></script>
    </body>
</html>
