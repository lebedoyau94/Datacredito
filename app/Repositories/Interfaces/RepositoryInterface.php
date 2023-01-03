<?php namespace App\Repositories\Interfaces;

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

}