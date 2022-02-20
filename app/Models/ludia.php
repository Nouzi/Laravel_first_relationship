<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ludia extends Model
{
    use HasFactory;

    public function triedy() {
        return $this->belongsTo(trieda::class);
    }
}
