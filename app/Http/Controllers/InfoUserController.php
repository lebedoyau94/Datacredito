<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoUserRequest;
use App\Http\Requests\UpdateInfoUserRequest;
use App\Models\InfoUser;
use App\Models\User;
use App\Services\InfoUserService;

/**
 * @property InfoUserService $infoUserService
 */
class InfoUserController extends Controller
{
    public function __construct(InfoUserService $infoUserService)
    {
        $this->infoUserService = $infoUserService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("information",[
            "name"      => \old("name"),
            "surnames"  => \old("surnames"),
            "phone"     => \old("phone"),
            "email"     => \old("email"),
            "type"      => \old("id_type"),
            "number"    => \old("id_number"),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view("information",[
            "name"      => \old("name"),
            "surnames"  => \old("surnames"),
            "phone"     => \old("phone"),
            "email"     => \old("email"),
            "type"      => \old("id_type"),
            "number"    => \old("id_number"),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreInfoUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(StoreInfoUserRequest $request): \Illuminate\Http\RedirectResponse
    {
        if ($this->infoUserService->storeService())
            return \redirect()->route("view.index");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoUser  $infoUserController
     * @return \Illuminate\Http\Response
     */
    public function show(InfoUser $infoUserController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoUser  $infoUserController
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoUser $infoUserController)
    {
        return view("info", [
            "name"      => \old("name"),
            "surnames"  => \old("surnames"),
            "phone"     => \old("phone"),
            "email"     => \old("email"),
            "type"      => \old("id_type"),
            "number"    => \old("id_number"),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoUserRequest  $request
     * @param  \App\Models\InfoUser  $infoUserController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoUserRequest $request, InfoUser $infoUserController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoUser  $infoUserController
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoUser $infoUserController)
    {
        //
    }
}
