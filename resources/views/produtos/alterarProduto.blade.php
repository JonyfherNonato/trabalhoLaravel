@extends('layouts.app')

@section('content')
    <h1>Cadastrar Novo Produto</h1>
    <form method="post" action="{{ route('produtos.store') }}">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea>
        <label for="quantidade_estoque">Quantidade em Estoque:</label>
        <input type="number" name="quantidade_estoque" required>
        <label for="valor">Valor:</label>
        <input type="text" name="valor" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" required>
        <label for="estado_origem">Estado de Origem:</label>
        <select name="estado_origem" required>
            <option value="estado1">Estado 1</option>
            <option value="estado2">Estado 2</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
@endsection
