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
                                <h4 class="card-title" id="basic-layout-form"> Modifier un Employee </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('EmployeeUpdate',$item->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          {{-- <input type="hidden" name="id" value=""> --}}

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>  Modifier Les informations d'Employee  </h4>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Matricule </label>
                                                        <input type="text" value="{{ $item->matricule}}" id="matricule"
                                                               class="form-control"
                                                               placeholder="Matricule"
                                                               name="matricule"
                                                               required>
                                                        @error('matricule')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Email </label>
                                                        <input type="email" value="{{ $item->email }}" id="email"
                                                               class="form-control"
                                                               placeholder="Email"
                                                               name="email"
                                                               required>
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Nom </label>
                                                        <input type="text" value="{{$item->nom }}" id="nom"
                                                               class="form-control"
                                                               placeholder="Nom d'employee"
                                                               name="nom"
                                                               required>
                                                        @error('nom')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Prénom  </label>
                                                        <input type="text" value="{{ $item->prenom }}" id="prenom"
                                                               class="form-control"
                                                               placeholder=" Prénom d'employee "
                                                               name="prenom"
                                                               required>
                                                               @error('prenom')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                </div>




                                                        <div class="form-actions">
                                                            <button type="button" class="btn btn-danger mr-1"
                                                                    onclick="history.back();">
                                                                <i class="ft-x"></i> Annuler
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="la la-check-square-o"></i> Enregistrer
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
