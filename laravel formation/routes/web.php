<?php

 
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apprenantcontroller;
use App\Http\Controllers\cohortescontroller;

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
Route::get('/', 'App\Http\Controllers\test@index');
Route::get('/footer', [test::class,'footer'])->name('footer');
Route::get('/header', [test::class,'header'])->name('header');
Route::get('/home{id}',[test::class,'accueil'])->whereNumber('id');
Route::get('/',[apprenantcontroller::class,'accueil'])->name('accueil');
Route::get('/apprenant',[apprenantcontroller::class,'apprenant'] )->name('apprenant');
Route::get('/base',[cohortescontroller::class,'cohortes'])->name('cohortes');
Route::post('/base',[apprenantcontroller::class,'create'])->name('create');
Route::delect('/liste/{id}',[apprenantcontroller::class,'destroy'])->name('liste.destroy');

 

