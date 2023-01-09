<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfoUser extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public $table = 'info_users';
    public $guarded = [];
    public $dates = [
        'deleted_at'
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
