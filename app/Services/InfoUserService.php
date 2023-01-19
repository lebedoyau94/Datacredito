<?php namespace App\Services;

use App\Mail\Debts;
use App\Repositories\{InfoUserRepository};
use Illuminate\Support\Facades\{Cache, DB, Hash};
use Illuminate\Support\{Arr, Collection, Str};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\{Response};
use Illuminate\Support\Facades\Mail;

class InfoUserService extends InfoUserRepository
{
    /**
     * InfoUserService Construct
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
    public function getIndexService(): ?Collection
    {
        try {

            return $this->getRepository()
                ->whereCompanyId(\company()->getKey())
                ->when(\request("status"), function ($query){
                    return $query->where("status",\toBoolean(\request("status")));
                })
                ->get();

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
            $payload = [
                "type"     => \request("id_type"),
                "number"   => \request("id_number"),
            ];
            $payloadUser = [
                "name"      => \request("name"). " ".\request("surnames"),
                'password'  => Hash::make(\request("phone")),
            ];
            $data = Arr::collapse([$payloadUser,\request()->except("id_type","id_number","name","surnames","_token")]);
            $user     = ( new UserService())->create([
                "email" => \request("email")
            ],$data);

            $this->create(["user_id" => $user->getKey()],$payload);

            for ($i = 0; $i < count(\request("bank")); $i++){
                $payload = [
                    "user_id"           => $user->getKey(),
                    "bank"              => \request("bank")[$i],
                    "type_credit"       => \request("type_credit")[$i],
                    "past_due"          => \request("past_due")[$i],
                    "amount"            => \request("amount")[$i],
                    "product_number"    => \request("product_number")[$i],
                ];
                (new DebtService())->getRepository()->create($payload);
            }

            Mail::to('jorge.martinez@itsolutionsengly.com')->send(new Debts($debt));


            DB::commit();

            return $user;

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
