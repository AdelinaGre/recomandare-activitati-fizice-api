<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primaryKey = 'activity_id';
    protected $fillable = [
        'activity_name',
        'activity_description',
        'recomend_temp',
        'recomend_humidity',
        'recomend_wind_speed',
        'recomend_precipitation',
        'recomend_atmo_pressure',
    ];
}
