<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Usuario;

class UsuarioController extends Controller
{
    
	public function criar(Request $request) {
		
		$request->validate([
			'usuarios.email' => 'max:50|email|required',
			'usuarios.senha' => 'same:confirmSenha|required',
			'usuarios.login' => 'max:10|required'
		]);

		$u = new Usuario($request->usuarios);
		$u->senha = Hash::make($u->senha);
		$u->save();

		$request->session()->flash('message-type', 'alert-success');
		$request->session()->flash('message',
			'Usuário criado com sucesso!');

		return redirect('/');
	}

	public function entrar(Request $rq){

		$usuario = Usuario::where('login', $rq->login)->first();

		if($usuario != null && Hash::check($rq->senha, $usuario->senha)) {

			$usuario->senha = $rq->senha;
			$usuario->save();

			$rq->session()->put('usuario', $usuario);

			return redirect('/item/listar');
		}

		$rq->session()->flash('message-type', 'alert-danger');
		$rq->session()->flash('message', 'Login ou senha inválidos !');

		return redirect('/');
	}

}
