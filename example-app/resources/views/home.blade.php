@extends('layouts.app2')

@section('body')
<h3 class="ml-3 mt-3">Bem Vindo {{Auth::user()->name}}</h3>
@endsection
