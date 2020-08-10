@extends('layout')

@section('titulo')
Lista de Itens
@endsection

@section('conteudo')

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Lista de Itens</h1>
        </div>
        <div class="col-md-6">
            <a href="/itens/form" class="btn btn-primary btn-xs float-right"><b>+</b> Adicionar</a>
        </div>
    </div>
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    <table class="table table-striped custab">
        <thead>
            <tr>
                <th>ID</th>
                <th>titulo</th>
                <th class="text-center">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itens as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->titulo }}</td>
                    <td class="text-center">
                        <a class="btn btn-info btn-xs" href="itens/edit/{{ $item->id }}"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                        <a class="btn btn-danger btn-xs" href="itens/remover/{{ $item->id }}"><span class="glyphicon glyphicon-remove"></span> Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


