<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class RegisterController extends Controller
{
    private function getAllProds(){
        return Produto::all();
    }

    private function produtoExist($desc){
        return Produto::where('descricao', "=", $desc)->exists();
    }

    public function add(Request $request){
        $produto = new Produto();
        $produto->descricao = $request->descricao;
        $produto->categoria = $request->categoria;
        $produto->quantidade = $request->quantidade;

        if($this->produtoExist($produto->descricao)){
            return redirect()->route('produto.cadastro')->with('status', ['type' => 'danger', 'message' => 'Produto ja existe.']);
        }

        $produto->save();

        return redirect()->route('produto.cadastro')->with('status', ['type' => 'sucess', 'message' => 'Produto cadastro com sucesso.']);
    }

    public function list(){
        $produtos = $this->getAllProds();

        return view('lista')->with('produtos', $produtos);
    }

    public function delete($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('produto.list')
        ->with('status', ['type' => 'sucess', 'message' => 'Deletado com sucesso']);
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('update')->with('produto', $produto);
    }

    public function update(Request $request){
        $produto = Produto::find($request->id);
        $produto->update([
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'quantidade' => $request->quantidade
        ]);

        return redirect()->route('produto.list')->with(['produtos' => $this->getAllProds(), 'status' => ['type' => 'sucess', 'message' => 'Atualizado com sucesso']]);
    }

}
