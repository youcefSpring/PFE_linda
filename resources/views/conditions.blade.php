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
						<h2>Conditions générales</h2>
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

				<div class="row" >
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-head">

							<form class="form" action="{{ route('condidat')}}" enctype="multipart/form-data" method="GET">
                                @csrf
								<div class="row">
                                    <ol>
                                  <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem soluta reprehenderit dolore voluptates error quia
                                    impedit deserunt ipsum nisi voluptatum reiciendis id quae a
                                     sapiente veritatis odio in, ducimus repudiandae.
                                   </li>
                                   <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem soluta reprehenderit dolore voluptates error quia
                                    impedit deserunt ipsum nisi voluptatum reiciendis id quae a
                                     sapiente veritatis odio in, ducimus repudiandae.
                                   </li>
                                   <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem soluta reprehenderit dolore voluptates error quia
                                    impedit deserunt ipsum nisi voluptatum reiciendis id quae a
                                     sapiente veritatis odio in, ducimus repudiandae.
                                   </li>
                                   <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem soluta reprehenderit dolore voluptates error quia
                                    impedit deserunt ipsum nisi voluptatum reiciendis id quae a
                                     sapiente veritatis odio in, ducimus repudiandae.
                                   </li>
                                   <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem soluta reprehenderit dolore voluptates error quia
                                    impedit deserunt ipsum nisi voluptatum reiciendis id quae a
                                     sapiente veritatis odio in, ducimus repudiandae.
                                   </li>

                                   </ol>
                                  <input type="checkbox" required>
                                  Lu et approuvé
									<div class="col-12">
										<div class="form-group">
											<div class="button">
												<button type="submit" class="btn sm primary">Suivant</button>
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


@section('footer')
@extends('footer')
@endSection


