<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\{User};

class UserRepository extends RepositoryBase
{
    public function __construct()
    {
        $model = new User;
        parent::__construct($model);
    }

    public function getName()
    {
        return $this->repository->name;
    }
    public function getEmail()
    {
        return $this->repository->email;
    }
}
