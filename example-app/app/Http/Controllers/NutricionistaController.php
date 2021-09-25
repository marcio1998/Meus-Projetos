<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class NutricionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarTodosPacientes(){

    }
    
    
     public function index()
    {
        $pacientes = User::all()->where('nutricionista_id',Auth::user()->id)->sortBy('name');
        return view('nutricionista.pacientes', compact(['pacientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutricionista.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   try{
        $user = new User();
        $pacientes = new Paciente();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->telefone = $request->input('password');
        $user->email = $request->input('email');
        $user->nutricionista = false;
        $user->nutricionista_id = Auth::user()->id;
        $user->save();
        $pacientes->users_id = $user->id;
        $pacientes->save();
        return redirect('pacientes');
    }catch(Exception $e){
        $menssagem = "Paciente Provavelmente Cadastrado Verifique -  Em qualquer caso contate o Suporte";
        return view('nutricionista.cadastrar', compact(['menssagem']));
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = User::find($id);
        return view('nutricionista.visualizar', compact(['paciente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
