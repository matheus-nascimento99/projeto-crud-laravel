<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(){
        $data = DB::select("SELECT * FROM clientes");

        return view('clientes.index', [
            'data' => $data
        ]);
    }
    public function create(){
        return view('clientes.create');
    }
    public function createAction(Request $request){
        if($request->filled('nome') && $request->filled('idade') && $request->filled('endereco')){
            $nome = $request->input('nome');
            $idade = $request->input('idade');
            $endereco = $request->input('endereco');

            DB::insert("INSERT INTO clientes(nome, idade, endereco) VALUES(:nome, :idade, :endereco)", [
                'nome' => $nome,
                'idade' => $idade,
                'endereco' => $endereco
            ]);

            return redirect()->route('clientes.index');
        }else{
            return redirect()->route('clientes.create');
        }
    }
    public function edit($id){
        $data = DB::select("SELECT * FROM clientes WHERE id_cliente=:id", [
            'id' => $id
        ]);

        if(count($data)>0){
            return view('clientes.edit', [
                'data'=>$data[0]
            ]);
        }else{
            return redirect()->route('clientes.index');
        }
        
    }
    public function editAction(Request $request, $id){
        if($request->filled('nome') && $request->filled('idade') && $request->filled('endereco')){
            $nome = $request->input('nome');
            $idade = $request->input('idade');
            $endereco = $request->input('endereco');

            DB::update("UPDATE clientes SET nome=:nome, idade=:idade, endereco=:endereco WHERE id_cliente = :id", [
                'nome' => $nome,
                'idade' => $idade,
                'endereco' => $endereco,
                'id' => $id
            ]);

            return redirect()->route('clientes.index');
        }else{
            return redirect()->route('clientes.edit', ['id'=>$id]);
        }
    }
    public function removeAction($id){
        DB::delete("DELETE from clientes WHERE id_cliente=:id", [
            'id' => $id
        ]);

        return redirect()->route('clientes.index');
    }
}
