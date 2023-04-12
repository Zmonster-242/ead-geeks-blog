@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $produit->title }}</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/produit/save" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produit->id }}">
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $produit->name }}" placeholder="Le nom" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $produit->prix }}" placeholder="Le prix" name="prix">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" required class="form-control" placeholder="Saisir le corps de l'article ici .." cols="2" rows="3">{{ $produit->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" {{ $produit->active?'checked':'' }}  name="active">
                        <label for="">Cet article va etre en ligne?</label>
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
