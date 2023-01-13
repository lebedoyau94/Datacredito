<?php namespace App\Services;

use App\Models\User;
use App\Repositories\{UserRepository};
use Illuminate\Support\Facades\{Auth, Cache, DB};
use Illuminate\Support\{Arr, Collection, Str};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\{Response};

/**
 * @property CreditUserService $creditUserService
 */
class UserService extends UserRepository
{
    /**
     * UserService Construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @throws \Exception
     */
    public function getCodeService(): ?Model
    {
        try {

            if (!$user = User::firstWhere(\request()->except("_token")))
                throw new \Exception("El codigo ingresado no es correcto, favor de verificar",Response::HTTP_UNPROCESSABLE_ENTITY);

            $user->update(["email_verified_at" => \now()]);
            Auth::guard()->login($user);

            return  $user;

        } catch (\Throwable $e) {
            $error = $e->getMessage() . " " . $e->getLine() . " " . $e->getFile();
            \Log::error($error);

            throw new \Exception($e->getMessage(),Response::HTTP_BAD_REQUEST);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Model|null
     * @throws \Exception
     */
    public function storeCreditUserService(): ?Model
    {
        DB::beginTransaction();
        try {
            $data = [
                "tyc" => !!(\request("tyc") === "on")
            ];
            $payload = Arr::collapse([$data,\request()->except("tyc","_token")]);
            $response = (new CreditUserService())->create([
                "user_id" => \request()->user()->getKey()
            ],$payload);

            DB::commit();

            return $response;

        } catch (\Throwable $e) {
            $error = $e->getMessage() . " " . $e->getLine() . " " . $e->getFile();
            \Log::error($error);
            DB::rollback();

            throw new \Exception($e->getMessage(),Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Model|null
     * @throws \Exception
     */
    public function updateCreditUserService(): ?Model
    {
        DB::beginTransaction();
        try {
            $response = (new CreditUserService())->create([
                "user_id" => \request()->user()->getKey()
            ],\request()->except("_token"));

            DB::commit();

            return $response;

        } catch (\Throwable $e) {
            $error = $e->getMessage() . " " . $e->getLine() . " " . $e->getFile();
            \Log::error($error);
            DB::rollback();

            throw new \Exception($e->getMessage(),Response::HTTP_BAD_REQUEST);
        }
    }

    public function updateService(string $id, $data)
    {

        $user = $this->create(["id" => $id],$data);

    }

}
