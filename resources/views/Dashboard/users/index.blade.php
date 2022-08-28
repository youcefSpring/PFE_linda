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
                                          <a href="{{ route('admin.UserEdit',$i->id) }}" class="btn btn-warning">
                                               <i class="la la-edit"></i> Modifier
                                            </a>
                                            <a href="{{ route('admin.UserDelete',$i->id) }}" class="btn btn-danger">
                                            <i class="la la-trash"></i> Supprimer
                                            </a>
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

