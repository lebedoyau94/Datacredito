<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;
use App\Models\Employment;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employment');
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
     * @param  \App\Http\Requests\StoreEmploymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmploymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmploymentController  $employmentController
     * @return \Illuminate\Http\Response
     */
    public function show(EmploymentController $employmentController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmploymentController  $employmentController
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentController $employmentController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmploymentRequest  $request
     * @param  \App\Models\EmploymentController  $employmentController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmploymentRequest $request, EmploymentController $employmentController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmploymentController  $employmentController
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploymentController $employmentController)
    {
        //
    }
}
