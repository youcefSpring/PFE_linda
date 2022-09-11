@extends('layouts.admin')

@section('content')
<div class="app-content content">

    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-4 col-md-6">
             <a href="{{ url('admin/condidates')}}">
             <div class="w-75 shadow-xl rounded-lg pt-1   px-2  mb-1 d-flex justify-content-between align-items-end"
                    style="background-color: rgb(255 255 255 / 50%);">
                    <div class="" >
                        <div class="fw-400">Nombre des condidats</div>
                        <div class="fw-normal">
                            <h1 style="color: darkblue;">
                            {{ $a['nbr_condidat']}}
                            </h1>
                        </div>

                    </div>

                </div>
             </a>
            </div>

            <div class="col-xl-4 col-md-6">
             <a href="{{ url('admin/leaves')}}">
             <div class="w-75 shadow-xl rounded-lg pt-1   px-2  mb-1 d-flex justify-content-between align-items-end"
                    style="background-color: rgb(255 255 255 / 50%);">
                    <div class="" >
                        <div class="fw-400">Nombre demande congés académiques</div>
                        <div class="fw-normal">
                            <h1 style="color: darkblue;">
                            {{ $a['nbr_congé']}}
                            </h1>
                        </div>

                    </div>

                </div>
             </a>
            </div>
            @if(auth()->user()->user_type=="Admin")
            <div class="col-xl-4 col-md-6">
             <a href="{{ url('/admin/users')}}">
             <div class="w-75 shadow-xl rounded-lg pt-1   px-2  mb-1 d-flex justify-content-between align-items-end"
                    style="background-color: rgb(255 255 255 / 50%);">
                    <div class="" >
                        <div class="fw-400">Nombre des utilisateur</div>
                        <div class="fw-normal">
                            <h1 style="color: darkblue;">
                            {{ $a['nbr_users']}}
                            </h1>
                        </div>

                    </div>

                </div>
             </a>
            </div>
            @endif
        </div>
   </div>
</div>

@endsection
