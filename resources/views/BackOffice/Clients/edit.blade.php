@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/client/save" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $client->id }}">
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $client->nom }}" placeholder="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $client->prénom }}" placeholder="prénom" name="prénom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $client->telephone }}" placeholder="prénom" name="telephone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $client->adresse }}" placeholder="prénom" name="adresse">
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
