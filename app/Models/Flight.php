<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    

    protected $table ='users';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';


}
