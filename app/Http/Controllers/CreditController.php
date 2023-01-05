<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxCheckStoreRequest;
use App\Http\Requests\DashboardRequest;
use App\Http\Requests\IndexCreditRequest;
use App\Http\Requests\QuestionsRequest;
use App\Http\Requests\SeventhRequest;
use App\Http\Requests\ValidateCodeRequest;
use App\Services\UserService;

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
        $this->middleware('guest')->only('index1');
        //$this->middleware('auth')->only("redirectSecond");
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
        if ($this->userService->first(["phone" => \request("phone")]))
            return view('second',["phone" => \request("phone")]);

        return view('opportunity');
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
        if ($user = $this->userService->getCodeService()){
            if ($user->credit)
                return view('dashboard');

            return view('quarter');
        }

        return view('error');
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
    public function viewSixth()
    {
        return view('sixth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewSeventh()
    {
        return view('seventh');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Exception
     */
    public function redirectFifth(BoxCheckStoreRequest $boxCheckRequest)
    {
            if($this->userService->storeCreditUserService())
                return view('fifth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Exception
     */
    public function redirectSixth(QuestionsRequest $questionsRequest)
    {
        if($this->userService->updateCreditUserService())
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
     * @throws \Exception
     */
    public function redirectDashboard(DashboardRequest $seventhRequest)
    {
        if($this->userService->updateCreditUserService())
            return view('dashboard');
    }
}
