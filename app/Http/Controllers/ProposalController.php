<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Exports\ProposalsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposal = Proposal::all();
        //dd($proposal);
        return view('listAllProposal', ['proposals' => $proposal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('createProposal', ['clients' => $client]);   
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
            'client_name' => 'required|min:8',
            'address' => 'required|min:8',
            'service' => 'required|min:3',
            'amount' => 'required|numeric',
            'entrance' => 'required|numeric',
            'number_installments' => 'required|integer',
            'installments_value' => 'required|numeric',
            'pay_day' => 'required',
            'installment_date' => 'required',
            'attachment' => 'required',
            'status' => 'required',
        ]);
        $proposal = new Proposal();
        $proposal->client_name = $request->client_name;
        $proposal->address = $request->address;
        $proposal->service = $request->service;
        $proposal->amount = $request->amount;
        $proposal->entrance = $request->entrance;
        $proposal->number_installments = $request->number_installments;
        $proposal->installments_value = $request->installments_value;
        $proposal->pay_day = $request->pay_day;
        $proposal->installment_date = $request->installment_date;
        $proposal->attachment = $request->attachment;
        $proposal->status = $request->status;
        //dd($proposal);
        $proposal->save();
        return redirect()->route('user.index')->with('message', 'Porposta Criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $proposal = Proposal::where('client_name', 'LIKE', '%' . $request->search . '%')->orWhere('status', 'LIKE', '%' . $request->search . '%')->orWhere('created_at', 'LIKE', '%' . $request->search . '%')->get();
        return view('listAllProposal', ['proposals' => $proposal, 'search' => $request->search]);
    }

    public function export() 
    {
        return Excel::download(new ProposalsExport, 'Propostas.xlsx');

    }

    public function edit(Proposal $proposal)
    {
        $client = Client::all();
        return view('updateProposal', ['proposal' => $proposal, 'clients' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Proposal $proposal, Request $request)
    {
        $request->validate([
            'client_name' => 'required|min:8',
            'address' => 'required|min:8',
            'service' => 'required|min:3',
            'amount' => 'required|numeric',
            'entrance' => 'required|numeric',
            'number_installments' => 'required|integer',
            'installments_value' => 'required|numeric',
            'pay_day' => 'required',
            'installment_date' => 'required',
            'attachment' => 'required',
            'status' => 'required',
        ]);
        $proposal->client_name = $request->client_name;
        $proposal->address = $request->address;
        $proposal->service = $request->service;
        $proposal->amount = $request->amount;
        $proposal->entrance = $request->entrance;
        $proposal->number_installments = $request->number_installments;
        $proposal->installments_value = $request->installments_value;
        $proposal->pay_day = $request->pay_day;
        $proposal->installment_date = $request->installment_date;
        $proposal->attachment = $request->attachment;
        $proposal->status = $request->status;
        //dd($proposal);
        $proposal->save();
        return redirect()->route('user.index')->with('message', 'Porposta Atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
