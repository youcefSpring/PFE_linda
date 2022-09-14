@extends('layouts.admin')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
                            <h4 class="card-title">Candidature aux études universitaires en vue de l’obtention du diplôme de licence et master</h4>

                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                        <div class="row">
                          <div class="col-md-6"></div>
                        <div class="col-md-6 text-right">
                            <form action="{{ route('admin.CondidateList') }}">
                                <label for="par_jour" style="color:black;">
                                    Mot clé
                                </label>
                                <input type="text" name="search" id="search" >

                                <button type="submit" class="btn btn-success btn-sm">
                                    Filtrer
                                </button>
                            </form>
                        </div>

                      </div>
                            <div class="table-responsive">
                                <div class="form-group">

                                   </div>
                                <table class="table table-striped" id="seancetab" border="2" cellpadding="3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Nationalité </th>
                                        <th>Date /lieu de naissance</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Email</th>
                                        <th>Lettre de motivation</th>
                                        <th>Fiche de voeux</th>
                                        <th>Relevet du bac</th>
                                        <th>Copie du diplôme</th>
                                        <th>Copie des relevets</th>
                                        <th>Autorisation</th>
                                        <th>Type inscription</th>
                                        <th>Status</th>
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
                                            {{ $i->nationality }}
                                          </th>
                                          <th>
                                            {{ $i->date_n  }}  {{ $i->lieu_n  }}
                                          </th>
                                          <th>
                                            {{ $i->phone }}
                                          </th>
                                          <th>
                                          {{ $i->address }}
                                          </th>
                                          <th>
                                            {{ $i->email }}
                                          </th>
                                          <th>
                                          <!-- <img src="{{asset($i->l_motivation)}}" alt="" style="width:80px; height:80px;">
                                         -->
                                         @php
                                             $ls=explode("/",$i->l_motivation)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                             <!-- <img src="{{asset($i->l_motivation)}}" alt="" style="witdh:80px; height: 80px;"> -->
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->f_voeux)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->r_bac)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->c_diplome)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->c_relevet)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->autorisation)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            {{ $i->type_inscription }}
                                          </th>
                                          <th>
                                            {{ $i->status }}
                                          </th>

                                          <th>
                                            <a href="{{route('admin.CondidateChangeStatus',[$i->id,'Accepté'])}}" class="btn btn-success"
                                            onclick="return confirm('Êtes-vous sûr ?')">
                                               <i class="la la-save"></i> Accepté
                                            </a>
                                            <a href="{{route('admin.CondidateChangeStatus',[$i->id,'Refusé'])}}" class="btn btn-danger"
                                            onclick="return confirm('Êtes-vous sûr ?')">
                                            <i class="la la-trash"></i> Refusé
                                            </a>

                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$i->id}}">
                                            <i class="la la-edit"></i> Date dépot
                                             </button>

                                            <div class="modal fade bd-example-modal-lg" id="exampleModal{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Date dépot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form" action="{{ route('admin.condidate.changeDateDepot',$i->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                          <input type="hidden" name="id" value="">

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Date</label>
                                                        <input type="date" value="{{ $i->name}}" id="name"
                                                               class="form-control"
                                                               placeholder="name"
                                                               name="date_depot"
                                                               required>
                                                        @error('date_depot')
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

@endsection

