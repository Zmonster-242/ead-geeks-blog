@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>GESTION DES CLIENT</h4>
                <div style="float: right" class="float-right">
                    <a style="border-radius: 15px;" class="btn btn-sm btn-danger" href="/admin/client/create" >Ajouter</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped hover table-sm">
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>TELEPHONE</th>
                                <th>ADRESSE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td><a href="/admin/clients/{{ $client->id }}">{{ $client->nom }}</a></td>
                                    <td>{{ $client->prénom }}</td>
                                    <td>{{ $client->telephone}}</td>
                                    <td>{{ $client->adresse }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
