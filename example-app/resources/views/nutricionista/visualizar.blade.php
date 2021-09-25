@extends('layouts.app')
@section('body')
    <div class="d-flex justify-content-center mt-5">
        <div class="card pt-3" style="width:80em">
            <div class="card-title text-center"><h4 class="text-info">Paciente: {{$paciente->name}}</h4></div>
            <div class="card-body">
                <div>
                    <form action="{{route('salvarpeso')}}" method="POST">
                        <div class="form-group">
                            @csrf
                            <input type="hidden" value="{{$paciente->id}}" name="id">
                            <input type="number" id="peso" placeholder="Ensira o Peso" name="peso">
                        </div>
                        <button class="btn btn-outline-primary" , type="submit">Salvar</button>
                    </form>
                    @if (isset($menssagem))
                        <div class="cardy-body bg-danger">
                            {{$mensagem}}
                        </div>
                    @endif
                </div>
                <table class="table mt-2" id="pesos">
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
        </div>
    </div>
@endsection

@section('javascript')

    <script type = "text/javascript">
        function carregarProdutos(){
            $.getJSON('/api/pesos/'+{{$paciente->id}}, function(data){

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