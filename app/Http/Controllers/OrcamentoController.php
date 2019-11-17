<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;

class OrcamentoController extends Controller
{
    public function index(){
        $orcamentos = Orcamento::orderBy('created_at','desc')->paginate(10);
        return view('orcamento.lista', ['orcamentos' => $orcamentos]);
    }

    public function create(){
        return view('orcamento.cadorcamento');
    }

    public function store(Request $request){
        request()->validate([
            'cliente' => 'required',
            'data' => 'required',
            'vendedor' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
        ]);
        Orcamento::create($request->all());
        return redirect()->route('orcamento.index')->with('message','Orcamento cadastrado com sucesso');
    }

    public function edit($id){
        $orcamento = Orcamento::findorFail($id);
        return view('orcamento.edit', compact('orcamento'));
    }

    public function update(Request $request, $id){  
        request()->validate([
            'cliente' => 'required',
            'data' => 'required',
            'vendedor' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
        ]);
        Orcamento::find($id)->update($request->all());
        return redirect()->route('orcamento.index')->with('message', 'Orcamento alterado com sucesso!');
    }

    public function destroy($id){
        //Orcamento::find($id)->delete();
        $orcamento = Orcamento::find($id);
        $orcamento->delete();
        return redirect()->route('orcamento.index')->with('message', 'Orcamento deletado com sucesso!');

    }

    public function show($id){

    }

    public function search(Request $request){
        
    }
}
