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
						<h2>Demande de congé académique</h2>
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
        @if(Session::has('success'))
        <br><br>
            <div class="row mr-2 ml-2">
                    <button type="text" class="btn btn-lg btn-block btn-success mb-2"
                            id="type-error">{{Session::get('success')}}
                    </button>
            </div>
       @endif
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">

				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-head">
							<!-- Contact Form -->
							<form class="form" action="{{ route('admin.storeLeave')}}" enctype="multipart/form-data" method="POST">
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
                                    <label for="matricule">Matricule</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="matricule" type="text" placeholder="Matricule" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="year_study">Année d'étude</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="year_study" type="text" placeholder="Année d'étude" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
                                    <label for="domaine">Domaine</label>
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input name="domaine" type="text" placeholder="Domaine" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="filiere">Filière</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="filiere" type="text" placeholder="Filière" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="speciality">Spécilaité</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="speciality" type="text" placeholder="Spécilaité" required>
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
                                    <label for="phone">Numéro de téléphone</label>
										<div class="form-group">
											<i class="fa fa-phone"></i>
											<input name="phone" type="number" placeholder="Numéro de téléphone" required>
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="annee_univ">Année universitaire</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="annee_univ" type="text" placeholder="Année universitaire" required>
										</div>
									</div>


                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="c_etudiant">Carte d'étudiant</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="c_etudiant" type="file" placeholder="Carte d'étudiant" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="c_inscription">Certificat d’inscription de l’année universitaire en cours</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="c_inscription" type="file" placeholder="Certificat d’inscription" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="p_justificative">Pièce justificative</label>
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="p_justificative" type="file" placeholder="Pièce justificative" required>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                    <label for="raison">Raison de la demande du congé académique</label>
                                    <br>
                                    <!-- (<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Autre ) -->
										<div class="form-group" id="s">

											<select name="raison" id="raison" class="form-control" onchange="yesnoCheck(this);">
                                                <option value="">Sélectionnez type d'inscription</option>
                                                <option value="Maladie chronique invalidante">Maladie chronique invalidante</option>
                                                <option value="Maternité">Maternité</option>
                                                <option value="Maladie chronique longue durée">Maladie chronique longue durée</option>
                                                <option value="Service national">Service national</option>
                                                <option value="Obligations familiales relatives aux ascendants et/ou descendants, déplacement duconjoint, ou des parents liés à la fonction, …).">
                                                    Obligations familiales relatives aux ascendants et/ou descendants, <br>
                                                     déplacement duconjoint, ou des parents liés à la fonction)</option>
                                               <option value="autre">Autre ...</option>
                                            </select>
										</div>
                                        <div id="ifYes" style="display:none;">
										<div class="form-group">
											<i class="fa fa-file"></i>
											<input name="another_raison" type="text" placeholder="Autre raison">
										</div>
									</div>
									</div>


                                    <div class="form-group">
                <label for="capatcha">Captcha</label>
                <div class="captcha">
                  <span>{!! app('captcha')->display() !!}</span>
                  <!-- <button type="button" class="btn btn-success refresh-cpatcha"><i class="fa fa-refresh"></i></button> -->
                </div>

                @error('g-recaptcha-response')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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

        <script>

            function yesnoCheck(that) {
    if (that.value == "autre") {

        document.getElementById("ifYes").style.display = "block";
        document.getElementById("s").style.display = "none";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
        </script>
		<!--/ End Contact Us -->
@endsection


@section('footer')
@extends('footer')
@endSection
