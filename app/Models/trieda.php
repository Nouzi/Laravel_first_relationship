<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trieda extends Model
{
    use HasFactory;

    public function ludia() {
        return $this->hasMany(ludia::class);
    }
}
