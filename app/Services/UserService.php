<?php namespace App\Services;

use App\Repositories\{UserRepository};
use Illuminate\Support\Facades\{Cache, DB};
use Illuminate\Support\{Collection, Str};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\{Response};

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
            $payload = [
                "email" => \request()->user()->email,
                "code"  => \request("code"),
            ];
            if (!$user = $this->firstWhere($payload))
                throw new \Exception("El codigo ingresado no es correcto, favor de verificar",Response::HTTP_UNPROCESSABLE_ENTITY);

            $user->update(["email_verified_at" => \now()]);

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
    public function storeService(): ?Model
    {
        DB::beginTransaction();
        try {
            $payload = [];
            $response = $this->create([
                "company_id" => \company()->getKey(),
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
     * @param string $id
     * @return Model
     * @throws \Exception
     */
    public function updateService(string $id): ?Model
    {
        DB::beginTransaction();
        try {
            $payload = [];
            $response = $this->create(["id" => $id],$payload);

            DB::commit();

            return $response;

        } catch (\Throwable $e) {
            $error = $e->getMessage() . " " . $e->getLine() . " " . $e->getFile();
            \Log::error($error);
            DB::rollback();

            throw new \Exception($e->getMessage(),Response::HTTP_BAD_REQUEST);
        }
    }

}
