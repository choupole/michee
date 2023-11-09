<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DemanderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\RequerantController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\VisiteController;
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
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/', function () {
    return view('user.home');
})->middleware(['auth', 'verified'])->name('user.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/recherche', [SearchController::class, 'search'])->name('recherche');
    Route::get('/visite', [HomeController::class, 'visite'])->name('visite');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('administrateurs', AdministrateurController::class);
    // Route::resource('users', UserController::class)->middleware('checkaccess:User');
    Route::resource('demanders', DemanderController::class);
    Route::resource('modes', ModeController::class);
    Route::resource('paiements', PaiementController::class);
    Route::resource('photos', PhotoController::class);
    Route::resource('posters', PosterController::class);
    Route::resource('proprietes', ProprieteController::class);
    Route::resource('requerants', RequerantController::class);
    Route::resource('responsables', ResponsableController::class);
    Route::resource('tarifs', TarifController::class);
    Route::resource('visites', VisiteController::class);
    Route::resource('categories', CategorieController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});

require __DIR__.'/auth.php';
