<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restauranteController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\menuController;

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

Route::get('main',[restauranteController::class,"main"])->middleware(['auth', 'verified'])->name("main");

Route::get('/', function () {
    return redirect('login');
});
Route::get('borrar/{idRes}',[restauranteController::class,"borrar"])->name("borrar");
Route::get('addRes',[restauranteController::class,"add"])->name("addRes");


Route::get('/dashboard', function () {
    return redirect('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/out', function () {
    Auth::logout();
    return redirect('login');
})->name('out');

Route::get('profile',[profileController::class,"main"])->name("profile");

Route::get('changePass',[profileController::class,"changePass"])->name("changePass");

Route::get('menu/{idRes}',[menuController::class,"main"])->name("menu");

Route::get('addPla',[menuController::class,"add"])->name("addPla");

Route::get('verPlato/{idPla}',[menuController::class,"verPlato"])->name("verPlato");


require __DIR__.'/auth.php';
