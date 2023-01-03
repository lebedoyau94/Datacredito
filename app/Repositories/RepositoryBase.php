<?php namespace App\Repositories;

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

}