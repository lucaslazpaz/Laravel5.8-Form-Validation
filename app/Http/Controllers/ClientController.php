<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:20',
            'idade' => 'required|max:3',
            'endereco' => 'required|min:5',
            'email' => 'required|email|unique:clients' //passar nome da tabela para consultar
        ];

        $mensagens = [
            'required' => 'O campo :attribute não pode estar em branco.',
            'nome.required' => 'O nome é requerido.',
            'idade.max' => 'É permitido apenas três digitos.',
            'nome.min' => 'É necessário no mínimo 3 caracteres no nome.',
            'email.required' => 'Digite um endereço de e-mail.',
            'email.email' => 'Digite um endereço de e-mail válido.'
        ];

        $request->validate($regras, $mensagens);
    /*
        $request->validate([
            'nome' => 'required|min:3|max:20',
            'idade' => 'required|max:3',
            'endereco' => 'required|min:5',
            'email' => 'required|email|unique:clients' //passar nome da tabela para consultar
        ]);
    */
        $client = new Client();
        $client->nome = $request->input('nome');
        $client->idade = $request->input('idade');
        $client->endereco = $request->input('endereco');
        $client->email = $request->input('email');
        $client->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
