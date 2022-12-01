<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Editora;
use App\Models\Livro;

class EditoraController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getEditoraFromLivro($id){
        return dd(Livro::find($id)->editora()->get());
    }

    public function getLivroFromEditora($id){
        return dd(Editora::find($id)->livro()->get());
    }

    public function createEditoraUsingLivro(){
        $edt = Editora::find(2);

        $livro2 = new Livro(["titulo_livro" => "Teste de Adicao 2"]);

        $edt->livro()->save($livro2);
        return dd(Editora::find(2)->livro()->get());
    }

}
