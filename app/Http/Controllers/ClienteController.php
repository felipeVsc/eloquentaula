<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function criar(Request $request)
    {
        $data = $request->all();
		
		$teste = Cliente::create([
           "nome_cliente" => "Felipe",
           "id_endereco" => 2
        ]
		);
        dd($teste);
		return json_encode("ok");
    }

    public function getAll()
    {
		return dd(Cliente::all());
    }

    public function getOne(Request $request)
    {
        $id = $request->id_cliente;
		return dd(Cliente::find($id));
    }

    public function getOneWhere(Request $request)
    {
        $nome = $request->nome_cliente;
		return dd(Cliente::where("nome_cliente",$nome));
    }


    // apenas um
    public function updateSingle(Request $request)
    {
        $id = $request->id_cliente;
        $end = Cliente::find($id);

        $end->nome_cliente = "Filipe";

        $end->save();

		return dd(Cliente::find($id));
    }

    // mass update
    public function updateMass()
    {
        Cliente::where("nome_cliente","Felipe")->update(['nome_cliente',"Filipe"]);
		return dd(Cliente::all());;
    }

    // mass update aninhado
    public function updateMassTwo($id)
    {
        Cliente::where("nome_cliente","Felipe")->where("id_cliente",1)->update(['nome_cliente',"Filipe"]); // TODO here
		return dd(Cliente::all());;
    }

    public function deleteOne(Request $request)
    {
        $id = $request->id_cliente;
        $deletado = Cliente::find($id)->delete();
		return dd($deletado);
    }
    
    public function deleteCidade(Request $request)
    {
        $nome = $request->nome_cliente;
        $deletado = Cliente::where("nome_cliente",$nome)->delete(); 
		return dd($deletado);
    }

}
