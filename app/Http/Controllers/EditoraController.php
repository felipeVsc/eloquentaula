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

    public function getEditoraFromLivro($id_livro){
        return dd(Livro::find($id_livro)->editora()->get());
    }

    public function getLivroFromEditora($id_editora){
        return dd(Editora::find($id_editora)->livro()->get());
    }

    public function createEditoraUsingLivro($titulo_livro,$id_editora){
        $edt = Editora::find($id_editora);

        $livro2 = new Livro(["titulo_livro" => $titulo_livro]);

        $edt->livro()->save($livro2);
        return dd(Editora::find(2)->livro()->get());
    }

}
