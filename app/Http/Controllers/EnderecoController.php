<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Endereco;

class EnderecoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function criar(Request $request)
    {
        $data = $request->all();
		
		
        dd(Endereco::create([
            "cidade_endereco" => "teste",
            "rua_endereco" => "teste 2"
        ]
		));
		return json_encode("ok");
    }

    public function getAll()
    {
		return dd(Endereco::all());
    }

    public function getOne(Request $request)
    {
        $id = $request->id_endereco;
		return dd(Endereco::find($id));
    }

    public function getOneWhere(Request $request)
    {
        $cidade = $request->cidade_endereco;
		return dd(Endereco::where("cidade_endereco",$cidade)->get());
    }


    // apenas um
    public function updateSingle(Request $request)
    {
        $id = $request->id_endereco;
        $end = Endereco::find($id);

        $end->cidade_endereco = "Arapiraca";

        $end->save();

		return dd(Endereco::find($id)); // TODO get() aq?
    }

    // mass update
    public function updateMass()
    {
        Endereco::where("cidade_endereco","Maceio")->update(['cidade_endereco',"Massayo"]);
		return dd(Endereco::all());;
    }

    // mass update aninhado
    public function updateMassTwo($id)
    {
        Endereco::where("cidade_endereco","Maceio")->where("id_endereco",3)->update(['cidade_endereco',"Massayo"]);
		return dd(Endereco::all());;
    }

    public function deleteOne(Request $request)
    {
        $id = $request->id_endereco;
        $deletado = Endereco::find($id)->delete();
		return dd($deletado);
    }
    
    public function deleteCidade(Request $request)
    {
        $cidade = $request->cidade_endereco;
        $deletado = Endereco::where("cidade_endereco",$cidade)->delete(); 
		return dd($deletado);
    }

}
