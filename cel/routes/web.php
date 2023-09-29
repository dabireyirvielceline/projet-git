<?php

use App\Models\apprenant;

use App\Http\Controllers\teste;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cohorteController;
use App\Http\Controllers\apprenantcontroller;

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

/* Route::get('/', 'App\Http\Controllers\test@index'); */

Route::get('/header', [test::class,'header']);
Route::get('/footer', [test::class,'footer']);
Route::get('/home/{id}', [test::class,'home'])->whereNumber('id');
 


/* Route::get('/index', function () {   
    return view('index');
});
 */

 route::get('/',[teste::class,'accueil'])->name('accueil');

/* route::get('/apprenant',[teste::class,'apprenant'])->name('apprenant'); */

route::get('/index',[apprenantcontroller::class,'cohorte'])->name('cohorte');
route::get('/apprenant',[apprenantcontroller::class,'apprenant'])->name('apprenant');
route::get('/supprimer/{id}',[apprenantcontroller::class,'destroy'])->name('supprimer');
route::get('/modifier/{id}',[apprenantcontroller::class,'modifier'])->name('modifier');
route::put('/updat/{id}',[apprenantcontroller::class,'update'])->name('updat');
Route::get('/creation', [cohorteController::class,'creation'])->name('creation');
Route::post('/creation', [cohorteController::class,'create'])->name('create');


/* Route::get('/modifier', [apprenantcontroller::class,'modifier'])->name('modifier'); */
 


/* Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
