<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DietaController extends Controller
{
    public function index(){
        return view('nutricionista.dieta');
    }
}
