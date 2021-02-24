<?php


use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
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
Route::get('/panier',CartComponent::class)->name('product.cart');

//chemin vers le paiment
Route::get('/paiement',CheckComponent::class);


//chemin vers le detail du produit via une url dediée
Route::get('/product/{slug}',DetailsComponent::class)->name('products.details');

//Chemin vers les produits d'une catégorie
Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('products.category');

//Pout l'utilisateur ou client
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
 //   return view('dashboard');
//})->name('dashboard');


//Pour l'utilisateur client
Route::middleware(['auth:sanctum', 'verified',])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});

//Pour l'administrateur
Route::middleware(['auth:sanctum', 'verified',])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/ajouter',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/modifier',AdminEditCategoryComponent::class)->name('admin.editcategory');
});