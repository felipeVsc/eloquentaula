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


    public function getCSRFToken(){
        return csrf_token();
    }
    public function criarUm(Request $request)
    {
        $data = $request->all();
		
		
       Endereco::create([
            "cidade_endereco" => $data['cidade_endereco'],
            "rua_endereco" => $data['rua_endereco']
        ]
		);
		return json_encode("ok");
    }

    public function criarDois(Request $request)
    {
        $data = $request->all();
		

        $end = new Endereco;
        $end->cidade_endereco = $data['cidade_endereco'];
        $end->rua_endereco = $data['rua_endereco'];

        $end->save();

		return json_encode("ok");
    }

    public function getClienteEndereco($id){
        return dd(Endereco::find($id)->cliente()->get());
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
        $end = Endereco::find(1);
        $end->cidade_endereco = "Arapiraca";
        $end->save();

		return dd(Endereco::find(1));
    }

    // mass update
    public function updateMass()
    {
        Endereco::where("cidade_endereco","Maceio")->update(['cidade_endereco' => "Massayo"]);
		return dd(Endereco::all());
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
