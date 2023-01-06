<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeControllerRequest;
use App\Http\Requests\UpdateHomeControllerRequest;
use App\Models\HomeController;

class HomeControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreHomeControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function show(HomeController $homeController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeController $homeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeControllerRequest  $request
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeControllerRequest $request, HomeController $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeController $homeController)
    {
        //
    }
}
