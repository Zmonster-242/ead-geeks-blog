@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>NOUVEAU CLIENT</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/clients" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Nom du client" name="nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Prénom du client" name="prénom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Téléphone" name="telephone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Adresse" name="adresse">
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
