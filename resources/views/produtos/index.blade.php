@extends('layouts.app')

@section('produtos')
    <h1>Lista de Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade em Estoque</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Estado de Origem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quantidade_estoque }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>{{ $produto->estado_origem }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produtos.create') }}">Novo Produto</a>
@endsection
