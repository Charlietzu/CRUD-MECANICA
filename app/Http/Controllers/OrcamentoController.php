<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;

class OrcamentoController extends Controller
{
    //listar orcamentos
    public function index(){
        $orcamentos = Orcamento::all();
        $total = Orcamento::all()->count();
        return view('list-orcamentos', compact('orcamentos','total'));
    }

    public function create(){
        return view('include-orcamento');
    }

    public function store(Request $request){
        $orcamento = new Orcamento;
        $orcamento->cliente = $request->cliente;
        $orcamento->data = $request->data;
        $orcamento->vendedor = $request->vendedor;
        $orcamento->descricao = $request->descricao;
        $orcamento->valor = $request->valor;
        return redirect()->route('orcamento.index')->with('message','Orcamento cadastrado com sucesso');
    }

    public function edit($id){
        $orcamento = Orcamento::findorFail($id);
        return view('alter-orcamento', compact('orcamento'));
    }

    public function update(Request $request, $id){
        $orcamento = Orcamento::findorFail($id);
        $orcamento->cliente = $request->cliente;
        $orcamento->data = $request->data;
        $orcamento->vendedor = $request->vendedor;
        $orcamento->descricao = $request->descricao;
        $orcamento->valor = $request->valor;
        $ocamento->save();
        return redirect()->route('orcamento.index')->with('message', 'Orcamento alterado com sucesso!');
    }

    public function destroy($id){
        $orcamento = Orcamento::findOrFail($id);
        $orcamento->delete();
        return redirect()->route('orcamento.index')->with('message', 'Orcamento deletado com sucesso!');
    }
}
