<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Endereco;

class TestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function criar(Request $request)
    {
        $data = $request->all();
		
		Endereco::create([
            'id_endereco' => 4,
            'rua_endereco' => $data['rua_endereco'],
            'cidade_endereco' => $data['cidade_endereco']
        ]
		);
		return redirect('/')->with('message', 'TESTE');
    }

    public function selecionar()
    {
		Endereco::create([
            'id_endereco' => 4,
            'rua_endereco' => $data['rua_endereco'],
            'cidade_endereco' => $data['cidade_endereco']
        ]
		);
		return redirect('/')->with('message', 'TESTE');
    }
}
