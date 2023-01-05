<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditUser extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'reason', 'income_range', 'allocate_payment', 'electricity_receipt', 'water_bill', 'dreams'];

    // Relación a uno
    public function CreditUser(){
        return $this->hasOne(User::class);
    }
}
