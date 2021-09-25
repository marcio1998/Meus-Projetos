@extends('layouts.app')
@section('body')
    <div class="d-flex justify-content-center mt-5">
        <div class="card border-primary">
            <div class="card-title ml-2 text-center mt-2">
                <h5> Cadastrar Novo Paciente</h5>
            </div>
            <div class="card-body">
                Para Cadastrar um novo Paciente Pressione o Botão Abaixo
            </div>
            <div class="card-footer text-center">
                <a class="btn btn-outline-primary btn-lg" href="{{ route('cadastrar') }}">Cadastrar</a>
            </div>
        </div>
    </div>
    <hr class="bg-primary">
    <h2 class="text-center">Pacientes</h2>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        @foreach ($pacientes as $item)
            <tr>
                <td> {{ $item->name }} </td>
                <td> {{ $item->email }} </td>
                <td> {{ $item->telefone }} </td>
                <td>
                    <a class="btn btn-outline-dark btn-sm" href="visualizarPaciente/{{$item->id}}">Acessar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
