<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $table ='disease';
    protected $primaryKey = 'id_disease';
    protected $connection = 'mysql';

    protected $fillable = [
        'name_disease',
        'description_dis',
           ];
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function weather_conditions(){
        return $this->belongsToMany(weather_conditions::class);
    }
}
