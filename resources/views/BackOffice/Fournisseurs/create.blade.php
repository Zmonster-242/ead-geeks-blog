@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>NOUVEAU FOURNISSEUR</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/fournisseurs" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Nom du fournisseur" name="nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="adresse du fournisseur" name="adresse">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="ville fournisseur" name="ville">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
