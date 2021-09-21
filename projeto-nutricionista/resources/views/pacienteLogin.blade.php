@extends('layouts.app')
@section('body')
    <div class="d-block">
        <h2 class="text-center mt-5">Login Paciente</h2>
        <form class="">
            <div class=" row justify-content-center">
                <input type="text" placeholder="Digite o Login" name="login" class="form-control col-xl-2 m-2 text-center">
            </div>
            <div class="row justify-content-center">
                <input type="password" placeholder="Digite a Senha" name="login" class="form-control col-xl-2 m-2 text-center">
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-lg btn-success col-xl-1 m-2"> Enviar</button>
            </div>
        </form>
    </div>
@endsection
