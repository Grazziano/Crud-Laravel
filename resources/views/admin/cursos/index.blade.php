@extends('layout.site')
@section('titulo', 'Cursos')
@section('conteudo')
        
<div class="container">
    <h3 class="center">Lista de Cursos</h3>

    <div class="row">
        <table>
            <thead>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Publicado</th>
                <th>Ação</th>
            </thead>

            <tbody>
                @foreach ($registros as $registro)
                    
                <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->titulo}}</td>
                <td>{{$registro->descricao}}</td>
                <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                <td>{{$registro->publicado}}</td>
                <td>
                <a href="{{route('admin.editar', $registro->id)}}" class="btn deep-orange">Editar</a>
                <a href="{{route('admin.deletar', $registro->id)}}" class="btn red">Deletar</a>
                </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
    <a href="{{route('admin.adicionar')}}" class="btn blue">Adicionar</a>
    </div>

</div>

@endsection