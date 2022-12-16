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
})->middleware('translate');
Route::get('borrar/{idRes}',[restauranteController::class,"borrar"])->middleware('translate')->name("borrar");
Route::get('addRes',[restauranteController::class,"add"])->middleware('translate')->name("addRes");


Route::get('/dashboard', function () {
    return redirect('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/out', function () {
    Auth::logout();
    return redirect('login');
})->middleware('translate')->name('out');

Route::get('profile',[profileController::class,"main"])->middleware('translate')->name("profile");

Route::get('changePass',[profileController::class,"changePass"])->middleware('translate')->name("changePass");

Route::get('menu/{idRes}',[menuController::class,"main"])->middleware('translate')->name("menu");

Route::get('addPla',[menuController::class,"add"])->middleware('translate')->name("addPla");

Route::get('verPlato',[menuController::class,"verPlato"])->middleware('translate')->name("verPlato");

Route::get('cambiarIdioma', function(){
  // Session::put('language',"en");
  if(Session::get("language")=="en"){
    Session::put('language',"es");
  }else{
    Session::put('language',"en");
  }
    return redirect()->back();
})->middleware('translate')->name("cambiarIdioma");

Route::post('cat',[restauranteController::class,"cat"])->middleware('translate')->name("cat");

Route::post('ciu',[restauranteController::class,"ciu"])->middleware('translate')->name("ciu");


require __DIR__.'/auth.php';
