@extends('layouts.template')

@section('title' , 'Alterar cliente')

@section('content')
    <h1>ALTERAR CLIENTE</h1>
    <br/>
    <br/>
    <form method="post">   
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$data->nome}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Idade</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Idade" name="idade" value="{{$data->idade}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Endereço</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="{{$data->endereco}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary">Salvar</button>
            </div>
            </div>
    </form>
@endsection 