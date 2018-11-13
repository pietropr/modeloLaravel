<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class AuthController extends Controller
{

    public function logar(Request $request)
    {
        $dados = $request->except('_token', 'btn_login');

        //Auth::attempt faz a verificação dos dados no banco
        if(Auth::attempt($dados)) {

            return Redirect::route('index');

        }
        else {
            return Redirect::back()->with('erro', 'Dados não conferem');
        }

    }
    public function logout()
    {

        Auth::logout();
        return Redirect::to('/');

    }
}
