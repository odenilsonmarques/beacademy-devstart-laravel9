<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ViaCepController extends Controller
{
    //
    public function index()
    {
        return view('viaCep.index');
    }

    public function indexAction(Request $request)
    {
        //verificando se foi passado um cep no input do form, caos sim entra nesse if, caso não é retornado o form novamente
        if($request->cep)
            return redirect('/viacep/'.$request->cep);

        return view('viaCep.index');
    }

    public function show($cep)
    {
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/')->json();

        dd($response);
    }
}
