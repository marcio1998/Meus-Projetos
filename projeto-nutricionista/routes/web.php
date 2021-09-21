<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


Route::get('/nutricionistaLogin', function(){
    return view('nutricionistaLogin');
});

Route::get('/pacienteLogin', function(){
    return view('pacienteLogin');
});