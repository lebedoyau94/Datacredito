<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RespositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {repository}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class link to model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $repositoryName = $this->argument('repository');
        $this->line("Creating repository {$repositoryName} ...");
        if (!File::exists("app/Repositories"))
            File::makeDirectory("app/Repositories",0775,true);

        if (!File::exists("app/Repositories/Interfaces"))
            File::makeDirectory("app/Repositories/Interfaces",0775,true);

        if (!File::exists("app/Repositories/Interfaces/RepositoryInterface.php")){
            $schema = $this->schemaFileRepositoryInterface();
            File::put("app/Repositories/Interfaces/RepositoryInterface.php",$schema);
        }
        if (!File::exists("app/Repositories/RepositoryBase.php")){
            $schemaExtends = $this->schemaFileRepositoryExtends();
            File::put("app/Repositories/RepositoryBase.php",$schemaExtends);
        }
        if(!File::exists("app/Repositories/{$repositoryName}.php")){
            $schema = $this->schemaFileRepository($repositoryName);
            File::put("app/Repositories/{$repositoryName}.php",$schema);
        }
        $this->info("The repository with name {$repositoryName} was created successfully");
    }

    /**
     * @return string
     */
    private function schemaFileRepositoryInterface(): string
    {
        return
            '<?php namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function all(): Collection;

    public function create(array $data, array $attributes);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function filterIn(string $field, array $data);

    public function first(array $attributes);

    public function filters(array $data): Collection;

    public function limitation(array $data, int $limit): Collection;

    public function pagination(array $data, int $limit): Collection;

}';

    }

    /**
     * @return string
     */
    private function schemaFileRepositoryExtends(): string
    {
        return
            '<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Repositories\Interfaces\{RepositoryInterface};

class RepositoryBase implements RepositoryInterface
{
    /**
     * @var Model table
     */
    protected $repository;

    public function __construct(Model $model)
    {
        $this->setRepository($model);
    }

    public function all(): Collection
    {
        // TODO: Implement all() method.
        return $this->repository->all();
    }

    public function create(array $data, array $attributes): ?Model
    {
        // TODO: Implement create() method.
        return $this->repository->updateOrCreate($data,$attributes);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
        return $this->repository->find($id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->repository->find($id)->delete();
    }

    public function find($id): ?Model
    {
        // TODO: Implement find() method.
        return $this->repository->find($id);
    }

    public function filterIn(string $field, array $data): ?Collection
    {
        // TODO: Implement filterIn() method.
        return $this->repository->whereIn($field, $data)->get();
    }

    public function first(array $attributes): ?Model
    {
        // TODO: Implement filterIn() method.
        return $this->repository->firstWhere($attributes);
    }

    public function filters(array $data): Collection
    {
        // TODO: Implement filters() method.
        return $this->repository->where($data)->get();
    }

    public function limitation(array $data, int $limit): Collection
    {
        // TODO: Implement filters() method.
        return $this->repository->where($data)->get()->limit($limit);
    }
    public function pagination(array $data, int $limit): Collection
    {
        // TODO: Implement filters() method.
        return $this->repository->where($data)->pagination($limit);
    }

    public function setRepository(Model $model): RepositoryBase
    {
        // TODO: Implement setRepository() method.
        $this->repository = $model;
        return $this;
    }

    public function getRepository(): ?Model
    {
        // TODO: Implement getRepository() method.
        return $this->repository;
    }

}';
    }

    /**
     * @param string $repositoryName
     * @return string
     */
    private function schemaFileRepository(string $repositoryName): string
    {
        $entityName = Str::of($repositoryName)->replace("Repository","");
        return
            '<?php namespace App\Repositories;

use App\Models\{'.$entityName.'};

class '.$repositoryName.' extends RepositoryBase
{
    public function __construct()
    {
        $entity = new '.$entityName.'();
        parent::__construct($entity);
    }

}';
    }
}
