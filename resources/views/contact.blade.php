@extends('header')

		<!--/ End Header -->
       @section('header')
       @extends('header_2')
       @endsection
        <!-- <img src="{{asset('/condidats/11/5.png')}}" alt=""> -->
		<!-- Breadcrumb -->
        @section('body')

		<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<h2>Candidature aux études universitaires en vue de
l’obtention du diplôme de licence et master</h2>
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
                                                <option value="M2 (ENS bac+(, Ingénieur)">M2 (ENS bac+5, Ingénieur)</option>
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
@endsection


<footer>
@extends('footer')
</footer>


