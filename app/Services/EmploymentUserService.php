<?php namespace App\Services;

use App\Repositories\{EmploymentUserRepository};
use Illuminate\Support\Facades\{Cache, DB};
use Illuminate\Support\{Arr, Collection, Str};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\{Response};

class EmploymentUserService extends EmploymentUserRepository
{
    /**
     * EmploymentUserService Construct
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
            $file = \request()->file();
            $data = [
                "tyc" => !!(\request("tyc") === "on")
            ];
            $payload = Arr::collapse([$data,\request()->except("tyc","_token",'file')]);
          
            $nameFile= \request()->user()->getKey().'.'.$file['file']->getClientOriginalExtension();
            $payload['file'] = "employmentUser/".$nameFile;
    
            $response = $this->create([
                "user_id" => \request()->user()->getKey(),
            ],$payload);

            $file['file']->move(storage_path("app/public/employmentUser"),$payload['file']);
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