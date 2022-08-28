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
                            <h4 class="card-title">Liste des Demandes de congé académiques</h4>

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
                                        <th>Matricule </th>
                                        <th>Année d'étude</th>
                                        <th>Domaine</th>
                                        <th>filière</th>
                                        <th>Spéciality</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Année universitaire</th>
                                        <th>Carte étudiant</th>
                                        <th>Carte inscription</th>
                                        <th>Justificative</th>
                                        <th>Raison</th>
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
                                            {{ $i->matricule }}
                                          </th>
                                          <th>
                                            {{ $i->year_study }}
                                          </th>
                                          <th>
                                            {{ $i->domaine }}
                                          </th>
                                          <th>
                                            {{ $i->filiere }}
                                          </th>
                                          <th>
                                            {{ $i->speciality }}
                                          </th>
                                          <th>
                                            {{ $i->email }}
                                          </th>
                                          <th>
                                            {{ $i->phone }}
                                          </th>
                                          <th>
                                            {{ $i->annee_univ }}
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->c_etudiant)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->c_inscription)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            @php
                                             $ls=explode("/",$i->p_justificative)
                                         @endphp
                                           <a href="{{ route('admin.getfile', [$ls[0],$ls[1],$ls[2]] ) }}">
                                             <i class="la la-download"></i>Télécharger</a>
                                          </th>
                                          <th>
                                            {{ $i->raison }}
                                          </th>
                                          <th>
                                            {{ $i->status }}
                                          </th>
                                          <th>
                                            /
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

<!-- <script>
    $(document).ready(function(){

     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('admin.ProductSearch') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        // console.log(1);
        // $('#total_records').text(data.total_data);
       }
      })
     }

     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
</script> -->
@endsection

