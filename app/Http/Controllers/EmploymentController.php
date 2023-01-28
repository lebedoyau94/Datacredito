<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;
use App\Models\Employment;
use App\Services\EmploymentUserService;

class EmploymentController extends Controller
{   
    /**
     * @var UserService
     */
    private EmploymentUserService $employmentUserService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmploymentUserService $employmentUserService)
    {
        $this->employmentUserService = $employmentUserService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = array();
        if ($employmenUser = $this->employmentUserService->first(["user_id" => \request()->user()->getKey()])){
            $rows['profession'] =$employmenUser->profession;
            $rows['tyc'] =$employmenUser->tyc;
        }
        return view('employment',$rows);
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
        $rows = array();
        if ($employmenUser = $this->employmentUserService->first(["user_id" => \request()->user()->getKey()])){
            $rows['profession'] =$employmenUser->profession;
        }
       
        if($this->employmentUserService->storeService())
            return view('employment',$rows);

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
