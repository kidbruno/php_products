<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function index(){

        return view('dashboard');
    }

    public function listarProduto(){

        $produtos = Produtos::all();
        return view('products', compact('produtos'));
    }

    public function adicionarProduto(){

        return view('addProduct');
    }

    public function adicionarProdutoAction(Request $request){

        $produto = new Produtos;
        $produto->nome = $request->nome;
        $produto->email = $request->email;
        $produto->sku = $request->sku;
        $produto->preco = $request->price;
        $produto->quantidade = $request->quantity;
        $produto->categoria_id = $request->categoria;
        $produto->descricao = $request->description;
        $produto->save();

        return redirect('/');
    }

    function validaEmail($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            return true;
        }else{

            return false;
        }
    }

    public function editarProduto($id){

        $editProduto = Produtos::find($id);

        return view('editProduct', compact('editProduto'));
    }

    public function editarProdutoAction(Request $request, $id){

        //sempre quando for fazer o editar e salvar os dados alterados pelo usuario tem antes que pegar o seu id
        //enviado para saber qual o produto vai ser alterado
        $edit = Produtos::find($id);
        $edit->nome = $request->nome;
        $edit->sku = $request->sku;
        $edit->preco = $request->preco;
        $edit->descricao = $request->descricao;
        $edit->quantidade = $request->quantidade;
        $edit->save();

        return redirect('/listar_produtos');

    }

    public function deletarProduto($id){

        $delete = Produtos::find($id);

        $delete->delete();
        return redirect('/listar_produtos');
    }

}
