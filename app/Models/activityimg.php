<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activityimg extends Model
{
    protected $table = 'activityimg';

    public function activity()
    {
        return $this->belongsTo(activities::class);
    }
    
}
