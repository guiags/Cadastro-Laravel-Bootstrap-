<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'nome_prod' => $request->nome_prod,
            'custo_prod' => $request->custo_prod,
            'preco_prod' => $request->preco_prod,
            'quantidade_prod' => $request->quantidade_prod,
        ]);

        //return "Sucesso na inserção!";
        return view('produtos.show');
    }


    public function show(){ //$id
        //$produto = Produto::findOrFail($id);
        //return view('produtos.show', ['produto' => $produto]);
        return view('produtos.show');
    }

   



}



