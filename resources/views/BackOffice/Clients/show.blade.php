@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $client->nom }} {{ $client->nom }}</h4>

            </div>
            <div class="card-body">
               <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <h5 class="text-normal">
                            NOM : <span class="text-bold">{{ $client->nom }}</span>
                        </h5>
                        <h5 class="text-normal">
                            PRENOM : <span class="text-bold">{{ $client->prénom }}</span>
                        </h5>
                        <h5 class="text-normal">
                           TEL : <span class="text-bold">{{ $client->telephone }}</span>
                        </h5>
                        <h5 class="text-normal">
                            ADRESSE : <span class="text-bold">{{ $client->adresse }}</span>
                        </h5>
                        <div>
                            <div style="float: right" class="float-right">
                                <a style="border-radius: 15px;" class="btn btn-sm btn-success" href="/admin/clients/edit/{{ $client->id }}" >Modifier le client</a>
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
