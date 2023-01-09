<?php namespace App\Repositories;

use App\Models\{InfoUser};

class InfoUserRepository extends RepositoryBase
{
    public function __construct()
    {
        $entity = new InfoUser();
        parent::__construct($entity);
    }

}