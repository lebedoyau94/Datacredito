<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificateControllerRequest;
use App\Http\Requests\UpdateCertificateControllerRequest;
use App\Models\CertificateController;

class CertificateControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreCertificateControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificateControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificateController  $certificateController
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateController $certificateController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificateController  $certificateController
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateController $certificateController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificateControllerRequest  $request
     * @param  \App\Models\CertificateController  $certificateController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificateControllerRequest $request, CertificateController $certificateController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificateController  $certificateController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateController $certificateController)
    {
        //
    }
}
