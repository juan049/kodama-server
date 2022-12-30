<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientServiceRequest;
use App\Http\Requests\UpdateClientServiceRequest;
use App\Models\ClientService;

class ClientServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientService  $clientService
     * @return \Illuminate\Http\Response
     */
    public function show(ClientService $clientService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientService  $clientService
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientService $clientService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientServiceRequest  $request
     * @param  \App\Models\ClientService  $clientService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientServiceRequest $request, ClientService $clientService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientService  $clientService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientService $clientService)
    {
        //
    }
}
