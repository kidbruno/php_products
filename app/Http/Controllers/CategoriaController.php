<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function index(){

        return view('categories');
    }

    public function adicionarCategoria(){

        return view('addCategory');
    }

    public function adicionarCategoriaAction(Request $request){

        //validando se já não tem uma mesma categoria igual, caso não ai sim inserir
        $categorias = new Categorias;
        $categorias = Categorias::where('categoria_id', '=', $request->category_code);

        if($categorias->count() > 0){

            $error = "Já existe uma categoria com esse mesmo codigo, escolha outro codigo para continuar";
            return view('/categories', compact('error'));

        }

        $categoriasAdicionar = new Categorias;
        $categoriasAdicionar->categoria_id = $request->category_code;
        $categoriasAdicionar->nome = $request->category_name;
        $categoriasAdicionar->save();

        return redirect('/categorias');
    }

    public function listarCategorias(){

        $categorias = Categorias::all();
        return $categorias;
    }

    public function editarCategoria($id){

        $editCategoria = Categorias::find($id);

        return view('editCategoria', compact('editCategoria'));
        // return view('../resources/views/editCategoria', compact('editCategoria'));
    }

    public function editarCategoriaAction(Request $request, $id){

        $editCategoria = Categorias::find($id);
        $editCategoria->nome = $request->category_name;
        $editCategoria->save();

        return redirect('/categorias');
    }

    public function deleteCategoria($id){

        $deleteCategoria = Categorias::find($id);
        $deleteCategoria->delete();

        return redirect('/categorias');
    }
}
