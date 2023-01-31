<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxCheckStoreRequest;
use App\Http\Requests\DashboardRequest;
use App\Http\Requests\IndexCreditRequest;
use App\Http\Requests\QuestionsRequest;
use App\Http\Requests\SeventhRequest;
use App\Http\Requests\ValidateCodeRequest;
use App\Http\Requests\SixthRequest;
use App\Mail\WelcomeCreditMail;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        if ($user = $this->userService->first(["phone" => \old("phone")])){
            $mail_segments    = explode("@", $user->email);
            $mail_segments[0] = substr($user->email,0,3).str_repeat("*", strlen($mail_segments[0]));
            $email = implode("@", $mail_segments);

            return view('second',[
                "phone" => \old("phone"),
                "email" => $email
            ]);
        }

        return view('index1');
	}

	public function redirectSecond(IndexCreditRequest $indexCreditRequest)
	{
        if ($user = $this->userService->first(["phone" => \request("phone")])){
            $mail_segments    = explode("@", $user->email);
            $mail_segments[0] = substr($user->email,0,3).str_repeat("*", strlen($mail_segments[0]));
            $email = implode("@", $mail_segments);

            return view('second',[
                "phone" => \request("phone"),
                "email" => $email
            ]);
        }

        return view('opportunity');
    }

    /**
     * @return Application|Factory|View
     * @throws \Exception
     */
    public function redirectThird()
    {
        $user = $this->userService->first(\request()->except("_token"));
        if (!$user)
            throw new \Exception("No concuerda el correo o celular ingresado, favor de verificar");

        $user = $this->userService->create(["id" => $user->getKey()],["code" => Str::random(10)]);
        Mail::to($user->email)->send(new WelcomeCreditMail($user));

        return view('third',[
            "phone" => $user->phone,
            "email" => $user->email,
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewCode()
    {
        return view('third',[
            "email" => \old("email"),
            "phone" => \old("phone")
        ]);
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
        /*if ($user = $this->userService->getCodeService()){
            if ($user->credit)
                return view('dashboard');

            return view('quarter');
        }*/
        $this->userService->getCodeService();

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
    public function redirectSixth(SeventhRequest $seventhRequest)
    {
        if($this->userService->updateCreditUserService())
            return view('sixth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectSeventh(SixthRequest $sixthRequest)
    {
        if($this->userService->updateCreditUserServiceFile())
            return view('seventh');
    }
}
