<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinancialControllerRequest;
use App\Http\Requests\UpdateFinancialControllerRequest;
use App\Models\FinancialController;

class FinancialControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreFinancialControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinancialControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialController  $financialController
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialController $financialController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialController  $financialController
     * @return \Illuminate\Http\Response
     */
    public function edit(FinancialController $financialController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinancialControllerRequest  $request
     * @param  \App\Models\FinancialController  $financialController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinancialControllerRequest $request, FinancialController $financialController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialController  $financialController
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialController $financialController)
    {
        //
    }
}
