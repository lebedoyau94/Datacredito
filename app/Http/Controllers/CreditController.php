<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxCheckStoreRequest;
use App\Http\Requests\CodeStoreRequest;
use App\Http\Requests\DashboardRequest;
use App\Http\Requests\IndexCreditRequest;
use App\Http\Requests\QuestionsRequest;
use App\Http\Requests\SeventhRequest;
use App\Http\Requests\ValidateBoxRequest;
use App\Http\Requests\ValidateCodeRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditController extends Controller
{
    /**
     * @var UserService
     */
    private UserService $userService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('guest')->only('tranquillity');
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index1()
    {
        return view('index1');
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

	public function redirectSecond(IndexCreditRequest $indexCreditRequest)
	{
        return view('second',["phone" => \request("phone")]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewCode()
    {
        return view('third');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewQuarter()
    {
        return view('quarter',[
            "motive" => \old("motive"),
            "active" => \old("active")
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Exception
     */
    public function redirectQuarter(ValidateCodeRequest $validateCodeRequest)
    {
        if ($this->userService->getCodeService())
            return view('quarter');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewValidateRange()
    {
        return view('fifth',[
            "income"        => old("income"),
            "be_assigned"   => old("be_assigned")
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectFifth(BoxCheckStoreRequest $boxCheckRequest)
    {
        return view('fifth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectSixth(QuestionsRequest $questionsRequest)
    {
        return view('sixth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewSixth()
    {
        return view('sixth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectSeventh(SeventhRequest $seventhRequest)
    {
        return view('seventh');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectDashboard(DashboardRequest $seventhRequest)
    {
        return view('home');
    }
}
