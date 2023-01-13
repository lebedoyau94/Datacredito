<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Services\UserService;

/**
 * @property UserService $userService
 */
class HomeController extends Controller
{

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard');
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
     * @param \App\Http\Requests\StoreHomeRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function store(StoreHomeRequest $request)
    {
        if($this->userService->updateCreditUserService())
            return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $homeController
     * @return \Illuminate\Http\Response
     */
    public function show(Home $homeController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $homeController
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $homeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $homeController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeRequest $request, Home $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $homeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $homeController)
    {
        //
    }
}
