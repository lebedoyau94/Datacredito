<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinancialRequest;
use App\Http\Requests\UpdateFinancialRequest;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('financial');
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
     * @param  \App\Http\Requests\StoreFinancialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinancialRequest $request)
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
     * @param  \App\Http\Requests\UpdateFinancialRequest  $request
     * @param  \App\Models\FinancialController  $financialController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinancialRequest $request, FinancialController $financialController)
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
