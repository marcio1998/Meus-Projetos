<?php

namespace App\Http\Controllers;

use App\Models\Peso;
use App\Models\Paciente;
use Exception;
use Illuminate\Http\Request;

class PesoController extends Controller
{

    public function index($id)
    {
        $peso = Peso::where('paciente_id', $id)->get();
        return json_encode($peso);
    }

    public function store(Request $request)
    {
        try {
            $peso = new Peso();
            $peso->peso = $request->input('peso');
            // $paciente = Paciente::find($request->input('id'))->where('users_id', $request->input('id'));
            $paciente = Paciente::where('users_id', $request->input('id'))->first();
            $peso->paciente()->associate($paciente);
            $peso->save();
            $id = $peso->paciente_id;
            return redirect("/visualizarPaciente/" . $id);
        } catch (Exception $e) {
           return  redirect('/home');
        }
    }
}
