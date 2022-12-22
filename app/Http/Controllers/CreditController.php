<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
		}
		
		public function sendCredit()
		{
        return view('credit',["phone" => \request("phone")]);
    }

		/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function second()
    {
        return view('credit');
    }
}
