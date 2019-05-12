@extends('template')

@section('titulo', 'Login')

@section('conteudo')
<h3>Login</h3>
<hr />
<form method="POST" action="{{ action('UsuarioController@entrar') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="login">Usuário</label>
        <input type="text" class="form-control" id="login"
               aria-describedby="loginHelp"
               name="login"
               required="required" placeholder="Informe seu login.">
        <small id="loginHelp" class="form-text text-muted">Caso não possua login, cadastre-se
            <a href="{{ route('registrar') }}">clicando aqui</a>.</small>
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha"
               name="senha"
               required="required" placeholder="Informa sua senha.">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>
@endsection