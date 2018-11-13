@extends('template.master')
@section('classes', 'login')
@section('conteudo')
    <div class="section"></div>
    <main>
        <center>
            <div class="section"></div>

            <h5 class="indigo-text">Please, login into your account</h5>
            <div class="section"></div>

            <div class="container">
                @if($erro = Session::get('erro'))
                    <h5>Dados não conferem</h5>
                @endif
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    <form class="col s12" method="post" action="{{route('logar')}}">
                        @csrf
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='name' id='name' />
                                <label for='name'>Digite seu usuario</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Digite sua senha</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                            </label>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="#!">Create account</a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
@endsection