@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>GESTION DES FOURNISSEUR</h4>
                <div style="float: right" class="float-right">
                    <a style="border-radius: 15px;" class="btn btn-sm btn-danger" href="/admin/fournisseur/create" >Ajouter</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped hover table-sm">
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>ADRESSE</th>
                                <th>VILLE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fournisseurs as $fournisseur)
                                <tr>
                                    <td><a href="/admin/fournisseurs/{{ $fournisseur->id }}">{{ $fournisseur->nom }}</a></td>
                                    <td>{{ $fournisseur->adresse}}</td>
                                    <td>{{ $fournisseur->ville}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
