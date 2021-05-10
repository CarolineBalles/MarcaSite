<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proposal;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('listAllClients', ['clients' => $client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|unique:clients,company_name|min:8',
            'fantasy_name' => 'required|unique:clients,fantasy_name|min:8',
            'cnpj' => 'required|formato_cnpj|unique:clients,cnpj',
            'address' => 'required|min:8',
            'email' => 'required|unique:clients,email',
            'telephone' => 'required|telefone_com_ddd',
            'name' => 'required|min:8',
            'cpf' => 'required|formato_cpf|unique:clients,cpf',
            'cell' => 'required|celular_com_ddd',
        ]);
        $client = new Client();
        $client->company_name = $request->company_name;
        $client->fantasy_name = $request->fantasy_name;
        $client->cnpj = $request->cnpj;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cell = $request->cell;
        //dd($client);
        $client->save();
        return redirect()->route('user.index')->with('message', 'Cliente Criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($client)
    {
        //dd($client);
        $proposal = Proposal::where('client_name', '=', $client)->get();
        return view('listAllClientProposals', ['proposals' => $proposal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('updateClient', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'company_name' => 'required|min:8',
            'fantasy_name' => 'required|min:8',
            'cnpj' => 'required|formato_cnpj',
            'address' => 'required|min:8',
            'email' => 'required',
            'telephone' => 'required|telefone_com_ddd',
            'name' => 'required|min:8',
            'cpf' => 'required|formato_cpf',
            'cell' => 'required|celular_com_ddd',
        ]);
        $client->company_name = $request->company_name;
        $client->fantasy_name = $request->fantasy_name;
        $client->cnpj = $request->cnpj;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cell = $request->cell;
        //dd($client);
        $client->save();
        return redirect()->route('user.index')->with('message', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
