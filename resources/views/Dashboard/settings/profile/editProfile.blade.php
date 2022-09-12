@extends('layouts.admin')

@section('content')


    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> Modifier Profile </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                                        <form class="form" action="{{ route('admin.updateProfile') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="id" value="{{ $user->id }}">

                                            <div class="form-body">

                                                <!-- <h4 class="form-section"><i class="ft-home"></i>Les information du Admin
                                                </h4> -->


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Nom </label>
                                                            <input type="text" value="{{ $user->name }}" id="key"
                                                                class="form-control" placeholder="{{ $user->name }}  "
                                                                name="name">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}<span>
                                                                    @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Email </label>
                                                            <input type="email" value="{{ $user->email }}" id="email"
                                                                class="form-control" placeholder=" {{ $user->email }} "
                                                                name="email">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}<span>
                                                                    @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Nouveau Mot de passe </label>
                                                            <input type="password" value="" id="password"
                                                                class="form-control" placeholder=" Nouveau Mot de passe "
                                                                name="password">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}<span>
                                                                    @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Confirmation mot de passe </label>
                                                            <input type="password" value="" id="repassword"
                                                                class="form-control" placeholder="Confirmation mot de passe"
                                                                name="repassword">
                                                            @error('repassword')
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
                                                    <button type="submit" class="btn btn-info">
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
