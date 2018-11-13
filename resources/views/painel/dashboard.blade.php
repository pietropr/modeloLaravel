{{--Importa o Template principal--}}
@extends('template.master')

{{--Atribui classes para o Yield classes--}}
@section('classes', 'dashboard')

{{--Section principal--}}
@section('conteudo')
    <div class="container">
        <h4>Bem vindo ao sistema! {{isset($string) ? $string : null }}</h4>
    </div>
@endsection