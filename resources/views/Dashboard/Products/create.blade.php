@extends('layouts.admin')

@section('content')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="app-content content">
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Ajouter une Fiche de paie </h4>
                                {{-- <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a> --}}
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('FichePaieStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="month" value="{{ old('date') }}" id="date"
                                        class="form-control col-md-10"
                                        placeholder="date"
                                        name="date"
                                        required>
                                        <br><br>
                                        <label for="fichier">Fichiers PDF</label>
                                        <input type="file" value="{{ old('moreFields[]') }}" id="fichier"
                                        class="form-control col-md-10"
                                        multiple="multiple"
                                        name="moreFields[]"
                                        required>
                                        {{-- <table class="table table-bordered" id="dynamicAddRemove">
                                            <tr>
                                            {{-- <th>Employée</th> --}}
                                            {{-- <th>Date (Mois/année)</th>
                                            <th>Fichier PDF</th>
                                            {{-- <th>Actions</th>
                                            </tr>
                                            <tr>
                                               {{-- <td>
                                                   @isset($emps)
                                                <select name="moreFields[0][emp]" class="form-control">
                                             @foreach ($emps as $e )
                                                 <option value="{{ $e->id }}">
                                                 {{ $e->nom."  ".$e->prenom }}
                                                 </option>
                                             @endforeach
                                                </select>

                                            @endisset
                                            </td> --}}
                                               {{-- <td>
                                                <input type="date" value="{{ old('date') }}" id="date"
                                                class="form-control"
                                                placeholder="date"
                                                name="moreFields[0][date]"
                                                required>
                                               </td> -
                                               <td>
                                                <input type="file" value="{{ old('fichier') }}" id="fichier"
                                                class="form-control"
                                                multiple="multiple"
                                                name="moreFields[]"
                                                required>
                                               </td>
                                               {{-- <td>
                                                <button type="button" name="add" id="add-btn" class="btn btn-success"
                                                onclick="addTag()">

                                                    <i class="la la-plus"></i>
                                                    Ajouter</button></td>

                                               </td>
                                            </tr>
                                            <script type="text/javascript">
                                                var i = 0;
                                                 var h ={!! json_encode($emps) !!};

                                                function addTag(){
                                                ++i;
                                                $("#dynamicAddRemove").append('<tr>'

                                                +'<td>  <input type="file"  id="fichier" class="form-control" placeholder="date" name="moreFields['+i+'][fichier]" required></td>'
                                                +'<td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
                                                };
                                                $(document).on('click', '.remove-tr', function(){
                                                $(this).parents('tr').remove();
                                                });
                                                </script>
                                        </table> --}}
                                        <div class="row">
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="la la-trash-o"></i> Annuler
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-save"></i> Enregistrer
                                                </button>
                                            </div>
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


<script type="text/javascript">
    var i = 0;
    // var data = @json($emps);
    // consol.log(data);
    function addTag(){
    ++i;
    $("#dynamicAddRemove").append('<tr><td> </td> <td>  <input type="date"  id="date" class="form-control" placeholder="date" name="moreFields['+i+'][date]" required></td><td>  <input type="file"  id="fichier" class="form-control" placeholder="date" name="moreFields['+i+'][fichier]" required></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){
    $(this).parents('tr').remove();
    });
    </script>
@stop
