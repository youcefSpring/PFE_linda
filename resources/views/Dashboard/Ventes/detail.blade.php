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
                            <h4 class="card-title">Liste des Détails</h4>

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
                                    {{-- <input type="text" name="search" id="search" class="form-control" placeholder="Recherche" />
                                    <br> --}}
                                   </div>
                                <table class="table table-de mb-0 " id="seancetab" border="2" cellpadding="3">
                                    <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Quantité </th>
                                        <th>Prix</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                         @forelse ($items as $i )
                                           <tr>
                                              <td>{{ $i->product->designation }}</td>
                                              <td>{{ $i->qte }}</td>
                                              <td>{{ $i->price }}</td>
                                        </tr>
                                         @empty
                                           <tr>
                                               <td></td>
                                               <td>Aucun Détail</td>
                                               <td></td>
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

