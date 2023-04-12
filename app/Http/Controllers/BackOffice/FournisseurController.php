<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index(){
        $fournisseurs = Fournisseur::all();
        return view('BackOffice.Fournisseurs.index')->with(compact('fournisseurs'));
    }
    
    public function create(){
        return view('BackOffice.Fournisseurs.create');
    }

    public function store(Request $request){
        // dd($request->all());
         $fournisseur = Fournisseur::create([
             'nom'=>$request->nom,
             'adresse'=>$request->adresse,
             'ville'=>$request->ville,          
         ]);
         return redirect('/admin/fournisseurs');
 
     }

     public function save(Request $request){
        $data = $request->except('');
        $fournisseur = Fournisseur::find($request->id);
        //dd($article);
        $fournisseur->nom = $request->nom;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->ville = $request->ville;
        $fournisseur->save();
        Fournisseur::updateOrCreate(
            ['id'=>$request->id],
            [
                'nom'=>$request->nom,
                'adresse'=>$request->adresse,
                'ville'=>$request->ville,
                
                ]
        );
        
        Fournisseur::updateOrCreate(['id'=>$request->id],$data);
        return redirect('/admin/fournisseurs');
    }



    public function edit($id){
        $fournisseur = Fournisseur::find($id);
        return view('BackOffice.Fournisseurs.edit')->with(compact('fournisseur'));
    }

      public function show($id){
        $fournisseur = Fournisseur::find($id);
        return view('BackOffice.Fournisseurs.show')->with(compact('fournisseur'));
    }
}
