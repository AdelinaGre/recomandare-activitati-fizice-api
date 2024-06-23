<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_health_conditions extends Model
{
    use HasFactory;
    protected $table = 'user_health_cond';
    protected $primaryKey = 'id_user_health_cond';
    protected $fillable = [
        'user_id',
        'condition_disease_id',
    ];
}
