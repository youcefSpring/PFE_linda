@extends('layouts.admin')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
    #search{
        float: right;
        width: 280px;
        margin: 10px;
    }
</style>
<script href="https://code.jquery.com/jquery-3.5.1.js"></script>
<script href="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
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
                            <h4 class="card-title">Liste des Vendeurs</h4>
                            <br>

                            <a href="{{ route('admin.VendorCreate') }}"
                                        class="btn btn-success btn-min-width box-shadow-3 mr-1 mb-0 float-left">
                                       <i class="la la-plus"></i> Ajouter
                                    </a>
                                    {{-- <a href="{{ route('importEmployeeExcel') }}"
                                    class="btn btn-dark btn-min-width box-shadow-3 mr-1 mb-0 float-left">
                                    <i class="la la-file-excel-o"></i> Importer Excel
                                </a> --}}
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
                        <div class="center card-content">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Recherche" />
                                    <br>
                                   </div>

                                <table class="table table-de mb-0 md-col-12 " id="seancetab" border="2" cellpadding="3" >
                                    <thead>
                                    <tr>
                                        {{-- <th>Matricule</th> --}}
                                        <th>Nom </th>
                                        <th>Prénom</th>
                                        <th>Téléphone 1</th>
                                        <th>Téléphone 2</th>
                                        <th>Adresse</th>
                                        <th>Email</th>

                                        <th>Actions</th>


                                    </tr>
                                    </thead>
                                    <tbody>

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
<script>
    $(document).ready(function(){

     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('live_search.action') }}",
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
    </script>

@endsection

