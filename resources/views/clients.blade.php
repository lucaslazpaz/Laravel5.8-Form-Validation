@extends('layout.app', ["current" => "clients"])

@section('body')
<div class="rol">
    <div class="container col-md-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <div class="card-title">
                    <h4>Lista de Clientes</h4>
                    </div>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="clientstable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach ($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->nome}}</td>
                                    <td>{{$client->idade}}</td>
                                    <td>{{$client->endereco}}</td>
                                    <td>{{$client->email}}</td>
                                </tr>
@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
