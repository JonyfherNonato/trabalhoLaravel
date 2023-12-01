@extends('layouts.app')

@section('editar')
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required>{{ $produto->descricao }}</textarea>
        <label for="quantidade_estoque">Quantidade em Estoque:</label>
        <input type="number" name="quantidade_estoque" value="{{ $produto->quantidade_estoque }}" required>
        <label for="valor">Valor:</label>
        <input type="text" name="valor" value="{{ $produto->valor }}" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" value="{{ $produto->categoria }}" required>
        <label for="estado_origem">Estado de Origem:</label>
        <select name="estado_origem" required>
            <option value="estado1" {{ $produto->estado_origem === 'estado1' ? 'selected' : '' }}>Estado 1</option>
            <option value="estado2" {{ $produto->estado_origem === 'estado2' ? 'selected' : '' }}>Estado 2</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
@endsection
