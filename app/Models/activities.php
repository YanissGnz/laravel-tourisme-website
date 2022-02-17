<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    protected $table = 'activities';

    public function activityimgs()
    {
        return $this->hasMany(activityimg::class);
    }
}
