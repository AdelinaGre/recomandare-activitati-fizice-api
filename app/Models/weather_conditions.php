<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weather_conditions extends Model
{
    use HasFactory;

    protected $table ='weather_conditions';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = [
        'name_weather',
        'description_weather',
        'normal_coefficient',
        'high_coefficient',
        'low_coefficient',
           ];
    public function disease(){

        return $this->belongsToMany(Disease::class);
    }
}
