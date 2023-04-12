<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    
    public function index(){
        $clients = Client::all();
        return view('BackOffice.Clients.index')->with(compact('clients'));
    }

    public function create(){
        return view('BackOffice.Clients.create');
    }

    public function store(Request $request){
       // dd($request->all());
        $client = Client::create([
            'nom'=>$request->nom,
            'prénom'=>$request->prénom,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
        ]);
        return redirect('/admin/clients');

    }

    // public function enable($id){
    //     // dd($request->all());
    //     $article = Article::find($id);
    //     $article->active = 1;
    //     $article->save();
    //     return redirect()->back();
    //  }

    // public function disable($id){
    //     // dd($request->all());
    //     $article = Article::find($id);
    //     $article->active = 0;
    //     $article->save();
    //     return redirect()->back();
    // }

    public function save(Request $request){
        $data = $request->except('');
        $client = Client::find($request->id);
        //dd($article);
        $client->nom = $request->nom;
        $client->prénom = $request->prénom;
        $client->telephone = $request->telephone;
        $client->save();
        Client::updateOrCreate(
            ['id'=>$request->id],
            [
                'nom'=>$request->nom,
                'prénom'=>$request->prénom,
                'telephone'=>$request->telephone,
                'adresse'=>$request->adresse
                ]
        );
        Client::updateOrCreate(['id'=>$request->id],$data);
        return redirect('/admin/clients');
    }

    public function edit($id){
        $client = Client::find($id);
        return view('BackOffice.Clients.edit')->with(compact('client'));

    }

    public function show($id){
        $client = Client::find($id);
        return view('BackOffice.Clients.show')->with(compact('client'));

    }
}
