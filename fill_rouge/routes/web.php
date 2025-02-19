<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ForgetpasswordController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendeurController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home1');
})->name('home');


Route::post('/sendMessage', [UserController::class, 'sendMessage'])->name('send.message');



Route::middleware('guest')->group(function(){

});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', [UserController::class, 'indexRegistre'])->name('register');

Route::get('/produit', [ProductController::class, 'indexProduct'])->name('index.produit');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/deconnecter', [UserController::class, 'deconnecter'])->name('user.deconnecter');
Route::get('/product', [ProductController::class, 'indexDetail'])->name('product.detail');


Route::post('/ajouterpaier', [PanierController::class, 'ajouterProduit'])->name('panier.ajouter');

Route::get('/dec/{id}', [ProductController::class, 'indexDetail'])->name('dec');


/* * ******************************************pour Admin   ****************************************************** */
Route::middleware(CheckRole::class)->group(function () {
    Route::get('/validationVendeur', [VendeurController::class, 'indexVendeurNonValidesestValider'])->name('validation');
    Route::post('/validerVendeur/{id}', [VendeurController::class, 'validerVendeur'])->name('validerVendeur');
    Route::post('/invaliderVendeur/{id}', [VendeurController::class, 'invaliderVendeur'])->name('invaliderVendeur');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::post('/categories/create', [CategoriesController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}/update', [CategoriesController::class, 'update'])->name('categories.update');

    Route::get('/dashboard',[UserController::class, 'indexAdmindash'])->name('Admin.dashboard');


    Route::get('/profiel', function () {
        return view('Admin.profiel');
    })->name('profiel');

    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');

    Route::get('/indexMessage',  [UserController::class, 'indexMessage'])->name('indexMessage');
    Route::delete('/messages/{id}', [UserController::class, 'deleteMessage'])->name('messages.destroy');

    Route::get('/fetchart', [PanierController::class, 'achatsDesDerniersJours']);
});
//*************************************************************************************************************************


/* *********************************************** Vendeur *********************************************** */




Route::get('/ajouterProduit', [ProductController::class, 'indexAjouterProduit'])->name('vendeur.ajouterProduit');
Route::post('/ajoouterProduit',[ProductController::class, 'ajouterProduit'])->name('ajoouterProduit');

Route::get('/dashbord/vendeur', [VendeurController::class, 'index'])->name('vendor.dashboard');
Route::get('/dashbord/vendeur/gestionProduit',[ProductController::class, 'afficherTousProduits'])->name('vendeur.gestionProduit');

Route::get('/dashbord/vendeur/modifierProduit/{id}' ,[ProductController::class, 'indexUpdate'])->name('updateProduit');

Route::put('/dashbord/vendeur/modifierProduit/{id}', [ProductController::class, 'modifierProduit'])->name('modifierProduit');

Route::delete('/dashbord/vendeur/supprimerProduit/{id}', [ProductController::class, 'supprimerProduit'])->name('supprimerProduit');

Route::get('/profiel/vendeur', function () {
    return view('vendeur.profiel');
})->name('vendeur.profiel');


Route::put('/profile/update/vendeur', [UserController::class, 'update'])->name('profile.update.vendeur');
Route::get('/listachat', [VendeurController::class, 'indexAchat'])->name('achats.index');
Route::put('/validation/achat/produit/{id}', [VendeurController::class, 'validerAchatProduit'])->name('validation.produit');



/* ****************************************************************************************************************** */



Route::get('/validation', [PanierController::class, 'IndexvalidationAchat'])->name('valider.Achat');

Route::get('/get_panier_info', [ProductController::class, 'get_panier_info'])->name('get_panier_info');
Route::delete('/panier/supprimer/{product}', [PanierController::class, 'supprimerProduitPanier'])->name('panier.supprimer');
Route::post('/validerachat', [PanierController::class, 'validerAchat'])->name('acheter.produit');

