@extends('Layouts.back')
{{-- on a copier ce dossier dans article --}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $produit->title }}</h4>

            </div>
            <div class="card-body">
               <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                      
                        <h5 class="text-normal">
                            NOM : <span class="text-bold">{{ $produit->name }}</span>
                        </h5>
                        <h5 class="text-normal">
                           PRIX  : <span class="text-bold">{{ $produit->prix }}</span>
                        </h5>
                        <div>
                            <span class="badge badge-{{ $produit->active?'success':'danger' }}">{{ $produit->active?'En ligne':'Hors ligne' }}</span>
                        </div>
                        <div style="float: right" class="float-right">                        {{--   modifie --}}
                            <a style="border-radius: 15px;" class="btn btn-sm btn-success" href="/admin/produit/edit/{{ $produit->id }}" >Modifier</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div style="max-height: 300px; overflow: scroll">
                         DESCRIPTION :  <p>{{ $produit->description }}</p>
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
