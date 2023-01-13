<?php namespace App\Services;

use App\Repositories\{DebtRepository};
use Illuminate\Support\Facades\{Cache, DB};
use Illuminate\Support\{Collection, Str};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\{Response};

class DebtService extends DebtRepository
{
    /**
     * DebtService Construct
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