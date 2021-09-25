@extends('layouts.app')
@section('body')
    <div class="d-flex justify-content-center mt-5">
        <div class="card border-primary">
            <div class="card-title text-center mt-2">
                <h4>Cadastrar Paciente</h4>
            </div>
            <div class="card-body" style="width: 50em">
                <form method="POST" action="{{ route('cadastrar') }}">
                    @csrf
                    <div class="form-group">
                        <label for="#nome">Nome Paciente: </label>
                        <input type="text" placeholder="Nome Paciente" id="nome"
                            class="mr-2 pl-5  form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ 'Informe O nome' }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="#Email">Email Paciente: </label>
                        <input type="email" placeholder="Email Paciente" id="Email"
                            class="mr-2 pl-5  form-control  @error('email') is-invalid @enderror" name="email">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ "Email inválido" }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <label for="#Telefone">Telefone Paciente: </label>
                        <input type="text" placeholder="Telefone Paciente" id="Telefone" class="mr-2 pl-5  form-control @error('password') is-invalid @enderror"
                            name="password">
                    </div>
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ "Telefone Inválido" }}</strong>
                    </span>
                    </div>
                @enderror
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-info btn-lg">Salvar</button>
                    </div>
                </form>
                @isset($menssagem)
                <div class="card-footer bg-danger mt-4 text-center rounded-lg" style="color:white">
                    {{$menssagem}}
                </div>
            @endisset
            </div>
        </div>
    </div>

@endsection
