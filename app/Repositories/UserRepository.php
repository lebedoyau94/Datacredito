<?php namespace App\Repositories;

use App\Models\{User};

class UserRepository extends User
{
    public $table = "users";
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
}
