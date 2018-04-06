<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Livro;

class LivrosController extends Controller
{
    public function index(){

        return view('cadastro');

    }

    public function save(Request $request)
    {
        //$_POST['nome']
        //cria um novo acesso a model do laravel
        $livro = new Livro();
        //coloca na model os dados vindos do formulario
        $livro->nome = $request->nome;
        $livro->autor = $request->autor;
        $livro->editora = $request->editora;
        $livro->descricao = $request->descricao;
        
        //grava no banco (persistir os dados)

        $livro->save();

        //substitui o Location
        return redirect('/');
        
        
    }

    public function lista()
    {
        $dados = Livro::all();
        return view('lista', compact('dados'));
    }

    public function update(Request $request)
    {
        //$_POST['nome']
        //busca os dados do livro requisitado 
        $livro = Livro::find($request->id);
        //coloca na model os dados vindos do formulario
        $livro->nome = $request->nome;
        $livro->idade = $request->idade;
        $livro->email = $request->email;
        $livro->data = $request->nascimento;
        
        //grava no banco (persistir os dados)

        $livro->save();
        //substitui o Location

        return redirect('/');
        
        
    }

    public function delete(Livro $livro)
    {
        $livro->delete();
        return redirect('/');
        
        //return 'ok';
    }

}
