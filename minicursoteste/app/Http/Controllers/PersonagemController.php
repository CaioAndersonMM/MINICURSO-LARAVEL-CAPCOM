<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index(){
       $personagens = Personagem::all();

       return view('personagens2', ['personagens' => $personagens]);  
    }

    public function editar($id){
        $personagem = Personagem::find($id);
        return view('editar', ['personagem' => $personagem]);  
     }

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

    public function deletarPersonagem($id){
         $personagem = Personagem::find($id);
         if (!$personagem) {
            return redirect()->route('personagens2')->with('error', 'Personagem não encontrado.');
         }

        //Storage::disk('public')->delete("images/{$personagem->imagem}");
 
         $personagem->delete();
 
        return redirect()->route('personagens2')->with('success', 'Personagem deletado com sucesso.');
    }

    public function atualizarPersonagem(Request $request, $id){
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required|string',
        ]);

        $personagem = Personagem::find($id);

        if (!$personagem) {
            return redirect()->route('personagens')->with('error', 'Personagem não encontrado.');
        }

        // Atualiza os dados do personagem
        $personagem->nome = $request->nome;
        $personagem->descricao = $request->descricao;

        // Verifica se uma nova imagem foi enviada
        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete("images/{$personagem->imagem}");
            $nomeImagem = $request->imagem->getClientOriginalName();
            $request->imagem->storeAs('images', $nomeImagem, 'public');
            $personagem->imagem = $nomeImagem;
        }

        $personagem->save();

        return redirect()->route('personagens2')->with('success', 'Personagem atualizado com sucesso.');
    }

}
