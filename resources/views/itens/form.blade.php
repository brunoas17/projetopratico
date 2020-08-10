@extends('layout')

@section('titulo')
    {{ $titulo }}
@endsection

@section('conteudo')

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>{{ $titulo }}</h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ !isset($item) ? '' : $item->titulo }}">
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection


