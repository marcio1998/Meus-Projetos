@extends('layouts.app')
@section('body')
    <div class="">
        <div class="card row border-primary mt-5 w-50 mx-auto">
            <div class="col-12">
                <h2 class="text-center mt-5">Login</h2>
            </div>
            <div class="col-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror text-center w-100" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                         placeholder="Ensira o Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ "Email Inválido" }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror text-center"
                                        name="password" required autocomplete="current-password"
                                        placeholder="Ensira a Senha">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ "Senha Inválida" }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-md">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
