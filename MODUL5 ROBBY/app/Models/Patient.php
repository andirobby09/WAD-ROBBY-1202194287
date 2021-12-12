<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function vaccines(){
        return $this->belongsTo(vaccines::class, 'vaccine_id');
    }
}
