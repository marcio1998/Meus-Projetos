@extends('layouts.app')

@section('body')
<h3 class="ml-3 mt-3">Bem Vindo {{Auth::user()->name}}</h3>
@if (!Auth::user()->nutricionista)
<div class="card  m-4">
    <table class="table m-4" id="pesos">
        <thead>
            <tr>
                <th>Data</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
    
        </tbody>
    </table>
</div>

@endif
@endsection
@section('javascript')

    <script type = "text/javascript">
        function carregarProdutos(){
            $.getJSON('/api/pesos/'+{{Auth::user()->id}}, function(data){

                data.forEach(function(e){
                    console.log(e)
                    let linha = montarLinha(e);
                    $('#pesos>tbody').append(linha)
                })
                
            })
        }

        function montarLinha(peso){
            data = Date.parse(peso.created_at)
            datas = new Date(data)
            let linha = '<tr>'+ 
                    '<td>'+ datas.getDate() + '/' + datas.getMonth()+ '/' + datas.getFullYear() + '</td>' + 
                    '<td>'+ peso.peso  
                
                +'</tr>'
            return linha;
        }
    
        $(function(){
            carregarProdutos()
        })</script>
@endsection
