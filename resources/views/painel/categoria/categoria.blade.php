@extends('template.master')
@section('classes', 'categoria single')
@section('conteudo')
    <div class="container">
        <h4>Categoria ID {{$current->id}}</h4>
        <p><strong>Nome da categoria: </strong>{{$current->nome}}</p>
        <p><strong>Data de criação: </strong>{{date('d/m/Y', strtotime($current->created_at))}}</p>
        <p><strong>Horario de criação: </strong>{{date('H:i', strtotime($current->created_at))}}</p>
    </div>

@endsection