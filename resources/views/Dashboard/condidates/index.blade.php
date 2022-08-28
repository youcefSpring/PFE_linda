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
                                            <a href="{{route('admin.CondidateChangeStatus',[$i->id,'Accepté'])}}" class="btn btn-success">
                                               <i class="la la-save"></i> Accepté
                                            </a>
                                            <a href="{{route('admin.CondidateChangeStatus',[$i->id,'Refusé'])}}" class="btn btn-danger">
                                            <i class="la la-trash"></i> Refusé
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

