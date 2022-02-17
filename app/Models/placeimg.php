<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class placeimg extends Model
{
    protected $table = 'placeimg';


    public function place()
    {
        return $this->belongsTo(places::class);
    }
}
