@extends('layouts.admin')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Modifier un Gérant de Stock </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> --}}
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.StoreManagerUpdate',$item->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>   Les informations du Nouveau  Gérant de stock  </h4>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Nom </label>
                                                        <input type="text"
                                                               value="{{ $item->nom }}"
                                                               id="nom"
                                                               class="form-control"
                                                               placeholder="nom"
                                                               name="Nom"
                                                               minlength="3"
                                                               required>
                                                        @error('nom')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Prénom </label>
                                                        <input type="email"
                                                               value="{{ $item->prenom }}"
                                                               id="prenom"
                                                               class="form-control"
                                                               placeholder="Prénom"
                                                               name="prenom"
                                                               required>
                                                        @error('prenom')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Téléphone 1  </label>
                                                        <input type="number"
                                                               value="{{ $item->tel_1 }}"
                                                               id="tel_1"
                                                               class="form-control"
                                                               placeholder="Téléphone 1"
                                                               name="tel_1"
                                                               minlength="3"
                                                               required>
                                                        @error('tel_1')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Téléphone 2  </label>
                                                        <input type="number"
                                                               value="{{ $item->tel_2 }}"
                                                               id="tel_2"
                                                               class="form-control"
                                                               placeholder="Téléphone 2"
                                                               name="tel_2"
                                                               minlength="3"
                                                               >
                                                        @error('tel_2')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Adresse </label>
                                                            <input type="text"
                                                                   value="{{ $item->address }}"
                                                                   id="address"
                                                                   class="form-control"
                                                                   placeholder="Adresse"
                                                                   name="address"
                                                                   minlength="3"
                                                                   >
                                                            @error('address')
                                                                <span class="text-danger">{{ $message }}<span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Email  </label>
                                                            <input type="email"
                                                                   value="{{$item->email }}"
                                                                   id="email"
                                                                   class="form-control"
                                                                   placeholder="E-mail"
                                                                   name="email"
                                                                   minlength="3"
                                                                   required>
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}<span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Mot de passe </label>
                                                            <input type="password"
                                                                   value="{{ $item->password }}"
                                                                   id="password"
                                                                   class="form-control"
                                                                   placeholder="Mot de passe"
                                                                   name="password"
                                                                   minlength="3"
                                                                   >
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}<span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    </div>




                                                        <div class="form-actions">
                                                            <button type="button" class="btn btn-danger mr-1"
                                                                    onclick="history.back();">
                                                                <i class="la la-trash"></i> Annuler
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="la la-save"></i> Enregistrer
                                                            </button>
                                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@stop
