<?php

namespace App\Http\Controllers;

use App\Http\Requests\CodeStoreRequest;
use App\Http\Requests\IndexCreditRequest;
use App\Http\Requests\QuestionsRequest;
use App\Http\Requests\ValidateCodeRequest;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tranquillity()
    {
        return view('second',["phone" => \old("phone")]);
	}

	public function sendCredit(IndexCreditRequest $indexCreditRequest)
	{
        return view('second',["phone" => \request("phone")]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function code()
    {
        return view('third',["code" => \old("code"),]);
    }

	/**
     * Store the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeCode(CodeStoreRequest $codeStoreRequest)
    {
        return view('third',[
            "phone" => \request("phone"),
            "email" => \request("email")
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quarter()
    {
        return view('quarter');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function validateCode(ValidateCodeRequest $validateCoderequest)
    {
        return view('quarter');
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fifth()
    {
        return view('fifth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function questionRequest(QuestionsRequest $questionsRequest)
    {
        return view('fifth',["option" => \request("option")]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sixth()
    {
        return view('sixth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function seventh()
    {
        return view('seventh');
    }
}
