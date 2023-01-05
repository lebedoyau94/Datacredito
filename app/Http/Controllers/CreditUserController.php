<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreditUserRequest;
use App\Http\Requests\UpdateCreditUserRequest;
use App\Models\CreditUser;

class CreditUserController extends Controller
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
     * @param  \App\Http\Requests\StoreCreditUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreditUserRequest $request)
    {
        $user = CreditUser::updateOrCreate([
            'reason'              => $request['reason'],
            'income_range'        => $request['income_range'],
            'electricity_receipt' => $request['electricity_receipt'],
            'water_bill'          => $request['water_bill'],
            'dreams'              => $request['dreams'],
        ]);

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditUser  $creditUser
     * @return \Illuminate\Http\Response
     */
    public function show(CreditUser $creditUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreditUser  $creditUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditUser $creditUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreditUserRequest  $request
     * @param  \App\Models\CreditUser  $creditUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreditUserRequest $request, CreditUser $creditUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditUser  $creditUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditUser $creditUser)
    {
        //
    }
}
