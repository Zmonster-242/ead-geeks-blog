@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $fournisseur->nom }} {{ $fournisseur->nom }}</h4>

            </div>
            <div class="card-body">
               <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <h5 class="text-normal">
                            NOM : <span class="text-bold">{{ $fournisseur->nom }}</span>
                        </h5>
                        <h5 class="text-normal">
                            ADRESSE : <span class="text-bold">{{ $fournisseur->adresse }}</span>
                        </h5>
                        <h5 class="text-normal">
                           VILLE : <span class="text-bold">{{ $fournisseur->ville }}</span>
                        </h5>
                        <div>
                            <div style="float: right" class="float-right">
                                <a style="border-radius: 15px;" class="btn btn-sm btn-success" href="/admin/fournisseurs/edit/{{ $fournisseur->id }}" >Modifier le fournisseur</a>
                            </div>

                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
