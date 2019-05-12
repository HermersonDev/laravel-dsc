@extends('template')

@section('titulo', 'Registrar-se')

@section('conteudo')
<h3>Registrar-se</h3>
<hr />
<form method="POST" action="{{ action('UsuarioController@criar') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email"
                       name="usuarios[email]"
                       required="required" placeholder="Informe seu e-mail.">
            </div>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario"
                       name="usuarios[login]"
                       required="required" placeholder="Informe um usuário.">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha"
                       name="usuarios[senha]"
                       required="required" placeholder="Informe uma senha.">
            </div>
            <div class="form-group">
                <label for="csenha">Confirme a Senha</label>
                <input type="password" class="form-control" id="csenha"
                       name="confirmSenha"
                       required="required" placeholder="Repita a senha.">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar-se</button>
</form>
@endsection