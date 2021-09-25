<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/home');
    }
    return view('welcome');
});

Route::get('/secaoLogin', function(){
    return view('nutricionistaLogin');
});

Route::get('/pacientes','App\Http\Controllers\NutricionistaController@index')->name('pacientes');
Route::get('/cadastrarPAciente','App\Http\Controllers\NutricionistaController@create')->name('cadastrar');
Route::get('/visualizarPaciente/{id}','App\Http\Controllers\NutricionistaController@show')->name('visualizar');
Route::post('/salvarPeso', 'App\Http\Controllers\PesoController@store')->name('salvarpeso');

Route::post('/cadastrarPAciente','App\Http\Controllers\NutricionistaController@store')->name('cadastrar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


