<?php namespace App\Repositories;

use App\Models\{Employment};

class EmploymentUserRepository extends RepositoryBase
{
    public function __construct()
    {
        $entity = new Employment();
        parent::__construct($entity);
    }

}