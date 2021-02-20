<?php


use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckComponent;
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

//Route::get('/', function () {
 //   return view('welcome');
//});

//chemin vers la page d'acceuil
Route::get('/',HomeComponent::class);

//chemin ver la page de boutique
Route::get('/boutique',ShopComponent::class);

//chemin vers le panier
Route::get('/panier',CartComponent::class);

//chemin vers le paiment
Route::get('/paiement',CheckComponent::class);


//chemin vers le detail du produit via une url dediée
Route::get('/product/{slug}');

//Pout l'utilisateur ou client
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');