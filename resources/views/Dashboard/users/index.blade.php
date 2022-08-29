@extends('layouts.admin')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
    #search{
        float: right;
        width: 400px;
        margin: 10px;
    }
</style>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">

                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des utilisateurs</h4>

                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <br>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="la la-plus"> </i> Ajouter
</button>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    {{-- <li><a data-action="collapse"><i class="ft-minus"></i></a></li> --}}
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>


                                </ul>
                            </div>
                        </div>

                        @include('Dashboard.includes.alerts.success')
                        @include('Dashboard.includes.alerts.errors')
                        <div class="center card-content">
                            <div class="table-responsive">
                                <div class="form-group">

                                   </div>
                                <table class="table table-de mb-0 " id="seancetab" border="2" cellpadding="3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email </th>
                                        <th>type</th>


                                        <th>Actions</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($items as $i )
                                      <tr>
                                          <th>
                                            {{ $i->name }}
                                          </th>
                                          <th>
                                            {{ $i->email }}
                                          </th>
                                          <th>
                                          {{ $i->user_type }}
                                          </th>

                                          <th>

                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$i->id}}">
                                            <i class="la la-edit"></i> Modifier
                                             </button>
                                            <a href="{{ route('admin.UserDelete',$i->id) }}" class="btn btn-danger">
                                            <i class="la la-trash"></i> Supprimer
                                            </a>
                                            <div class="modal fade bd-example-modal-lg" id="exampleModal{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form" action="{{ route('admin.UserUpdate',$i->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Nom & Prénom</label>
                                                        <input type="text" value="{{ $i->name}}" id="name"
                                                               class="form-control"
                                                               placeholder="name"
                                                               name="name"
                                                               minlength="3"
                                                               required>
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Rôle </label>
                                                        <input type="text" value="{{ $i->user_type }}" id="user_type"
                                                               class="form-control"
                                                               placeholder="Rôle d'utilisateur"
                                                               name="user_type"
                                                               required>
                                                        @error('user_type')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Email  </label>
                                                            <input type="email" value="{{ $i->email }}" id="email"
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
                                                            <input type="password" value="{{ old('password') }}" id="password"
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>
                                          </th>
                                          </tr>
                                      @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->

        </div>

</div>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter nouveau utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form" action="{{ route('admin.UserStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Nom & Prénom</label>
                                                        <input type="text" value="{{ old('name') }}" id="name"
                                                               class="form-control"
                                                               placeholder="name"
                                                               name="name"
                                                               minlength="3"
                                                               required>
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   Rôle </label>
                                                        <input type="text" value="{{ old('user_type') }}" id="user_type"
                                                               class="form-control"
                                                               placeholder="Rôle d'utilisateur"
                                                               name="user_type"
                                                               required>
                                                        @error('user_type')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  Email  </label>
                                                            <input type="email" value="{{ old('email') }}" id="email"
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
                                                            <input type="password" value="{{ old('password') }}" id="password"
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

