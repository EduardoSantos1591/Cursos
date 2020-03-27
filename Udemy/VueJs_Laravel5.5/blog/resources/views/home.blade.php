@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <painel titulo="Dashboard" >
                Teste de compoentes

                <div class="row">
                    <div class="col-md-4">
                        <painel titulo="Conteudo 1" cor="blue" >
                            Teste de compoentes
                        </painel>
                    </div>

                    <div class="col-md-4">
                        <painel titulo="Conteudo 2" cor="panel-warning" >
                            Teste de compoentes
                        </painel>
                    </div>

                    <div class="col-md-4">
                        <painel titulo="Conteudo 3" cor="panel-danger" >
                            Teste de compoentes
                        </painel>
                    </div>

                </div>

            </painel>
        </div>
    </div>
</div>

@endsection
