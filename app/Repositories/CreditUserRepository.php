<?php namespace App\Repositories;

use App\Models\{CreditUser};

class CreditUserRepository extends RepositoryBase
{
    public function __construct()
    {
        $entity = new CreditUser();
        parent::__construct($entity);
    }

}