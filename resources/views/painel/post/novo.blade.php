@extends('template.master')
@section('classes', 'post novo')
@section('conteudo')
    <div class="container">
        <h4>Criar novo post</h4>
        <div class="row">
            <div class="col s10 offset-1">
                <form method="post" action="{{route('guardaCategoria')}}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="nome" id="nome" type="text">
                            <label for="nome">Nome do post</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="descricao" id="descricao" type="text">
                            <label for="descricao">Descrição do post</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="categoria">

                                <option value="" selected>Selecione...</option>

                                @foreach($categorias as $c)

                                    <option value="{{$c->id}}">{{$c->nome}}</option>

                                @endforeach
                                <label for="categoria"></label>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection