<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

// visiteur : /, /contact/, /articles, articles/{id}

// admin : /login, /articles, /

Route::prefix('admin')
    ->namespace('App\Http\Controllers\BackOffice')
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function(){
       Route::get('/dashboard','HomeController');
       Route::get('/articles','ArticleController@index');
       Route::get('/articles/{id}','ArticleController@show');
       Route::get('/articles/edit/{id}','ArticleController@edit');
       Route::post('/articles','ArticleController@store');
       Route::post('/articles/save','ArticleController@save');
       Route::get('/article/create','ArticleController@create');
       Route::get('/article/enable/{id}','ArticleController@enable');
       Route::get('/article/disable/{id}','ArticleController@disable');
       // Route::post('prescription/edit','PrestationController@editPrescription');

       //Clients
       Route::get('/clients','ClientController@index');
       Route::get('/client/create','ClientController@create');
       Route::post('/clients','ClientController@store');
       Route::get('/clients/{id}','ClientController@show');
       Route::get('/clients/edit/{id}','ClientController@edit');
       Route::post('/client/save','ClientController@save');

       //Fournisseur
       Route::get('/fournisseurs','FournisseurController@index');
       Route::get('/fournisseur/create','FournisseurController@create');
       Route::post('/fournisseurs','FournisseurController@store');
       Route::get('/fournisseurs/{id}','FournisseurController@show');
       Route::get('/fournisseurs/edit/{id}','FournisseurController@edit');
       Route::post('/fournisseur/save','FournisseurController@save');



       Route::post('/commande','CommandeController@store');
       Route::get('/commandes/{id}','CommandeController@show');
       Route::get('/produits','CommandeController@getProduits');
       Route::get('/produits/grid','CommandeController@getGridProduits');
       Route::get('/produit/create','CommandeController@CreerProduit');
       Route::post('/produits','CommandeController@stocker');
       Route::get('/produit/enable/{id}','CommandeController@activer');
       Route::get('/produit/disable/{id}','CommandeController@desactiver');

       Route::get('produit/{id}','CommandeController@showpro');
       Route::get('produit/edit/{id}','CommandeController@editpro');
       Route::post('/produit/save','CommandeController@savepro');
       
       // gestion des commandes
       Route::get('/commandes','CommandeController@index');
       Route::get('/commande/create','CommandeController@create');
    });

    Route::namespace('App\Http\Controllers\FrontOffice')
    ->name('front.')
    ->group(function(){
       Route::get('/','HomeController');
       Route::get('/apropos','HomeController@about');
       Route::get('/contact','HomeController@getContactForm');
       Route::get('/articles','ArticleController@index');


    });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login',[UserController::class,'showLoginForm'])->name('login');
Route::post('/login',[UserController::class,'login']);

require __DIR__.'/auth.php';


