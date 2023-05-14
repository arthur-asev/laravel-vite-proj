<?php
namespace App\Http\Controllers;

use App\Http\Validators\ModalValidator;
use App\Models\Cadastro;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{





    public function cadastrocriar(ModalValidator $request)
    {

        $validator  = $request->validated();
        $data = [
            'nome'           => $validator['nome'],
            'email'          => $validator['email'],
            'telefone'       => $validator['telefone'],
            'cidade'         => $validator['cidade'],
        ];

        $dtano = Carbon::now();


        return response()->json(['success'=>'Registro criado com sucesso.']);

    }




}
