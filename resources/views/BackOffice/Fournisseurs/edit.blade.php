@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/fournisseur/save" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fournisseur->id }}">
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $fournisseur->nom }}" placeholder="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $fournisseur->adresse }}" placeholder="adresse" name="adresse">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $cfournisseur->ville }}" placeholder="ville" name="ville">
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
