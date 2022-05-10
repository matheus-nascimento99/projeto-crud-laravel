@extends('layouts.template')

@section('title' , 'Clientes')

@section('content')
    <h1>CLIENTES</h1>
    
    <a href="{{route('clientes.create')}}">Novo Cliente</a>
    <br/>
    <br/>
    <table width="100%" border="1px">
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>ENDEREÇO</th>
            <th>AÇÕES</th>
        </thead>

        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{$item->id_cliente}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->idade}}</td>
                    <td>{{$item->endereco}}</td>
                    <td>
                        <a href="{{route('clientes.edit', ['id'=>$item->id_cliente])}}">[ EDITAR ]</a>
                        <a href="{{route('clientes.remove', ['id'=>$item->id_cliente] )}}" onclick="return confirm('Deseja realmente excluir esse cliente?')">[ EXCLUIR ]</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="d-flex justify-content-center">Não há clientes registrados</td>
                </tr>
                
            @endforelse
        </tbody>
    </table>
    
@endsection 