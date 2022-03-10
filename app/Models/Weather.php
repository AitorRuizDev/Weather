<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'temp', 'zip_code', 'feels_like', 'main', 'icon', 'temp_max', 'temp_min', 'speed'
    ];
}
