<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    protected $table = 'places';


    public function images()
    {
        return $this->hasMany(placeimg::class);
    }
    
}
