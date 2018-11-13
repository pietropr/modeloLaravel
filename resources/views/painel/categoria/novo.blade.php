@extends('template.master')
@section('classes', 'categoria novo')
@section('conteudo')
    @if($alerta = Session::get('aviso'))
        <p>{{$alerta}}</p>
    @endif
    <div class="container">
        <div class="row">
            <div class="col s6">
                <h4>Criar nova categoria</h4>
                <form method="post" action="{{route('guardaCategoria')}}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="nome" id="nome" type="text">
                            <label for="nome">Nome da categoria</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s6">
                <h4>Categorias cadastradas</h4>
                <ul>
                    @foreach($categorias as $c)
                        <li>{{$c->nome}} <a class="green-text material-icons" href="{{route('mostraCategoria', ['id' => $c->id])}}">remove_red_eye</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection