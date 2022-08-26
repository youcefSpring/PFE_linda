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
                            <h4 class="card-title">Liste des Ventes</h4>

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
                                    {{-- <input type="date" name="search" id="search" class="form-control" placeholder="Recherche" /> --}}
                                    <br>
                                   </div>
                                <table class="table table-de mb-0 " id="seancetab" border="2" cellpadding="3">
                                    <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Date </th>
                                        <th>Somme</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($items as $i )
                                      <tr>
                                           <th>{{ $i->id }}</th>
                                           <th>{{ $i->date_vente }}</th>
                                           <th>{{ $i->total }}</th>
                                           <th>
                                            <div class="btn-group" role="group" aria-label="Basic Example">
                                                <a href="{{ route('admin.SaleDetail', $i->id) }}"
                                                    class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1">
                                                    <i class="la la-edit"></i> Voir Détail
                                                </a>
                                            </div>
                                           </th>
                                        </tr>
                                      @empty
                                          <tr>
                                              <td>Aucun Vente Existe</td>
                                          </tr>
                                      @endforelse
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

