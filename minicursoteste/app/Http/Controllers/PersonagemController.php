<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function adicionarPersonagem(Request $request){
        echo"oi";
        
        if($request->hasFile('imagem')){
            echo "teste";
            $NomeImagem = $request->imagem->getClientOriginalName();
            $request->imagem->storeAs('images', $NomeImagem,'public');
            $data =[
                'nome'=> $request->nome,
                'imagem'=> $NomeImagem,
                'descricao'=> $request->descricao,
            ];
            Personagem::create($data);
        }        
    }

    public function deletarUser($data){

    }

    public function atualizarUser($data){

    }
}
