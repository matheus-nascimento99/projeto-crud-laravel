@extends('layouts.template')

@section('title' , 'Novo cliente')

@section('content')
        <h1>CADASTRO NOVO CLIENTE</h1>
        <br/>
        <br/>
        <form method="post">   
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Nome" name="nome">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Idade</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Idade" name="idade">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
        </form>
@endsection 