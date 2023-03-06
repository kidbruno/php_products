<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

//produtos
Route::get('/', [ProdutoController::class, 'index']);
route::get('/listar_produtos', [ProdutoController::class, 'listarProduto']);
Route::get('/adicionar_produto', [ProdutoController::class, 'adicionarProduto']);
Route::post('/adicionar_produto', [ProdutoController::class, 'adicionarProdutoAction']);
Route::get('/editar_produto/{id}', [ProdutoController::class, 'editarProduto']);
Route::post('/editar_produto/{id}', [ProdutoController::class, 'editarProdutoAction']);
Route::get('/deletar_produto/{id}', [ProdutoController::class, 'deletarProduto']);

//categorias
Route::get('/categorias/{nome?}', [CategoriaController::class, 'index']);
Route::get('/adicionar_categoria', [CategoriaController::class, 'adicionarCategoria']);
Route::post('/adicionar_categoria', [CategoriaController::class, 'adicionarCategoriaAction']);
Route::get('/editar_categoria/{id}', [CategoriaController::class, 'editarCategoria']);
Route::post('/editar_categoria/{id}', [CategoriaController::class, 'editarCategoriaAction']);
Route::get('/deletar_categoria/{id}', [CategoriaController::class, 'deleteCategoria']);




