<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model};

class Employment extends Model
{
    use HasFactory, HasUuids;

    public $table = 'employment_users';
    public $guarded = [];
    
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
