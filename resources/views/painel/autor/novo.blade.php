@extends('template.master')
@section('classes', 'autor novo')
@section('conteudo')
    @if($alerta = Session::get('aviso'))
        <p>{{$alerta}}</p>
    @endif
    <div class="container">
        <h4>Criar novo autor</h4>
        <form method="post" action="{{route('guardaAutor')}}">
            @csrf
            <div class="row">

                <div class="input-field col s6">
                    <input name="nome" id="nome" type="text">
                    <label for="nome">Nome do autor</label>
                </div>

                <div class="input-field col s6">
                    <input name="email" id="email" type="email">
                    <label for="email">E-mail do autor</label>
                </div>

                <div class="input-field col s6">
                    <input name="user" id="user" type="text">
                    <label for="user">Usuário do autor</label>
                </div>

                <div class="input-field col s6">
                    <input name="passwd" id="passwd" type="password">
                    <label for="passwd">Senha do autor</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection