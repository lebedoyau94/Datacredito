<?php namespace App\Repositories;

use App\Models\{Debt};

class DebtRepository extends RepositoryBase
{
    public function __construct()
    {
        $entity = new Debt();
        parent::__construct($entity);
    }

}